<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Channel;
use App\Models\ChannelCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
class ChannelCategoryController extends Controller
{
    public function index()
    {
        if (request()->ajax()){
            $channels = ChannelCategory::orderByDesc('created_at');
            return DataTables::of($channels)
                ->addColumn('action', function($data){
                    $html = '<div class="btn-group" role="group" aria-label="Basic example">';
                    $html .='<a href="'.route('channel.category.edit',['id'=>$data->id]).'" class="btn btn-info edit"><i class="fa fa-edit"></i></a>';
                    $html .='<a href="'.route('channel.category.delete').'" class="btn btn-danger delete"><i class="fa fa-trash"></i></a>';
                    $html .= '<form class="d-none delete" method="POST" action="'.route('channel.category.delete').'">'.method_field('DELETE').csrf_field().'<input type="hidden" name="id" value="'.$data->id.'"></form>';
                    $html .= '</div>';
                    return $html;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:255'],
            'slug'=>['required','max:255','unique:channel_categories'],
        ]);
        $category = new ChannelCategory();
        $this->extracted($request,$category);
        $category->save();
        toast('Channel Category create successfully','success');
        return redirect()->route('channel.category.index');
    }
    public function edit($id){
        $category = ChannelCategory::where('id',$id)->first();
        if (empty($category)){
            toast('Category Not found','error');
            return  redirect()->route('channel.category.index');
        }
        return view('admin.category.edit')
            ->with([
                'category'=>$category
            ]);
    }
    public function update($id, Request $request){
        $this->validate($request,[
            'name'=>['required','max:255'],
            'slug'=>['required','max:255','unique:channel_categories,slug,'.$id],
        ]);
        $category = ChannelCategory::where('id',$id)->first();
        if (empty($category)){
            toast('Category Not found','error');
            return  redirect()->route('channel.category.index');
        }
        $this->extracted($request,$category);
        $category->save();
        toast('Channel category update successfully','success');
        return  redirect()->route('channel.category.index');
    }
    public function destroy(Request $request)
    {

        $category = ChannelCategory::where('id',$request->id)->first();
        if (empty($category)){
            toast('Category Not found','error');
            return  redirect()->route('channel.category.index');
        }
        $category->delete();
        toast('Channel category delete successfully','success');
        return  redirect()->route('channel.category.index');
    }
    private function extracted(Request $request,ChannelCategory $category){
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->homepage = $request->homepage;
        $category->status = $request->status;
        $category->seo_title = $request->seo_title;
        $category->seo_keyword = $request->seo_keyword;
        $category->seo_description = $request->seo_description;
    }
}
