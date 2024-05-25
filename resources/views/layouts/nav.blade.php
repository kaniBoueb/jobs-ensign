<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JOBS | Insign Africa') }}</title>
    @notifyCss
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <!-- Styles -->   
    {{-- @notifyCss --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        .nav-btn{
            border: 1px solid #18224F !important;
            color: #18224F !important;
            border-radius: 18px !important; 
            padding: 5px 15px !important;
            transition: .3s !important;
        }

        .nav-btn:hover{
            box-shadow: 8px 6px #18224F;
            transition: .3s;
        }

        .logo-nav{
            width: 130px;
        }

        .front-nav .nav-item a{
            font-size: 16px
        }

        .banner {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            width: 100%;
            height: 28vh !important;
            background: #18224F;
            background: linear-gradient(to right,#223EA5,#18224F);
            padding: 50px;
            border-radius: 18px;
            color: #fff;
        }
        
    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset("js/perso.js") }}"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
    <div id="app">
        <nav class="flex items-center justify-between flex-wrap bg-white mb-5">
            <div class="container flex items-center justify-between">
                <div class="flex items-center flex-shrink-0 text-white">
                    <div class="logo-nav">
                        <img src="{{ asset("logo-insign.png") }}" alt="logo Insign" srcset="">
                    </div>
                </div>
                <div class="text-md flex justify-between gap-5">
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 no-underline hover:text-cyan-500 mr-4" href="{{ route('login') }}">Nos métiers</a>   
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 no-underline hover:text-cyan-500" href="{{ route('login') }}">Postuler à une offre</a>
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-blue-950 no-underline hover:text-cyan-500" href="{{ route('login') }}">{{ __('Déposer une candidature spontannée') }}</a>
                </div>
                <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
            </div>
        </nav>
        <main>
            @include('notify::components.notify')
            @yield('content')
        </main>
    </div>
    <script>
        var contrat = document.querySelector('.articles-contrat');
if (contrat != '') {
    contrat.addEventListener('change', function () {
        var valeurContrat = contrat.value;
        var dateE = document.querySelector('#date_em').value;
        var refOffre = document.querySelector('#reference_offre');
        var fonctionElement = document.querySelector('.articles-fonction');
        
        // Vérifier si l'élément .articles-fonction existe
        if (fonctionElement) {
            var fonction = fonctionElement.value;
            refOffre.value = valeurContrat + "-" + fonction.replace(/" "/g, "") + "-" + dateE;
        } else {
            console.error('Element .articles-fonction introuvable.');
        }
    });
}

    </script>
    @notifyJs
</body>
</html>
