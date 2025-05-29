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
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">
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

        @include('auth.login_modal')

        <div>
            <img src="{{ asset('images/home/simple-home.png') }}" class="img-fluid mb-5 rounded-bottom-3"
                alt="imagem-topbar">
        </div>

        <main class="flex-row m-4">
            <div class = "d-flex justify-content-between mb-5">
                <img src="{{ asset('images/sections/sessao-bebidas.png') }}"
                    class="img-fluid rounded border mt-1 product-img" style="max-width: 400px;" alt="">
                <img src="{{ asset('images/sections/sessao-alimentos.png') }}"
                    class="img-fluid rounded border mt-1 product-img" style="max-width: 400px;" alt="">
                <img src="{{ asset('images/sections/sessao-hortifruti.png') }}"
                    class="img-fluid rounded border mt-1 product-img" style="max-width: 400px;" alt="">
            </div>

            <div class="d-flex-inline m-1 justify-content-start ">
                <span class="m-1 fs-3 p-3">Bebidas</span>
                <span class="m-1 fs-3 p-3">Alimentos</span>
                <span class="m-1 fs-3 p-3">Limpeza</span>
            </div>

            <div class="position-relative">
                <!-- Botões de navegação -->
                <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y z-3 border"
                    id="scrollLeft">
                    &lt;
                </button>
                <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y z-3 border" id="scrollRight">
                    &gt;
                </button>
                <div class="d-flex justify-content-start bg-light border rounded-2 mb-3 overflow-auto"
                    style="max-height: 350px overflow-y: hidden; scrollbar-width: none;" id="produtoScroll">
                    @foreach ($products as $product)
                        @include('product_on_section')
                    @endforeach
                </div>
            </div>

            <div class = "d-flex justify-content-around mb-4">
                <img src="https://img.freepik.com/fotos-premium/negocios-com-desconto-de-75_557469-9314.jpg?semt=ais_hybrid&w=740"
                    class="img-fluid rounded border mt-1 product-img" style="max-width: 200px;" alt="">
                <img src="https://img.freepik.com/fotos-premium/negocios-com-desconto-de-75_557469-9314.jpg?semt=ais_hybrid&w=740"
                    class="img-fluid rounded border mt-1 product-img" style="max-width: 200px;" alt="">
                <img src="https://img.freepik.com/fotos-premium/negocios-com-desconto-de-75_557469-9314.jpg?semt=ais_hybrid&w=740"
                    class="img-fluid rounded border mt-1 product-img" style="max-width: 200px;" alt="">
            </div>


        </main>
    </div>
@endsection
