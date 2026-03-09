@extends('auth.main')

@section('title', 'Password reset')

@section('content')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-auth mb-3">
                {{ __('Send Password Reset Link') }}
            </button>

            <span>
                Back to
                <a href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </span>
        </div>
    </form>


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
@endsection
