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
                <form action="{{route('mostrarInfo')" method="get">
                Nombre:
                    <input type="text" name="nombre">
                Descripcion:
                    <input type="textarea" name="description">
                Contraseña:
                    <input type="password" name="password">
                Email:
                    <input type="email" name="email"> 
                Likes:
                    <input type="number" name="likes">
                <input type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
