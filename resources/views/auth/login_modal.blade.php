<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="minhaModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column">
                    <form action="/loginSubmit" method="post" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="text_username" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="text_username"
                                value="{{ old('text_username') }}" required>
                            @error('text_username')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="text_password" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="text_password"
                                value="{{ old('text_password') }}" required>
                            @error('text_password')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success w-100">LOGIN</button>
                        </div>
                    </form>

                    <div class="d-flex flex-column">
                        <p><a class="link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('register') }}">Esqueci minha senha</a></p>
                        <p><a class="link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('register') }}">Registre-se</a></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
