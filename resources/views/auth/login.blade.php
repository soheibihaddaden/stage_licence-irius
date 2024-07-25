@extends('layouts.guest')

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-8">
            <div class="box form-box">
                <div class="card-header">
                    <span class="header-black">Uni</span><span class="header-blue">Rius</span>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field input">
                        <label for="email">{{ __('Adresse Email') }}</label>
                        <input type="email" name="email" id="email" autocomplete="off" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="password">{{ __('Mot de passe') }}</label>
                    <div class="field input-group">
                        <input type="password" name="password" id="password" autocomplete="off" class="form-control @error('password') is-invalid @enderror" required>
                        <i id="toggle-password" class="fa-solid fa-eye" style="cursor: pointer;"></i>
                        <i id="toggle-password-slash" class="fa-solid fa-eye-slash" style="cursor: pointer; display: none;"></i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="field form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Se souvenir de moi</label>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn btn-primary" value="{{ __('Connexion') }}">
                    </div>
            
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Mot de passe oublié ?') }}</a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>




<script>
document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.querySelector('#password');
    const iconEye = document.querySelector('#toggle-password');
    const iconEyeSlash = document.querySelector('#toggle-password-slash');

    iconEye.addEventListener('click', function () {
        // Change le type de l'input et les icônes visibles
        passwordInput.type = 'text';
        iconEye.style.display = 'none';
        iconEyeSlash.style.display = 'block';
    });

    iconEyeSlash.addEventListener('click', function () {
        // Change le type de l'input et les icônes visibles
        passwordInput.type = 'password';
        iconEyeSlash.style.display = 'none';
        iconEye.style.display = 'block';
    });
});
</script>


<style>
  


    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

    body {
        font-family: "Montserrat", sans-serif;
    }
    
    .card-header {
        font-size: 25px;
        font-weight: 700;
        text-align: center;
    }
    .header-black {
        color: #000;
    }
    .header-blue {
        color: #0073ff;
    }
    .form-box {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .field {
        margin-bottom: 15px;
    }

    .btn-primary {
        background-color: #0073ff;
        border-color: #0073ff;
    }
    .btn-primary:hover {
        background-color: #141d28;
        border-color: #141d28;
    }

    .input-group {
        position: relative;
    }

    .input-group input {
        padding-right: 30px; /* Espace pour l'icône */
        border-radius: 5px !important;
    }

    .input-group i {
        position: absolute;
        right: 10px;
        top: 10px;
        cursor: pointer;
    }

</style>
@endsection
