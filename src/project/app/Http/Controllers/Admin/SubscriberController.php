<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use Datatables;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //*** JSON Request
    public function datatables()
    {
         $datas = Subscriber::orderBy('id')->get();
         //--- Integrating This Collection Into Datatables
         return Datatables::of($datas)
                            ->addColumn('sl', function(Subscriber $data) {
                                $id = 1;
                                return $id++;
                            }) ->addColumn('action', function(Subscriber $data) {
                 return '<a href="javascript:;" class="send" data-email="'. $data->email .'" data-toggle="modal" data-target="#vendorform"><i class="fas fa-envelope"></i> Send Email</a>';
             })
             ->toJson();//--- Returning Json Data To Client Side
    }

    //*** GET Request
    public function index()
    {
        return view('admin.subscribers.index');
    }
    //*** GET Request
    public function download()
    {
        //  Code for generating csv file
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=subscribers.csv');
        $output = fopen('php://output', 'w');
        fputcsv($output, array('Subscribers Emails'));
        $result = Subscriber::all();
        foreach ($result as $row){
            fputcsv($output, $row->toArray());
        }
        fclose($output);
    }
}
