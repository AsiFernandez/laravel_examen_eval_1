<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Relations
            </div>

            <div class="links">
                <a href="">Menu</a>
                <a href="git">git</a>
                <a href="">Crear Tienda</a>
            </div>
            <hr><br><br>
            <div class="op">
               {{$nombre}}<br>
               {{$descripcion}}<br>
               {{$password}}<br>
               {{$email}}<br>
               {{$likes}}<br>
            </div>
        </div>
    </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
