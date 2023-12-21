@extends('admin.index')

@section('admin.content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Quản lý Bắp nước</div>
                    <div class="card-body container">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (!isset($san_pham))
                            {!! Form::open(['route' => 'san_pham.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        @else
                            {!! Form::open(['route' => ['san_pham.update', $san_pham->id], 'method' => 'PUT','enctype' => 'multipart/form-data']) !!}
                        @endif
                        <div class="form-group">
                            {!! Form::label('title', 'Tên san_pham', []) !!}
                            {!! Form::text('ten_sp', isset($san_pham) ? $san_pham->ten_sp : '', [
                                'class' => 'form-control',
                                'placeholder' => 'Nhập vào dữ liệu...',
                                'id' => 'slug',
                                'onkeyup' => 'ChangeToSlug()',
                            ]) !!}
                            @if ($errors->has('title'))
                                <span class="errors-message">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('slug', 'Đường link', []) !!}
                            {!! Form::text('slug', isset($san_pham) ? $san_pham->slug : '', [
                                'class' => 'form-control',
                                'placeholder' => 'Nhập vào dữ liệu...',
                                'id' => 'convert_slug',
                            ]) !!}
                            @if ($errors->has('slug'))
                                <span class="errors-message">{{ $errors->first('slug') }}</span>
                            @endif
                        </div>


                        <div class="form-group">
                            {!! Form::label('title', 'Gia', []) !!}
                            {!! Form::text('gia', isset($san_pham) ? $san_pham->gia : '', [
                                'class' => 'form-control',
                                'placeholder' => 'Nhập vào dữ liệu...',
                            ]) !!}
                            @if ($errors->has('title'))
                                <span class="errors-message">{{ $errors->first('title') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('Category', 'Rap', []) !!}
                            {!! Form::select('rap_id', $rap, isset($sanpham) ? $sanpham->rap_id : '', [
                                'class' => 'form-control',
                            ]) !!}
                            @if($errors->has('category_id'))
                            <span class="errors-message">{{$errors->first('category_id')}}</span>
                          @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('Active', 'Kiểu', []) !!}
                            {!! Form::select(
                                'type',
                                ['bap' => 'Bắp', 'nuoc' => 'Nước','combo' => 'Combo'],
                                isset($san_pham) ? $san_pham->type : '',
                                ['class' => 'form-control'],
                            ) !!}
                            @if ($errors->has('status'))
                                <span class="errors-message">{{ $errors->first('status') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('Active', 'Hiển thị', []) !!}
                            {!! Form::select(
                                'status',
                                ['1' => 'Hiển thị', '0' => 'Không hiển thị'],
                                isset($san_pham) ? $san_pham->status : '',
                                ['class' => 'form-control'],
                            ) !!}
                            @if ($errors->has('status'))
                                <span class="errors-message">{{ $errors->first('status') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('Image', 'Ảnh Logo', []) !!}
                            {!! Form::file('image', ['class' => 'form-control-file']) !!}
                            @if (isset($san_pham))
                                <img width="20%" src="{{ asset('uploads/bap_nuoc/' . $san_pham->image) }}"alt="">
                            @endif
                        </div>
                        @if (!isset($san_pham))
                            {!! Form::submit('Thêm dữ liêu', ['class' => 'btn btn-success mt-2']) !!}
                        @else
                            {!! Form::submit('Cập Nhập', ['class' => 'btn btn-success mt-2']) !!}
                        @endif

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
