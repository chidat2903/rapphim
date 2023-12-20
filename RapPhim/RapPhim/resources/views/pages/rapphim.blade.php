@extends('index')

@section('content')
<div class="contaniner" style="background:rgba(109, 109, 109, 0.689)">
    <div class="form rounded pt-4 background-image-1">
        <div class="row fw-bold fs-4 mx-5" style="margin-top: 97px">
            <div class="col m-3 position-relative py-3" >
                <h1>Đặt mua vé trên COSMIC</h1>
                <ul class="list-unstyled py-3">
                    <li class="list-item fs-5"><i class="fa-solid fa-check me-3"></i>
                        <span class="fw-lighter">Mua vé online, </span>
                        <span class="fst-italic">trải nghiệm phim hay</span> 
                    </li>
                    <li class="list-item fs-5"><i class="fa-solid fa-check me-3"></i>
                        <span class="fst-italic">Đặt vé an toàn</span> 
                        <span class="fw-lighter">trên Cosmic</span>
                    </li>
                    <li class="list-item fs-5"><i class="fa-solid fa-check me-3"></i>
                        <span class="fw-lighter">Thoải mái</span>
                        <span class="fst-italic">chọn chỗ ngồi, mua bắp nước </span> 
                        <span class="fw-lighter">tiện lợi</span>
                    </li>
                    <li class="list-item fs-5"><i class="fa-solid fa-check me-3"></i>
                        <span class="fst-italic">Lịch sử đặt vé</span>
                        <span class="fw-lighter">được lưu lại ngay</span>
                    </li>
                    
                </ul>
                <button type="button" class="btn btn-danger btn-lg ">ĐẶT VÉ NGAY</button>
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

<div class="container contents">
  <div class="content-title">
      <div class="content-title-big d-flex mx-auto">
          <button type="button" class="btn btn-danger btn-lg">TÌM RẠP CHIẾU PHIM TRÊN COSMIC</button>
      </div>
  </div>
  <form class="row g-3 bg-light text-dark p-3 mt-3" action="">
      <div class="row">
          <div class="col-auto">
              <p>Vị trí</p>
          </div>
          <div class="col-auto">
              <select class="form-select border border-danger text-danger" aria-label="Default select example">
                  <option value="1">Đà Nẵng</option>
                  <option value="2">Hà Nội</option>
                  <option value="3">Tp. HCM</option>
              </select>
          </div>
          <div class="col-auto">
              <button class="btn btn-outline-danger">
                  <i class="fas fa-map-marker-alt"></i> Xác định vị trí
              </button>
          </div>
      </div>
      <div class="row">
          <div class="card border-0 bg-transparent text-dark py-0" style="width: 70px; height: 100px">
              <img src="public/image/logo/vnpay.jpg" class="card-img-top img-fluid" style="width: 50px; height:50px;" alt="...">
              <div class="card-body">
                <p class="card-text text-truncate text-dark">dassdfsdfsd</p>
              </div>
          </div>
          <div class="card border-0 bg-transparent text-dark py-0" style="width: 70px; height: 100px">
              <img src="public/image/logo/vnpay.jpg" class="card-img-top img-fluid" style="width: 50px; height:50px;" alt="...">
              <div class="card-body">
                <p class="card-text text-truncate text-dark">j bvzjbcvkzxjcbz</p>
              </div>
          </div>
      </div>
      <div class="row border-bottom border-dark">
          <div class="col-4 border-end border-dark">
              <div class="row ">
                  <div class="d-flex input-group">
                      <input type="text" name="search" class="form-control me-2" id="timkiem" placeholder="Tìm tên theo rạp" autocomplete="off" >
                      <button class="btn btn-outline-danger">Search</button>
                  </div>
              </div>
          </div>
          <div class="col-8">
              <div class="row">
                  <div class="card border-0 bg-transparent">
                      <div class="row ">
                        <div class="col-md-4 my-auto">
                          <img src="public/image/logo/vnpay.jpg" class="img-fluid rounded border border-secondary" style="width:40px; height:40px" alt="...">
                        </div>
                        <div class="col-md-8 my-auto">
                          <div class="card-body my-auto">
                              <div class="row" style=" height: 30px;">
                                  <h5 class="card-title text-start text-xs">Card title</h5>
                                  <p class="card-text text-dark text-xs fw-light">This is a wider card with supportin This content is a little bit longer.</p>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
          </div>
      </div>
      <div class="row ">
          <div class="col-4 border-end border-dark">
              <select class="form-select border-0" multiple aria-label="multiple select example">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
          </div>
          <div class="col-8">
              jhgui
          </div>
      </div>
  </form>
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



    
    
@endsection
