<x-guest-layout>
    <div class="auth-form">
        <div class="text-center mb-3">
            <a href="{{ url('/') }}"><img src="{{ asset('backend/images/logo1.png') }}" alt=""></a>
        </div>
        <h4 class="text-center mb-4">Sign up your account</h4>
        <form  method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label class="mb-1"><strong>{{ __('Name') }}</strong></label>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" class="form-control" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div class="mb-3">
                <label class="mb-1"><strong>{{ __('Email') }}</strong></label>
 
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  class="form-control" placeholder="hello@example.com" required />
            </div>
            <div class="mb-3">
                <label class="mb-1"><strong>{{ __('Password') }}</strong></label>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"  class="form-control" required autocomplete="new-password" />
            </div>
             <div class="mb-3">
                <label class="mb-1"><strong>{{ __('Confirm Password') }}</strong></label>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password" />
            </div>
            <div class="mb-3">
                <label class="mb-1"><strong>{{ __('Register As') }}</strong></label>
                 <select class="form-control" name="role">
                     <option value="">Select Role</option>
                     <option value="1">Teacher</option>
                     <option value="2">Student</option>
                 </select>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary btn-block">  {{ __('Register') }}</button>
            </div>
        </form>
        <div class="new-account mt-3">
            <p>Already have an account? <a class="text-primary" href="page-login.html">Sign in</a></p>
        </div>
    </div>
</x-guest-layout>
