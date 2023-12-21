<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\San_Pham;
use App\Models\admin\Rap;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_bap = San_Pham::with('rap')->orderBy('id','DESC')->where('type','bap')->get();
        $list_nuoc = San_Pham::with('rap')->orderBy('id','DESC')->where('type','nuoc')->get();
        $list_combo = San_Pham::with('rap')->orderBy('id','DESC')->where('type','combo')->get();
        $rap = Rap::pluck('ten_rap', 'id');
        return  view('admin.pagesadmin.san_pham.form',compact(
            'list_bap',
            'list_nuoc',
            'rap',
            'list_combo'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rap = Rap::pluck('ten_rap', 'id');
        return  view('admin.pagesadmin.san_pham.index',compact(
            'rap',
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $san_pham = new San_pham();
        $san_pham->ten_sp = $request->ten_sp;
        $san_pham->slug = $request->slug;
        $san_pham->status = $request->status;
        $san_pham->gia = $request->gia;
        $san_pham->rap_id = $request->rap_id;
        $san_pham->type = $request->type;


        $get_image1 = $request ->file('image');
        if($get_image1) {
            $get_name_image = $get_image1->getClientOriginalName(); //lấy tên hình ảnh vd như hinhanh1.jpg
            $name_image = current(explode('.',$get_name_image)); //tách dấu chấm ra để làm chuõi vd như [0]hinhanh1 . [1]jpg
            $new_image =  $name_image.rand(0,9999).'.'.$get_image1->getClientOriginalExtension(); //random 4 số khác nhau để tránh bị trùng hình ảnh ví dụ hinhanh1234.jpg
            $get_image1->move('uploads/bap_nuoc',$new_image);
            $san_pham->image = $new_image;
        }
        $san_pham->save();
        return redirect()->back()->with('success', 'Bạn đã thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $san_pham = San_Pham::find($id);
        $rap = Rap::pluck('ten_rap', 'id');
        return  view('admin.pagesadmin.san_pham.index',compact(
            'rap',
            'san_pham'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $san_pham =  San_pham::find($id);
        $san_pham->ten_sp = $request->ten_sp;
        $san_pham->slug = $request->slug;
        $san_pham->status = $request->status;
        $san_pham->gia = $request->gia;
        $san_pham->rap_id = $request->rap_id;
        $san_pham->type = $request->type;


        $get_image1 = $request ->file('image');
        if($get_image1) {
            if (!empty ($san_pham->image)) {
                unlink('uploads/bap_nuoc/'.$san_pham->image);
            }
            $get_name_image = $get_image1->getClientOriginalName(); //lấy tên hình ảnh vd như hinhanh1.jpg
            $name_image = current(explode('.',$get_name_image)); //tách dấu chấm ra để làm chuõi vd như [0]hinhanh1 . [1]jpg
            $new_image =  $name_image.rand(0,9999).'.'.$get_image1->getClientOriginalExtension(); //random 4 số khác nhau để tránh bị trùng hình ảnh ví dụ hinhanh1234.jpg
            $get_image1->move('uploads/bap_nuoc',$new_image);
            $san_pham->image = $new_image;
        }
        $san_pham->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $san_pham = San_pham::find($id);
        if(file_exists('uploads/bap_nuoc/'.$san_pham->image)){
            unlink('uploads/bap_nuoc/'.$san_pham->image);
        }
        $san_pham->delete();
        return redirect()->back()->with('success', 'Bạn đã xóa thành công');;
    }
}
