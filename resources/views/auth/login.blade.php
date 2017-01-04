@extends('layouts.app')

@section('content')
    @include('partials._nav')
    <div class="section">
        <div class="login-container">
            <div class="login-content">
                <div class="container">
                    <div class="row">
                        <div class="columns four offset-by-four">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1 class="text-center">LOGIN</h1>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                        {{ csrf_field() }}
                                        <div class="row except">
                                            <div class="columns twelve u-full-width">
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="email" class="u-full-width">E-Mail Address</label>
                                                    <input id="email" type="email" class="u-full-width" name="email"
                                                           value="{{ old('email') }}" required autofocus>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row except">
                                            <div class="columns twelve u-full-width">
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class="u-full-width">Password</label>

                                                    <input id="password" type="password" class="u-full-width" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row except">
                                            <div class="columns twelve">
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember"> Remember Me
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="row except">
                                           <div class="columns twelve">
                                               <div class="form-group">
                                                   <div class="col-md-8 col-md-offset-4">
                                                       <button type="submit" class="button-primary">
                                                           Login
                                                       </button>

                                                       <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                           Forgot Your Password?
                                                       </a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials._footer')

@endsection
