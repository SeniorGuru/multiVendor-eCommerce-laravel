<?php

namespace App\Http\Controllers\Admin;

use Datatables;
use App\Classes\GeniusMailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Theme;

use Validator;
use Auth;

class ThemeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

	    //*** JSON Request
	    public function datatables()
	    {
	        $datas = User::where('is_vendor','=',2)->orWhere('is_vendor','=',1)->orderBy('id','desc')->get();
	         //--- Integrating This Collection Into Datatables
	         return Datatables::of($datas)
                                ->addColumn('status', function(User $data) {
                                    $class = $data->is_vendor == 2 ? 'drop-success' : 'drop-danger';
                                    $s = $data->is_vendor == 2 ? 'selected' : '';
                                    $ns = $data->is_vendor == 1 ? 'selected' : '';
                                    return '<div class="action-list"><select class="process select vendor-droplinks '.$class.'">'.
                '<option value="'. route('admin-vendor-st',['id1' => $data->id, 'id2' => 2]).'" '.$s.'>Activated</option>'.
                '<option value="'. route('admin-vendor-st',['id1' => $data->id, 'id2' => 1]).'" '.$ns.'>Deactivated</option></select></div>';
                                })
	                            ->addColumn('action', function(User $data) {
	                                return '<div class="godropdown"><button class="go-dropdown-toggle"> Actions<i class="fas fa-chevron-down"></i></button><div class="action-list"><a href="' . route('admin-vendor-secret',$data->id) . '" > <i class="fas fa-user"></i> Secret Login</a><a href="javascript:;" data-href="' . route('admin-vendor-verify',$data->id) . '" class="verify" data-toggle="modal" data-target="#verify-modal"> <i class="fas fa-question"></i> Ask For Verification</a><a href="' . route('admin-vendor-show',$data->id) . '" > <i class="fas fa-eye"></i> Details</a><a href="' . route('admin-vendor-edit',$data->id) . '"> <i class="fas fa-edit"></i> Edit</a><a href="javascript:;" class="send" data-email="'. $data->email .'" data-toggle="modal" data-target="#vendorform"><i class="fas fa-envelope"></i> Send Email</a><a href="javascript:;" data-href="' . route('admin-vendor-delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></div></div>';
	                            })
	                            ->rawColumns(['status','action'])
	                            ->toJson(); //--- Returning Json Data To Client Side
	    }

	//*** GET Request
    public function index()
    {
        $themes = Theme::select('key','value')->get();
        $data = array();
        foreach ($themes as $theme) {
            $data[$theme['key']] = $theme['value'];
        }
        return view('admin.themes.index', compact('data'));
    }

    public function edit($id)
    {
        $datas = Theme::where('key', '!=', $id)->get();
        foreach ($datas as $data) {
            $data->value = 0;
            $data->save();
        }

        $data = Theme::where('key', '=', $id)->firstOrFail();
        $data->value = 1;
        $data->save();
        $themes = Theme::select('key','value')->get();
        $data = array();
        foreach ($themes as $theme) {
            $data[$theme['key']] = $theme['value'];
        }
        return view('admin.themes.index',compact('data'));
    }
}
