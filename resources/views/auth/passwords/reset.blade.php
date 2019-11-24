@extends('layouts.app')

@section('content')
    <div class="mx-auto h-full flex justify-center items-center bg-gray-300">
        <div class="w-1/4 bg-blue-900 rounded-lg shadow-xl p-6">



            <h1 class="text-white text-3xl pt-8">Reset Password</h1>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="relative pt-8">
                            <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">E-Mail</label>

                                <input id="email" type="email" class="pt-8 pb-3 w-full rounded pl-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus placeholder="E-Mail">

                                @error('email')
                                    <span class="text-red-600 text-sm " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="relative pt-8">
                            <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Password</label>

                                <input id="password" type="password" class="pt-8 pb-3 w-full rounded pl-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="text-red-600 text-sm " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="relative pt-8">
                            <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="pt-8 pb-3 w-full rounded pl-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="password_confirmation" required autocomplete="new-password" placeholder="New-Password">
                            </div>
                        </div>

                        <div class="pt-8">

                                <button type="submit" class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                                    {{ __('Reset Password') }}
                                </button>

                        </div>
                    </form>

       </div>
</div>
@endsection
