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
        <form class="form-horizontal" role="form" action="{{ route('uprofile') }}" method="post">

                    <div class="text-center">
                        <a href="{{ url('/') }}"> <img src="img/login-logo.png" alt=""/></a>
                        <h3>Update Your Profile</h3>
                    </div>

                    <div class="form-group">
                        <input type="text" id="first_name" name="first_name" class="form-control" value="{{ Auth::user()->first_name }}" placeholder="Firstname" >

                    </div>

                    <div class="form-group">
                      <input type="text" id="last_name" name="last_name" class="form-control" value="{{ Auth::user()->last_name }}" placeholder="Lastname">

                    </div>

                    <div class="form-group">
  <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="Email"
                        class="form-control">
                    </div>


                    <div class="form-group">
                        <button class="btn btn-small btn-dark-solid full-width btn-rounded" id="login-form-submit" name="login-form-submit" value="profile">Update Profile</button>
                    </div>

                   <input type="hidden" value={{Session::token()}} name="_token" />

                </form>

            </div>


        </div>

    </div>

@stop
