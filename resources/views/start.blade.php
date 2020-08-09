<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/begin.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav> 

<div class="logo">
    <a href="index.php">Trailers++</a>
</div>
</nav>
<section class="hero">
    <div class="hero-text">
        <h2><span class="clr-blue">Entérate <br></span>de las mejores peliculas que han de venir</h2>
        <a class="btn btn-log --left" href="{{ url('register') }}">Registrate Aqui!</a> 
                <a class="btn btn-log --right" href="{{ url('login') }}">Ingresa Aquí!</a>
   

</div>

    <svg class="wave" viewBox="0 0 796 168" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M269 90.4843C93.8 65.153 -64 101.039 -121 122.148V190H1072V19.617C1068.33 19.617 1044 16.2999 976 3.0311C908 -10.2377 799.667 44.7473 754 73.8983C721.333 92.4947 642.2 131.497 587 138.734C518 147.781 488 122.148 269 90.4843Z" fill="#C4C4C4" stroke="white"/>
    </svg>

</section>

<!--section class="main --trailers">
    <div class="container">

        <div class="top-text">
            <h2>Trailers más actualizados</h2>
        </div>

        <div class="content-trailers">
            <h1>CONTENIDO</h1>
        </div>
    </div>
</section>
<section class="main --join">
    <div class="container">
        
        <div class="top-text">
            <h2>Únete a nuestra comunidad</h2>
        </div>

        <h3>Ayúdanos a mantener nuestra comunidad actualizada
            con el mejor contenido para los usuarios.
        </h3>
             <a class="btn btn-log" href="{{ url('login') }}">¡Ingresa con tu cuenta!</a>


    </div>
     <footer class="footer">
    <h3>Powered By:</h3>
        <p>Ismael De los Santos / 2018-7213</p>
        <p>Tirso Santiago Carbuccia / 2018-7053</p>
    </footer>
</section-->
   
    
@extends ('footer')
</body>
</html>