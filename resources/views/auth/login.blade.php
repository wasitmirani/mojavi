<x-guest-layout>
@if (session('status'))
<div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
</div>
@endif
<form method="POST" action="{{ route('login') }}">
    @csrf
<div class="auth-form">
    <div class="text-center mb-3">
        <a href="index.html"><img src="{{ asset('backend/images/logo1.png') }}" alt=""></a>
    </div>
    <h4 class="text-center mb-4">Sign in your account</h4>
    <form action="index.html">
        <div class="mb-3">
            <label class="mb-1"><strong>{{ __('Email') }}</strong></label>
            <input  type="email" name="email" :value="old('email')" required autofocus class="form-control" >
        </div>
        <div class="mb-3">
            <label class="mb-1"><strong>{{ __('Password') }}</strong></label>
            <input type="password" class="form-control" name="password" required autocomplete="current-password" >
        </div>

        <div class="row d-flex justify-content-between mt-4 mb-2">
            <div class="mb-3">
               <div class="form-check custom-checkbox ms-1">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                    <label class="form-check-label" for="basic_checkbox_1">{{ __('Remember me') }}</label>
                </div>
            </div>
            <div class="mb-3">
                <a href="href="{{ route('password.request') }}""> {{ __('Forgot your password?') }}</a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Login In</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
    </div>
</div>

</div>
</x-guest-layout>
