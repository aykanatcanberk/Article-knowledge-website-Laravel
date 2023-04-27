<?php

namespace App\Http\Controllers;

use App\Models\Annoucement;
use App\Models\Content;
use App\Models\Category;
use Illuminate\Http\Request;

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

    public function announcedetail($id){

        $data=Annoucement::find($id);
        $category=Category::all();
        return view('home.announcedetail',[
            'data'=>$data
        ]);
    }
}
    