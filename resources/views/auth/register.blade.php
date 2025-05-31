@extends('layouts.main_layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-8">
                <div class="card p-5">
                    <p class="fs-2">Cadastro</p>
                    <form action="/registerSubmit" method="post" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="text_name" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="text_name" value="{{ old('text_name') }}"
                                required>
                            @error('text_name')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="text_email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="text_email" value="{{ old('text_email') }}"
                                required>
                            @error('text_email')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="text_email" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="text_password"
                                value="{{ old('text_password') }}" required>
                            @error('text_password')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="text_password_confirm" class="form-label">Digite a senha novamente</label>
                            <input type="password" class="form-control" name="text_password_confirm"
                                value="{{ old('text_password_confirm') }}" required>
                            @error('text_password_confirm')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success w-100">Cadastrar-se</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
