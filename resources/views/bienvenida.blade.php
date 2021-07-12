<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{config('app.name', 'Ucabflix')}}</title>
    <script src="{{ asset('../js/bootstrap.js') }}" defer></script>
    <link href="{{ asset('../css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../css/styles.css')}}">
</head>
<body class="box-bienvenida">
    <div class="box-header d-flex justify-content-end align-items-center">
        <li class="nav-item" style="list-style: none">
            <button type="button" class="btn m-1 color-button-ucabflix">
                <a class="nav-link" style="color: white" href="{{ route('principal') }}">{{ __('Ingresar como invitado') }}</a>
            </button>
        </li>
        <li class="nav-item" style="list-style: none">
            <button type="button" class="btn m-1 color-button-ucabflix">
                <a class="nav-link" style="color: white" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
            </button>
        </li>
    </div>
    <div class=" box-up col-md-12 mt-5 d-flex justify-content-center align-items-center flex-column">
        <h1 class="list-title" style="color: rgb(229,9,20); height:200px">Ucabflix</h1>
        <p style="color: white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe molestiae doloribus, 
        deserunt, cupiditate quis ipsam at minus aliquam error voluptatum nam omnis 
        rem fugit vero qui nostrum. Accusantium, eligendi sit.</p>

        <button type="button" class="btn color-button-ucabflix" style="color: white">
            <a class="nav-link" style="color: white" href="{{ route('register') }}">{{ __('Comenzar') }}</a>
        </button>
    </div>
    
</body>
</html>