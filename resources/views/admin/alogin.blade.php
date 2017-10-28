@extends('admin.layouts.master')

@section('body')
<!--  preloader start -->
<div id="tb-preloader">
    <div class="tb-preloader-wave"></div>
</div>
<!-- preloader end -->

    <div class="login login-bg login-parallax">

        <div class="container">
            <div class="login-logo text-center">

            </div>
            <div class="login-box btn-rounded">
                <form id="login-form" name="login-form" class="form-horizontal" action="{{ url('login/user') }}" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           @if (session('info'))
                           <div class="alert alert-success">
                                {{ session('info') }}
                          </div>
                           @endif


                           @if (session('status'))
                           <div class="alert alert-success">
                                {{ session('status') }}
                          </div>
                           @endif

                    <div class="text-center">

                     <a href="/"> <img src="img/login-logo.png" alt=""/></a>

                    <h3>ADMIN LOGIN</h3></div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email ID">
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" id="password" name="password" value="{{ old('password') }}" class="form-control " placeholder="Password">
                        @if ($errors->has('password'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('password') }}</strong>
                                     </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button class="btn btn-small btn-dark-solid full-width btn-rounded" id="login-form-submit">Login</button>
                    </div>

                </form>
            </div>

        </div>

    </div>

@stop
