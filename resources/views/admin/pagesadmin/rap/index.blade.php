@extends('admin.index')

@section('admin.content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Quản lý rap</div>
                    <div class="card-body container">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (!isset($rap))
                            {!! Form::open(['route' => 'rap.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        @else
                            {!! Form::open(['route' => ['rap.update', $rap->id], 'method' => 'PUT','enctype' => 'multipart/form-data']) !!}
                        @endif
                        <div class="form-group">
                            {!! Form::label('title', 'Tên Rap', []) !!}
                            {!! Form::text('ten_rap', isset($rap) ? $rap->ten_rap : '', [
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
                            {!! Form::text('slug', isset($rap) ? $rap->slug : '', [
                                'class' => 'form-control',
                                'placeholder' => 'Nhập vào dữ liệu...',
                                'id' => 'convert_slug',
                            ]) !!}
                            @if ($errors->has('slug'))
                                <span class="errors-message">{{ $errors->first('slug') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Giới Thiệu', []) !!}
                            {!! Form::textarea('gioi_thieu', isset($rap) ? $rap->gioi_thieu : '', [
                                'class' => 'form-control',
                                'placeholder' => 'Nhập vào dữ liệu...',
                                'id' => 'description',
                            ]) !!}
                            @if($errors->has('description'))
                            <span class="errors-message">{{$errors->first('description')}}</span>
                          @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('title', 'Địa chỉ', []) !!}
                            {!! Form::text('dia_chi', isset($rap) ? $rap->dia_chi : '', [
                                'class' => 'form-control',
                                'placeholder' => 'Nhập vào dữ liệu...',
                            ]) !!}
                            @if ($errors->has('title'))
                                <span class="errors-message">{{ $errors->first('title') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('Active', 'Hiển thị', []) !!}
                            {!! Form::select(
                                'status',
                                ['1' => 'Hiển thị', '0' => 'Không hiển thị'],
                                isset($rap) ? $rap->status : '',
                                ['class' => 'form-control'],
                            ) !!}
                            @if ($errors->has('status'))
                                <span class="errors-message">{{ $errors->first('status') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('Image', 'Ảnh Logo', []) !!}
                            {!! Form::file('image', ['class' => 'form-control-file']) !!}
                            @if (isset($rap))
                                <img width="20%" src="{{ asset('uploads/rap/' . $rap->image) }}"alt="">
                            @endif
                        </div>
                        @if (!isset($rap))
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
