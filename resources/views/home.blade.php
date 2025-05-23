@extends('layouts.main_layout')
@section('content')
    <div>
        {{-- NavBar --}}
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SimpleMarket</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Favoritos</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <img src="{{ asset('images/imagem-home-2.jpg') }}" class="img-fluid rounded-bottom-4" alt="imagem-topbar">
        </div>

        <main class="flex-row m-2">
            <div class="position-relative">
                <!-- Botões de navegação -->
                <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y z-3" id="scrollLeft">
                    &lt;
                </button>
                <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y z-3" id="scrollRight">
                    &gt;
                </button>

                <span class="m-1 fs-2">Bebidas</span>
                <div class="d-flex justify-content-center bg-light border rounded-2 mb-3 overflow-auto"
                    style="max-height: 350px overflow-y: hidden; scrollbar-width: none;" id="produtoScroll">
                    @foreach ($products as $product)
                        @include('product_on_section')
                    @endforeach
                </div>
            </div>
            <div class="position-relative">
                <!-- Botões de navegação -->
                <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y z-3" id="scrollLeft">
                    &lt;
                </button>
                <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y z-3" id="scrollRight">
                    &gt;
                </button>

                <span class="m-1 fs-2">Alimentos</span>
                <div class="d-flex justify-content-center bg-light border rounded-2 mb-3 overflow-auto"
                    style="max-height: 350px overflow-y: hidden; scrollbar-width: none;" id="produtoScroll">
                    <div class="d-flex flex-column align-items-start p-2 item m-3">
                        <img src="https://brf.file.force.com/servlet/servlet.ImageServer?id=015U600000027Gj&oid=00D410000012TJa&lastMod=1703778094000"
                            class="img-fluid rounded mt-1 product-img" style="max-width: 200px;" alt="maca-img">
                        <div class="mt-3" style="max-width: 200px">
                            <span class="fw-bold" style="color:green">R$ 10,50</span>
                            <p class="text-truncate">Cola-Cola 2L Sabor Tradicional</p>
                        </div>
                    </div>
                </div>
            </div>



        </main>
    </div>
@endsection
