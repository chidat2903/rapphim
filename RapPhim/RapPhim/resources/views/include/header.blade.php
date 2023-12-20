<header id="site-header">
    <nav class="navbar navbar-expand-lg" style="background-color:rgba(0, 0, 0, 0.048);">
        <div class="container-fluid">
            @role('uservip')
                <a href="{{ route('pages.trangchu1') }}"><img class="navbar-brand"
                        src="{{ asset('public/image/logo/anhvip.png') }}" alt=""
                        style="height: 80px; width: 220px;"></a>
            @else
                <a href="{{ route('pages.trangchu1') }}"><img class="navbar-brand"
                        src="{{ asset('public/image/logo/logo.png') }}" alt=""
                        style="height: 80px; width: 220px;"></a>
            @endrole
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-ul navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item dropdown" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
                        <a class="nav-link text-white" href="{{ route('pages.phim') }}" id="navbarDropdown" role="button">Phim</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-color:rgba(0, 0, 0, 0.50);">
                            {{-- @foreach ($category as $key => $cate)
                                <li class="nav-item">
                                    <a title="{{ $cate->title }}" class="nav-link"
                                        href="{{ route('category', $cate->slug) }}"
                                        style="color: white;">{{ $cate->title }}</a>
                                </li>
                            @endforeach --}}
                        </ul>
                    </li>
                    <li class="nav-item" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
                        <a class="nav-link text-white" href="{{ route('pages.rapphim') }}" id="navbarDropdown" role="button">Rạp phim</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-color:rgba(0, 0, 0, 0.50);">
                            {{-- @foreach ($genre as $key => $gen)
                                <li class="nav-item">
                                    <a title="{{ $gen->title }}" class="nav-link "
                                        href="{{ route('genre', $gen->slug) }}"
                                        style="color: white;">{{ $gen->title }}</a>
                                </li>
                            @endforeach --}}
                        </ul>
                    </li>
                    <li class="nav-item" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
                        <a class="nav-link text-white" href="#" id="navbarDropdown" role="button">Khuyến mãi</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-color:rgba(0, 0, 0, 0.50);">
                            {{-- @foreach ($country as $key => $coun)
                                <li class="nav-item">
                                    <a title="{{ $coun->title }}" class="nav-link "
                                        href="{{ route('country', $coun->slug) }}"
                                        style="color: white;">{{ $coun->title }}</a>
                                </li>
                            @endforeach --}}
                        </ul>
                    </li>
                    <li class="nav-item" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
                        <a class="nav-link text-white" href="#" id="navbarDropdown" role="button">Thành viên</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="background-color:rgba(0, 0, 0, 0.50);">
                            {{-- @foreach ($country as $key => $coun)
                                <li class="nav-item">
                                    <a title="{{ $coun->title }}" class="nav-link "
                                        href="{{ route('country', $coun->slug) }}"
                                        style="color: white;">{{ $coun->title }}</a>
                                </li>
                            @endforeach --}}
                        </ul>
                    </li>

                    


                </ul>
                <form class="d-flex" action="" method="GET">
                    <div class="d-flex input-group">
                        <input type="text" name="search" class="form-control me-2" id="timkiem"
                            placeholder="Tìm kiếm" autocomplete="off">
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <ul class="list-group" id="result"
                        style="display: none; position: absolute; top: 100%; left: 60.5%; border: 1px solid black; width: 300px; z-index: 999; ">
                    </ul>
                </form>

                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mt-3">
                        <a class="nav-link active text-white" aria-current="page" href="#"><i
                                class="fa-regular fa-clock text-danger"></i> Xem
                            lịch
                            sử</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><img class="navbar-brand"
                                src="{{ asset('public/image/image-13.png') }}" alt=""></a>
                        <ul class="dropdown-menu">
                            @auth
                                <li>Xin chào, {{ Auth::user()->username }}</li>
                            @endauth
                            <li><a class="dropdown-item" href="#">Thông tin</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Đăng xuất</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mt-3 btn-vip">
                        <a class="btn btn-outline-danger" href=""><i
                                class="fa-solid fa-star text-danger"></i>VIP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

{{-- <ul class="list-group" id="result" style="display: none; position: absolute; top: 10%; left: 61%; background-color: white; border: 1px solid #ccc; width: 300px; z-index: 999; "></ul> --}}
