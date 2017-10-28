<!DOCTYPE html>
<html>
		@include('users.userdashboard.dashcss')
        @include('users.userdashboard.head')

	<body>
        @include('users.userdashboard.dashnavbar')

			  @yield('body')

				@include('users.userdashboard.dashfooter')
        @include('users.userdashboard.footer')

	</body>
</html>
