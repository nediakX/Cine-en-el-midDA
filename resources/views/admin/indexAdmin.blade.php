<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio Admin</title>
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jura:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/styleAdmin.css">
</head>

<body style="background: #C4DFE6">
  <div id="navbar">
    @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
      @auth
      <form method="POST" action="/logout">
        @csrf
        <button type="submit">Cerrar Sesion</button>
      </form>
      @else
      <a href="{{ route('login') }}">INICIAR SESION</a>
      @endauth
    </div>
    @endif <a href="CarteleraCine.html">CARTELERA</a>
    <a href="indexAdmin.html">INICIO</a>
    <img src="/images/cine en el midda.png" alt="CineMiddaLogo" style="width: 500px;">
    <br>
    <br>
    <div class="textUnder">
      MODO ADMINISTRADOR
    </div>
  </div>
  <section class="MovieSelect">
    Peliculas agregadas
    <table>
      <tr>
        <th>#ID</th>
        <th>Nombre de la funcion</th>
        <th>Asientos</th>
        <th>Fecha</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
      <tr>
        <td>01</td>
        <td>The Whale</td>
        <td>0/16</td>
        <td>04/04/2023</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>02</td>
        <td>John Wick</td>
        <td>0/16</td>
        <td>05/04/2023</td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </section>
  <br>
  <section class="IngresarPelicula">
    <a href="FichaPelicula.html"><input type="button" value="Ingresar nueva pelicula"></a>
  </section>

</body>

</html>