<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
                        <!-- j'ajoute ici le style de tailwindcss -->                      
                        <link rel="stylesheet" href="{{ asset('css/tailwindcss.css') }}" type="text/css">
                       <!-- j'ajoute ici le style de bootstrap -->                      
                        <link rel="stylesheet" href="{{ asset('/css/bootstrap_util.css') }}">
                        <!-- j'ajoute ici le style de scanner.js -->                      
                        <link rel="stylesheet" href="{{ asset('css/asperise_scanner.css') }}">


                <!-- Vite scripts -->        
                        <!-- CSRF Token -->
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        
                        <title>{{ config('app.name', 'Laravel') }}</title>
                        
                        <!-- Fonts -->
                        <link rel="dns-prefetch" href="//fonts.bunny.net">
                        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
                        
                        <!-- Scripts -->
                        @vite(['resources/sass/app.scss', 'resources/js/app.js'])


          <!-- j'ajoute ici le script de scanner.js -->
            <script src="https://cdn.asprise.com/scannerjs/scanner.js" type="text/javascript"></script>
            <script src="{{ asset('js/asperise_scanner.js')}}" type="text/javascript"></script>

                
                <!-- script de bootstrap 5 pour l'effet Hover Tooltip, ...etc -->
                <script src="{{ asset('js/bootstrap_util.js')}}" type="text/javascript"></script>


                <!-- from lordicon: les icones du folder et pdf -->
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
        
    </head>
    <body class="antialiased">

        
            <!--- la bare de navigation en haut  -->
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="javascript:void(0)">Systhen Logo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Scann</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Convert</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Parameters</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="text" placeholder="Search">
                            <button class="btn btn-primary" type="button">Search</button>
                        </form>
                    </div>
                </div>
            </nav>

        <div class="row" >

                <div class="col-sm-2 container-fluid shadow p-4 mb-4 bg-white"  style="     padding: 0.2rem !important; width: 20%;  margin-left: 0.8rem; margin-right: 0.5rem; ">
                                
                                <!-- à gauche j'affiche le menu déroulant static
                                        __________________________________
                                        |                                  |
                                        ||=====||                          |
                                        ||     ||                          |
                                        || HERE||                          |
                                        ||     ||                          |
                                        ||=====||                          |
                                        |__________________________________|                            
                                        
                                    -->
                        <section >                    
                            <div class="scan">
                                    @yield('scan')
                            </div>                       
                        </section>
                </div>


                <div class="col-sm-9" >                    
                            
                            <div class="row" >                          
                                        <!-- au milieu de la page et a droite j'affiche les images PDF scannés 
                                                    __________________________________
                                                    |                                  |
                                                    |       ||=============||=======|  |
                                                    |       ||             ||       |  |
                                                    |       ||    HERE     ||       |  |
                                                    |       ||             ||       |  |
                                                    |       ||=============||=======|  |
                                                    |__________________________________|                                                  
                                        -->
                                            <div class="col-7 bg-white p-4" style=" padding: 0.2rem !important; width: 50%;">
                                                    <!-- Ici j'affiche les images scannés en grand format -->
                                                <div class="pdf-show">
                                                    @yield('pdf-show')
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-sm-2 p-3 bg-white" style=" padding: 0.2rem !important; width: 10%;">
                                                <!-- Ici j'affiche les images en miniatures -->
                                                <div class="pdf-show">
                                                    @yield('thumbnails')
                                                </div>
                                            </div>

                                <div class="col-5 bg-white p-1" style=" padding: 0.2rem !important; width: 40%;">
                                                <!-- dans la partie la plus a droite
                                                __________________________________
                                                |                                  |
                                                |        |=============||=======|| |
                                                |        |             ||       || |
                                                |        |             ||  HERE || |
                                                |        |             ||       || |
                                                |        |=============||=======|| |
                                                |__________________________________|     
                                                --> 
                                        <div class="d-grid">
                                            
                                            <div class="container">
                                                @yield('content')
                                            </div>
                                        </div>                     
                                </div>
                            </div>
                </div>  
        </div> 


        

    </body>
</html>
