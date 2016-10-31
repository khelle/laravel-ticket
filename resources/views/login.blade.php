@extends('layouts.app')

@section('content')
    <section id="section-login" class="section-login">
        <div class="container">
            <div class="card card-container">
                <img class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p class="profile-name-card"></p>
                <form class="form-login" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" id="loginEmail" class="form-control" placeholder="Email address" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" id="loginPassword" class="form-control" placeholder="Password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
