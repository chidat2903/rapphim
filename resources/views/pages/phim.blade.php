@extends('index')

@section('content')
<div class="contaniner" style="background:rgba(109, 109, 109, 0.689)">
    <div class="form rounded pt-4 background-image-2">
        <div class="row fw-bold fs-4 mx-5" style="margin-top: 97px">
            <div class="col m-3 position-relative py-3" >
                <h1>Phim chiếu rạp cực hay trên COSMIC</h1>
                <p class="fw-lighter">Danh sách Phim Chiếu Rạp 2023 được đánh giá cao và cập nhật liên tục trên MoMo Cinema</p>
                <ul class="list-unstyled py-3">
                    <li class="list-item fs-5"><i class="fa-solid fa-check me-3"></i>
                        <span class="fw-lighter">Đa dạng thể loại</span>
                        <span class="fst-italic">phim chiếu rạp</span> 
                    </li>
                    <li class="list-item fs-5"><i class="fa-solid fa-check me-3"></i>
                        <span class="fst-italic">Lịch chiếu phim</span> 
                        <span class="fw-lighter">cập nhật đầy đủ nhất</span>
                    </li>
                    <li class="list-item fs-5"><i class="fa-solid fa-check me-3"></i>
                        <span class="fw-lighter">Đánh giá phim rạp</span>
                        <span class="fst-italic">chi tiết chân thật </span> 
                    </li>
                    <li class="list-item fs-5"><i class="fa-solid fa-check me-3"></i>
                        <span class="fst-italic">Đặt vé</span>
                        <span class="fw-lighter">xem phim Online</span>
                        <span class="fst-italic">dễ dàng</span>
                    </li>
                    
                </ul>
                {{-- <button type="button" class="btn btn-danger btn-lg ">ĐẶT VÉ NGAY</button> --}}
            </div>
            <div class="col m-3">
                <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                    <div class="carousel-inner rounded-4 custom-shadow">
                      <div class="carousel-item active">
                        <img src="public/image/anhbia1.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="public/image/anhbia3.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="public/image/anhbia3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div> 
                  </div>
            </div>
        </div>
    </div>  
</div>

@foreach ($category_home as $key => $cate_home)
    <div class="container">
        <div class="container contents">
            <div class="content-title">
                <div class="content-title-big d-flex mx-auto">
                    <button type="button" class="btn btn-danger btn-lg text-uppercase">{{ $cate_home->title }}</button>
                </div>
            </div>

            <div class="row slider">
                @foreach ($cate_home->movie->take(10) as $key => $mov)
                    <a href="" style="text-decoration: none">
                        <div class="slider-card">
                            <div class="card cards" style="position: relative">
                                <img src="{{ asset('uploads/movie/' . $mov->image) }}" alt="" style="width: 250px; height:330px; border-radius: 5px; position: relative">
                                <div class="icon-overlay">
                                    <i class="fa-solid fa-circle-play"></i>
                                </div>
                            </div>

                            <div class="card-text text-light position-relative">
                                {{ $mov->title }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach

    <div class="container contents">
        <div class="content-title">
            <div class="content-title-big d-flex mx-auto">
                <button type="button" class="btn btn-danger btn-lg">Tìm phim chiếu rạp trên Cosmic</button>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Thể loại</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-md-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Quốc gia</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-md-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Năm</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-md-4">
                <div class="d-flex input-group">
                    <input type="text" name="search" class="form-control me-2" id="timkiem"
                        placeholder="Tìm theo tên phim" autocomplete="off">
                    <button class="btn btn-outline-danger"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <ul class="list-group" id="result"
                    style="display: none; position: absolute; top: 100%; left: 60.5%; border: 1px solid black; width: 300px; z-index: 999; ">
                </ul>
            </div>
        </div>
        @foreach ($category_home as $key => $cate_home)
            <div class="container contents">
                <div class="row slider">
                    @foreach ($cate_home->movie->take(10) as $key => $mov)
                        <a href="" style="text-decoration: none">
                            <div class="slider-card">
                                <div class="card cards" style="position: relative">
                                    <img src="{{ asset('uploads/movie/' . $mov->image) }}" alt="" style="width: 250px; height:330px; border-radius: 5px; position: relative">
                                    <div class="icon-overlay">
                                        <i class="fa-solid fa-circle-play"></i>
                                    </div>
                                </div>
    
                                <div class="card-text text-light position-relative">
                                    {{ $mov->title }}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
@endsection