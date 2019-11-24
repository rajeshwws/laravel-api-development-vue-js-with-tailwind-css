@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-1/4 bg-blue-900 rounded-lg shadow-xl p-6">

        <img src="/img/rj.png" style="width: 50px">
        <h1 class="text-white text-3xl pt-8">Welcome Back</h1>
        <h2 class="text-blue-300">Enter your credentials below</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="relative pt-8">
                <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">E-Mail</label>

                <input id="email" type="email" class="pt-8 pb-3 w-full rounded pl-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="your@email.com">

                @error('email')
                <span class="text-red-600 text-sm " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>

            <div class="relative pt-3">
                <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="pt-8 pb-3 w-full rounded pl-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="password"  autocomplete="current-password" placeholder="Password">

                    @error('password')
                    <span class="text-red-600 text-sm " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="pt-2">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="text-white pt-2" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="pt-8">
                <button type="submit" class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                    Login
                </button>
            </div>
            <div class="flex justify-between pt-8 text-white text-sm font-bold">
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                <a class="" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
