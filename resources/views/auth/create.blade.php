<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/x-icon" href="/icons/favicon/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Jura:wght@500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/css/styleAdmin.css">
</head>

<body class="bg-animate">

    <div class="d-flex justify-content-center">
        <label class="mt-2" for="errors">
            @error('username')
            <p class="text-red-500 text-xs mt-1">-{{ $message }}</p>
            @enderror
            @error('rut')
            <p class="text-red-500 text-xs mt-1">-{{ $message }}</p>
            @enderror
            @error('email')
            <p class="text-red-500 text-xs mt-1">-{{ $message }}</p>
            @enderror
            @error('password')
            <p class="text-red-500 text-xs mt-1">-{{ $message }}</p>
            @enderror

        </label>
    </div>
    <div class="d-flex justify-content-center">
        <div id="formularioRegistro">
            <br>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <img src="/images/cine en el midda admin.png" alt="logoAdminMidda">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p> Usuario</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" for="username" id="username" name="username"
                            placeholder="Ingrese su nombre de usuario" autofocus required value="{{ old('username') }}">

                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <p>RUT</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" for="rut" id="rut" name="rut" placeholder="X.XXX.XXX-X"
                            value="{{ old('rut') }}" required>

                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <p>Correo Electronico</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="email" for="email" id="email" name="email"
                            placeholder="Ingrese su correo electronico" value="{{ old('email') }}" required>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <p>Contraseña</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="password" for="password" id="password" name="password"
                            placeholder="Ingrese su contraseña" required>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <p>Confirmar Contraseña</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="password" for="password" id="password" name="password"
                            placeholder="Ingrese su contraseña" required>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div>
                        <button type="submit" style="color: white;background: #0C6D7E;
                    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                    border-radius: 16px; width: 264px;
                    height: 63px;">Crear Usuario</button>
                    </div>
                    <a href="/login" class="mt-3">Cancelar</a>
            </form>
            <br>

        </div>
    </div>
    <div class="bubbles">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>
</body>

</html>