<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Rap;

class RapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Rap::orderBy('id','ASC')->get();
        return  view('admin.pagesadmin.rap.form',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('admin.pagesadmin.rap.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rap = new Rap();
        $rap->ten_rap = $request->ten_rap;
        $rap->slug = $request->slug;
        $rap->status = $request->status;
        $rap->dia_chi = $request->dia_chi;
        $rap->gioi_thieu = $request->gioi_thieu;


        $get_image1 = $request ->file('image');
        if($get_image1) {
            $get_name_image = $get_image1->getClientOriginalName(); //lấy tên hình ảnh vd như hinhanh1.jpg
            $name_image = current(explode('.',$get_name_image)); //tách dấu chấm ra để làm chuõi vd như [0]hinhanh1 . [1]jpg
            $new_image =  $name_image.rand(0,9999).'.'.$get_image1->getClientOriginalExtension(); //random 4 số khác nhau để tránh bị trùng hình ảnh ví dụ hinhanh1234.jpg
            $get_image1->move('uploads/rap',$new_image);
            $rap->image = $new_image;
        }
        $rap->save();
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
        $rap = Rap::find($id);
        $list = Rap::orderBy('id','ASC')->get();
        return  view('admin.pagesadmin.rap.index',compact('list','rap'))->with('success', 'Bạn đã thêm thành công');;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rap = Rap::find($id);
        $rap->ten_rap = $request->ten_rap;
        $rap->slug = $request->slug;
        $rap->status = $request->status;
        $rap->dia_chi = $request->dia_chi;
        $rap->gioi_thieu = $request->gioi_thieu;
        $get_image1 = $request ->file('image');
        if($get_image1) {
            if (!empty ($rap->image)) {
                unlink('uploads/rap/'.$rap->image);
            }
            $get_name_image = $get_image1->getClientOriginalName(); //lấy tên hình ảnh vd như hinhanh1.jpg
            $name_image = current(explode('.',$get_name_image)); //tách dấu chấm ra để làm chuõi vd như [0]hinhanh1 . [1]jpg
            $new_image =  $name_image.rand(0,9999).'.'.$get_image1->getClientOriginalExtension(); //random 4 số khác nhau để tránh bị trùng hình ảnh ví dụ hinhanh1234.jpg
            $get_image1->move('uploads/rap',$new_image);
            $rap->image = $new_image;
        }
        $rap->save();
        return redirect()->route('rap.index')->with('success', 'Bạn đã cập nhập thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rap = Rap::find($id);
        if(file_exists('uploads/rap/'.$rap->image)){
            unlink('uploads/rap/'.$rap->image);
        }
        $rap->delete();
        return redirect()->back()->with('success', 'Bạn đã xóa thành công');;
    }
}
