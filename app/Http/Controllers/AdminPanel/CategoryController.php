<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $appends=[
        'getParentsTree'
       ];
       public static function getParentsTree($category,$title)
       {
        if($category->parent_id==0)
        {
            return $title;
        }
        $parent=Category::find($category->parent_id);
        $title=$parent->title.'>'.$title;
        return CategoryController::getParentsTree($parent,$title);
       }

    public function index()
    {
        $data=Category::all();
       return view('admin.category.index',[
        'data' =>$data 
       ]);
    }

    public function create()
    {
        $data = Category::all();

        return view('admin.category.create', [
            'data' => $data
        ]);

    }

    public function store(Request $request)
    {
        
        $data = new Category();
        $data->parent_id =$request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if($request->file('image')){

            $data->image=$request->file('image')->store('images');

        }
        $data->save();
        return redirect('admin/category');
    }

    public function show(Category $category,$id)
    {
        $data = Category::find($id);
        return view('admin.category.show', [
            'data' => $data
        ]);
    }

 
    public function edit(Category $category,$id)
    {
        
        $data=Category::find($id);
        $datalist=Category::all();
       return view('admin.category.edit',[
        'data' =>$data,
        'datalist'=>$datalist
       ]);
    }

    public function update(Request $request, Category $category,$id)
    {
        $data=Category::find($id);
        $data->parent_id =$request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if($request->file('image')){

            $data->image=$request->file('image')->store('image');

        }
        $data->save();
        return redirect('admin/category');
    }


    public function destroy(Category $category, $id)
    {
        $data = Category::find($id);
        if ($data->image && Storage::disk('public')->exists('$data->image'))
        {
      
        Storage::delete($data->image);
        }
    
        $data->delete();
        return redirect('admin/category');

    }
}
