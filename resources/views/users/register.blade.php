
@extends('users.useradmin.main')
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
          <form id="login-form" name="login-form" class="form-horizontal" role="form"
                action="{{ url('/register') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                     @if (session('msg'))
                           <div class="alert alert-success">
                                {{ session('msg') }}
                          </div>
                           @endif
                    <div class="text-center">
                        <a href="{{ url('/') }}"> <img src="img/login-logo.png" alt=""/></a>
                        <h3>REGISTER</h3>
                    </div>

                    <div class="form-group{{ $errors->has('first_name') ? ' has-error': '' }}">
                        <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name') }}" placeholder="Firstname">
                        @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group{{ $errors->has('last_name') ? ' has-error': '' }}">
                      <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}" placeholder="Lastname">
                        @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                           @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error': '' }}">
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="form-control" placeholder="Email">
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error': '' }}">
                        <input type="password" id="password" name="password" class="form-control " placeholder="Password">
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <button class="btn btn-small btn-dark-solid full-width btn-circle" id="login-form-submit" name="login-form-submit" value="login">Join Now</button>
                    </div>

                </form>

            </div>


        </div>

    </div>
    @stop
