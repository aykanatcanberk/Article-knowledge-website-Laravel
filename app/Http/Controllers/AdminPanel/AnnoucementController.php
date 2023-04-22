<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Annoucement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnoucementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Annoucement::all();
        
       return view('admin.annoucement.index',[
        'data' =>$data 
       ]);
    }

    public function create()
    {
        $data = Annoucement::all();

        return view('admin.annoucement.create', [
            'data' => $data
        ]);

    }

    public function store(Request $request)
    {
        $data = new Annoucement();
        //$data->parent_id =$request->parent_id;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->status = $request->status;
        if($request->file('image')){

            $data->image=$request->file('image')->store('images');

        }
        $data->save();
        return redirect('admin/annoucement');
    }
    public function show(string $id)
    {
        $data = Annoucement::find($id);
        return view('admin.annoucement.show', [
            'data' => $data
        ]);
    }

    public function edit(string $id)
    {
        $data=Annoucement::find($id);
        $datalist=Annoucement::all();
       return view('admin.annoucement.edit',[
        'data' =>$data,
        'datalist'=>$datalist
       ]);
    }

    public function update(Request $request, string $id)
    {
        $data=Annoucement::find($id);
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->status = $request->status;
        if($request->file('image')){

            $data->image=$request->file('image')->store('image');

        }
        $data->save();
        return redirect('admin/annoucement');
    }

    public function destroy(string $id)
    {
        $data = Annoucement::find($id);
        if ($data->image && Storage::disk('public')->exists('$data->image'))
        {
      
        Storage::delete($data->image);
        }
    
        $data->delete();
        return redirect('admin/annoucement');
    }
}
