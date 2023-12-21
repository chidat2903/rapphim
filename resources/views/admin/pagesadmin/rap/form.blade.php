@extends('admin.index')

@section('admin.content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rap">
    Thêm nhanh
  </button>
  
  <!-- Modal -->
  <div class="modal" id="rap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"> 
          <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm danh Quốc gia</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
              <div class="card-header">Quản lý Rap</div>
              <div class="card-body container">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                      {!! Form::open(['route' => 'rap.store', 'method' => 'POST']) !!}
                      
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
                      {!! Form::submit('Thêm dữ liêu', ['class' => 'btn btn-primary mt-2']) !!}
                    </div>
  
                  {!! Form::close() !!}
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table mt-4 table-success table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Tên Rap</th>
                            <th scope="col">Đường link</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Giới thiệu</th>
                            <th scope="col">Hiển thị</th>
                            <th scope="col">Chỉnh sửa</th>
                        </tr>
                    </thead>
                    <tbody class="order_position">
                        @foreach ($list as $key => $cate)
                            <tr id="{{ $cate->id }}">
                                <th scope="row">{{ $key }}</th>
                                <td><img width="70" height="100" src="{{ asset('uploads/rap/' . $cate->image) }}"alt=""></td>
                                <td>{{ $cate->ten_rap }}</td>
                                <td>{{ $cate->slug }}</td>
                                <td>{{ $cate->dia_chi }}</td>
                                <td>{{ $cate->gioi_thieu }}</td>
                                <td>
                                    @if ($cate->status == 1)
                                        <span class="badge badge-success">Hiển thị</span>
                                    @else
                                        <span class="badge badge-danger">Không hiển thị</span>
                                    @endif
                                </td>
                                <td>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['rap.destroy', $cate->id, 'onsubmit' => 'return confirm("Bạn có muốn xóa hay ko?")'],
                                    ]) !!}
                                    {!! Form::submit('Xóa', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    <a href="{{ route('rap.edit', $cate->id) }}" class="btn btn-warning">Sửa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
