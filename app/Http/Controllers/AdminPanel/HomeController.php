<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        return view('admin.index');
    }
    public function setting()
    {
        //echo "setting"; exit();

        $data=Setting::first();
        if($data==null)
        {
            //echo "Save Settings ";exit()    ;

            $data=new Setting();
            $data->save();
            $data=Setting::first();

        }
        return view("admin.setting",['data'=>$data]);
    }
    public function settingUpdate(Request $request)
    {
        //echo "Save Settings ";exit();
        $id=$request->input('id');
        $data=Setting::find($id);
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->company=$request->input('company');
        $data->address=$request->input('address');
        $data->phone=$request->input('phone');
        $data->fax=$request->input('fax');
        $data->email=$request->input('email');
        $data->smtpserver=$request->input('smtpserver');
        $data->smtpemail=$request->input('smtpemail');
        $data->smtppassword=$request->input('smtppassword');
        $data->smtpport=$request->input('smtpport');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->route('admin.setting');




    }
}