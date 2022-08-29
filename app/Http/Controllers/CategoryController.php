<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function showCategoryList()
    {
        $categories=Category::all();
        return view('admin.pages.category.categoryList',compact('categories'));
    }

    function createCategory()
    {
        return view('admin.pages.category.addCategory');
    }

    public function storeCategory(Request $request)
    {
          $filename=null;
          if ($request->hasFile('image'))
          {
                    $file=$request->file('image');
          $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
          $file->storeAs('/uploads',$filename);
          }
          
     
     Category::create([

          'name'=>$request->name,
          'slug'=>$request->slug,
          'description'=>$request->description,
          'meta_title'=>$request->meta_title,
          'meta_descrition'=>$request->meta_descrition,
          'meta_keyword'=>$request->meta_keyword,
          'navbar_status'=>$request->navbar_status,
          'status'=>$request->status,
          'created_by'=>Auth::user()->id,
          'image'=>$filename,

         ]);
         return redirect()->back();
    }

    function editCategory($id)
    {
        $category =Category::find($id);
        return view('admin.pages.category.edit',compact('category'));
    }

    function updateCategory(Request $request,$id)
    {
        $category =Category::find($id);
        $category_image = $category->image;

        if($request->hasFile('image'))
        {
            
            $category_image = date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $category_image);
        }

        $category->update([
            'name'=>$request->name,
            'image'=>$category_image
        ]);
        return redirect()->back()->with('success',' Update successfully..');
    }
}
