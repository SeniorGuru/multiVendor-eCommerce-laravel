<?php

namespace App\Http\Controllers\Admin;

use App\Models\TaxRate;
use Datatables;
use App\Classes\GeniusMailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\TaxClass;

use Validator;
use Auth;

class TaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

	    //*** JSON Request
	    public function datatables()
	    {
	        $datas = TaxClass::all();
	         //--- Integrating This Collection Into Datatables

	         return Datatables::of($datas)
                                ->addColumn('status', function(TaxClass $data) {
                                    $class = $data->is_active == 1 ? 'drop-success' : 'drop-danger';
                                    $s = $data->is_active == 1 ? 'selected' : '';
                                    $ns = $data->is_active == 0 ? 'selected' : '';
                                    return '<div class="action-list"><select class="process select vendor-droplinks '.$class.'">'.
                                        '<option value="'. route('admin-tax-st',['id1' => $data->id, 'id2' => 1]).'" '.$s.'>Activated</option>'.
                                        '<option value="'. route('admin-tax-st',['id1' => $data->id, 'id2' => 0]).'" '.$ns.'>Deactivated</option></select></div>';
                                })
	                            ->addColumn('action', function(TaxClass $data) {
	                                return '<div class="godropdown"><button class="go-dropdown-toggle"> Actions<i class="fas fa-chevron-down"></i></button><div class="action-list"><a href="' . route('admin-tax-edit',$data->id) . '"> <i class="fas fa-edit"></i> Edit</a><a href="javascript:;" data-href="'. route('admin-tax-delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></div></div>';
	                            })
	                            ->rawColumns(['status','action'])
	                            ->toJson(); //--- Returning Json Data To Client Side
	    }

	//*** GET Request
    public function index()
    {
        return view('admin.tax.index');
    }

    //*** GET Request
    public function edit($id)
    {
        $data = TaxClass::findOrFail($id);
        $rates = array();
        $rates = TaxRate::where('tax_class_id','=', $data->id)->get();
        return view('admin.tax.edit',compact('data', 'rates'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = TaxClass::findOrFail($id);
        $data->name = $input['classname'];
        $data->based_on = $input['based_on'];
        $data->save();

        $rates = TaxRate::where('tax_class_id','=', $id)->delete();

        $names = $request->name;
        $countries = $request->country;
        $states = $request->state;
        $cities = $request->city;
        $zips = $request->zip;
        $rates = $request->rate;
        for($i = 1; $i < count($names) ; $i++) {
            $temp = new TaxRate();
            $temp->tax_class_id = $data->id;
            $temp->name = $names[$i];
            $temp->country = $countries[$i];
            $temp->state = $states[$i];
            $temp->city = $cities[$i];
            $temp->zip = $zips[$i];
            $temp->rate = $rates[$i];
            $temp->save();
        }

        $msg = 'Data Updated Successfully.';
        return response()->json($msg);
        //--- Redirect Section Ends
    }

    public function status($id1,$id2)
    {
        $tax = TaxClass::findOrFail($id1);
        $tax->is_active = $id2;
        $tax->update();
        //--- Redirect Section
        $msg[0] = 'Status Updated Successfully.';
        return response()->json($msg);
        //--- Redirect Section Ends

    }


    //*** GET Request
    public function create()
    {

        return view('admin.tax.create');
    }

    public function store(Request $request) {

        $input = $request->all();
        $data = new TaxClass();
        $data->name = $input['classname'];
        $data->based_on = $input['based_on'];
        $data->save();
        $names = $request->name;
        $countries = $request->country;
        $states = $request->state;
        $cities = $request->city;
        $zips = $request->zip;
        $rates = $request->rate;
        for($i = 1; $i < count($names) ; $i++) {
            $temp = new TaxRate();
            $temp->tax_class_id = $data->id;
            $temp->name = $names[$i];
            $temp->country = $countries[$i];
            $temp->state = $states[$i];
            $temp->city = $cities[$i];
            $temp->zip = $zips[$i];
            $temp->rate = $rates[$i];
            $temp->save();
        }
        $msg = 'New Class Added Successfully.';
        return response()->json($msg);
    }
    //*** GET Request
    public function destroy($id)
    {
        $tax = TaxClass::findOrFail($id);
        $tax->delete();
        //--- Redirect Section
        $msg = 'Tax Class Deleted Successfully.';
        return response()->json($msg);
        //--- Redirect Section Ends
    }

}
