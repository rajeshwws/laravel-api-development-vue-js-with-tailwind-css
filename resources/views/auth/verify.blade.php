@extends('layouts.app')

@section('content')
    <div class="mx-auto h-full flex justify-center items-center bg-gray-300">
        <div class="w-1/4 bg-blue-900 rounded-lg shadow-xl p-6">
        <div class="col-md-8">
                <h1 class="text-white text-3xl pt-8">Verify Your Email Address</h1>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">{{ __('click here to request another') }}</button>.
                    </form>

        </div>
    </div>
</div>
@endsection
