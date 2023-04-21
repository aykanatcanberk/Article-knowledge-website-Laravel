<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;


class ImageController extends Controller
{
    
    public function index($cid)
    {
       $content=Content::find($cid);
       $images=DB::table('images')->where('content_id',$cid)->get();
        return view('admin.image.index',[

            'content'=> $content,
            'images'=> $images,
        ]);
      
    }

    public function create($cid)
    {
        
    }


    public function store(Request $request,$cid)
    {
        $data= new Image();
        $data->content_id= $cid;
        $data->title = $request->title;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('image');
        }
        $data->save();

        return redirect()->route('admin.image.index',['cid'=>$cid]);
    }


    public function show(string $id)
    {
        
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request,$cid,$id)
    {
        //
    }

    public function destroy($cid,$id)
    {
        $data=Image::find($id);
        if ($data->image && Storage::disk('public')->exists('$data->image'))
        {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect()->route('admin.image.index',['cid'=>$cid]);
    }
}
