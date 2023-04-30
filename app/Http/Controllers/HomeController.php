<?php

namespace App\Http\Controllers;

use App\Models\Annoucement;
use App\Models\Setting;
use App\Models\Content;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        $sliderdata=Annoucement::limit(5)->get();
        $contentlist=Content::limit(5)->get();
        return view('home.index',[
            'sliderdata' => $sliderdata,
            'contentlist'=>$contentlist

        ]);
    }

    public function content(){
        $content=Content::all();
        $category=Category::all();
        return view('home.content',[
            'content'=>$content,
            'category'=>$category
        ]);
    }
    public function contentdetail($id){

        $data=Content::find($id);
        $category=Category::all();
        return view('home.contentdetail',[
            'data'=>$data
        ]);
    }
    public function announce(){
        $announce=Annoucement::all();
        $category=Category::all();
        return view('home.announce',[
            'announce'=>$announce,
            'category'=>$category
        ]);
    }
    public function contact()
    {
        //echo "contact";exit();

        $setting=Setting::first();
        return view('home.contact',
            [
                'setting'=>$setting,
            ]);
    }
    public function storemessage(Request $request)
    {
        //echo "store message";exit();
        //dd($request);
        $data=new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your messsage has been sent.');

    }
    public function announcedetail($id){

        $data=Annoucement::find($id);
        $category=Category::all();
        return view('home.announcedetail',[
            'data'=>$data
        ]);
  
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
    