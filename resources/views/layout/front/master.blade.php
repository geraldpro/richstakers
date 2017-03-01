<!DOCTYPE html>
<html>
    @include('layout.front.head')
	<body>
		@include('layout.front.nav')
        
        @yield('body')
        
        @include('layout.front.footer')
	</body>    
</html>
