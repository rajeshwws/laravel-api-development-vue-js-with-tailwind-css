@extends('layouts.app')

@section('content')
    <div class="mx-auto h-full flex justify-center items-center bg-gray-300">
        <div class="w-1/4 bg-blue-900 rounded-lg shadow-xl p-6">

            <h1 class="text-white text-3xl pt-8">Confirm Password</h1>
            <h2 class="text-blue-300">Please confirm your password before continuing</h2>

            <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                <div class="relative pt-8">
                    <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Password</label>
                                <input id="password" type="password" class="pt-8 pb-3 w-full rounded pl-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="text-red-600 text-sm " role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                        </div>

                <div class="pt-8">
                    <button type="submit"  class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                        {{ __('Confirm Password') }}
                    </button>
                </div>

                <div class="flex justify-between pt-8 text-white text-sm font-bold">

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </div>

            </form>

    </div>
</div>
@endsection
