<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
              <!-- Styles -->
              <style>
                /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
            </style>
       
       

        <style>
                .accordion-collapse {
                     border: 0;
                }
                .accordion-button {
                    padding: 0px;
                    font-weight: bold;
                    border: 0;
                    font-size: 18px;
                    color: #333333;
                    text-align: left;
                    border-bottom: 1px solid #ddd; 
                }
                .accordion-button:focus {
                    box-shadow: none;
                    border: none;
                }
                .accordion-button:not(.collapsed) {
                    background: none;
                    color: #dc3545;
                }
                .accordion-body {
                    padding: 15px;
                    background-color: #f6f6f6;
                }
                .accordion-button::after {
                    width: auto;
                    height: auto;
                    content: "+";
                    font-size: 40px;
                    background-image: none;
                    font-weight: 100;
                    color: #1b6ce5;
                    transform: translateY(-4px);
                }
                .accordion-button:not(.collapsed)::after {
                    width: auto;
                    height: auto;
                    background-image: none;
                    content: "-";
                    font-size: 48px;
                    transform: translate(-5px, -4px);
                    transform: rotate(0deg);
                }
                @media (min-width: 768px)
                .offset-md-3 {
                    margin-left: 5%;
                }
        </style>

                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        
                        <!-- CSRF Token -->
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        
                        <title>{{ config('app.name', 'Laravel') }}</title>
                        
                        <!-- Fonts -->
                        <link rel="dns-prefetch" href="//fonts.bunny.net">
                        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
                        
                        <!-- Scripts -->
                        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
                        
                        <style type="text/css">
                            i{
                                font-size: 50px;
                            }
                        </style>



          <!-- j'ajoute ici le script de scanner.js -->
            <script src="https://cdn.asprise.com/scannerjs/scanner.js" type="text/javascript"></script>

                <script>
                    //
                    // Please read scanner.js developer's guide at: http://asprise.com/document-scan-upload-image-browser/ie-chrome-firefox-scanner-docs.html
                    //

                    /** Initiates a scan */
                    function scanToJpg() {
                        scanner.scan(displayImagesOnPage,
                                {
                                    "output_settings": [
                                        {
                                            "type": "return-base64",
                                            "format": "jpg"
                                        }
                                    ]
                                }
                        );
                    }

                    /** Processes the scan result */
                    function displayImagesOnPage(successful, mesg, response) {
                        if(!successful) { // On error
                            console.error('Failed: ' + mesg);
                            return;
                        }

                        if(successful && mesg != null && mesg.toLowerCase().indexOf('user cancel') >= 0) { // User cancelled.
                            console.info('User cancelled');
                            return;
                        }

                        var scannedImages = scanner.getScannedImages(response, true, false); // returns an array of ScannedImage
                        for(var i = 0; (scannedImages instanceof Array) && i < scannedImages.length; i++) {
                            var scannedImage = scannedImages[i];
                            processScannedImage(scannedImage);
                        }
                    }

                    /** Images scanned so far. */
                    var imagesScanned = [];

                    /** Processes a ScannedImage */
                    function processScannedImage(scannedImage) {
                        imagesScanned.push(scannedImage);
                        var elementImg = scanner.createDomElementFromModel( {
                            'name': 'img',
                            'attributes': {
                                'class': 'scanned',
                                'src': scannedImage.src
                            }
                        });
                        document.getElementById('images').appendChild(elementImg);
                    }

                    <!-- Previous lines are same as demo-01, below is new addition to demo-02 -->

                    /** Upload scanned images by submitting the form */
                    function submitFormWithScannedImages() {
                        if (scanner.submitFormWithImages('form1', imagesScanned, function (xhr) {
                            if (xhr.readyState == 4) { // 4: request finished and response is ready
                                document.getElementById('server_response').innerHTML = "<h2>Response from the server: </h2>" + xhr.responseText;
                                document.getElementById('images').innerHTML = ''; // clear images
                                imagesScanned = [];
                            }
                        })) {
                            document.getElementById('server_response').innerHTML = "Submitting, please stand by ...";
                        } else {
                            document.getElementById('server_response').innerHTML = "Form submission cancelled. Please scan first.";
                        }
                    }

                </script>
                
                <!-- script de bootstrap 5 pour l'effet Hover Tooltip du  boutton scan  -->
                <script>
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                    })
                </script>

            <!-- j'ajoute ici le style de scanner.js -->
                <style>
                    img.scanned {
                        height: 200px; /** Sets the display size */
                        margin-right: 12px;
                    }

                    div#images {
                        margin-top: 20px;
                    }
                </style>
                
                        <!-- HELP_LINKS_START help links at the bottom -->
                        <style>
                            .asprise-footer, .asprise-footer a:visited { font-family: Arial, Helvetica, sans-serif; color: #999; font-size: 13px; }
                            .asprise-footer a {  text-decoration: none; color: #999; }
                            .asprise-footer a:hover {  padding-bottom: 2px; border-bottom: solid 1px #9cd; color: #06c; }
                        </style>



                <!-- from lordicon: les icones du folder et pdf -->
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
        
    </head>
    <body class="antialiased">

        
            <!--- la bare de navigation -->
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

    <div class="col-sm-3 container-fluid shadow p-4 mb-4 bg-white">
                    
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
            <div class="container shadow-sm mb-4 bg-white" >

                        
                <!-- from lordicon  -->
                
                <div class="row">
                    <div class="col-sm-2">                       
                        <lord-icon
                            src="https://cdn.lordicon.com/veoexymv.json"
                            trigger="hover"
                            style="width:40px;height:40px;">
                        </lord-icon>
                    </div>
                    <div class="col-sm-9 " style="margin-left: 10px">
                         Document Office
                    </div>
                </div>

                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-sm-2" style="margin-left: 15px">                       
                                <lord-icon
                                    src="https://cdn.lordicon.com/lsrcesku.json"
                                    trigger="hover"
                                    style="width:25px;height:25px;">
                                </lord-icon>
                            </div>
                            <div class="col-sm-6" style="font-size: 70%">
                                Doc 1.pdf
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-sm-2" style="margin-left: 15px">                       
                                <lord-icon
                                    src="https://cdn.lordicon.com/lsrcesku.json"
                                    trigger="hover"
                                    style="width:25px;height:25px;">
                                </lord-icon>
                            </div>
                            <div class="col-sm-6" style="font-size: 70%">
                                Doc 2.pdf
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-sm-2" style="margin-left: 15px">                       
                                <lord-icon
                                    src="https://cdn.lordicon.com/lsrcesku.json"
                                    trigger="hover"
                                    style="width:25px;height:25px;">
                                </lord-icon>
                            </div>
                            <div class="col-sm-6" style="font-size: 70%">
                                Doc 3.pdf
                            </div>
                        </div>
                    </a>
                    
                </div>                
            </div>

            <div class="row ">
                <div class="col-md-6 offset-md-3" style=" margin-left: 2px;" >
                    <div class="accordion accordion-flush" id="faqlist" style="width: 200px; ">
                        <div class="accordion-item" >
                            <h2 class="accordion-header" >
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    Type of Document
                                    </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    This online demo application shows how to use the Dynamic Web TWAIN SDK to control any TWAIN compatible scanners in a web page.
                                </div>
                            </div>
                        </div>
    
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                Profile
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    This online demo application shows how to use the Dynamsoft SDK
                                    in a web page to capture images, edit and then upload to web servers.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                    Read Barecode from scanners
                                </button>
                            </h2>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                </div>
                            </div>
                        </div>
    
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                History of scanning
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    The online demo allows fast and robust barcode recognition from scanned documents
                                </div>
                            </div>
                        </div>
    
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                    Capture from Scanner
                                </button>
                            </h2>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>
    </div>


                <div class="col-sm-9">
                    
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
                    <div class="row">
                        <div class="col-8 bg-white p-4" >

                            <!-- au milieu de la page j'affiche les images PDF scannés -->
                            <!-- au milieu de la page et a droite j'affiche les images PDF scannés 
                             __________________________________
                            |                                  |
                            |        |=============||=======|| |
                            |        |             ||       || |
                            |        |             ||  HERE || |
                            |        |             ||       || |
                            |        |=============||=======|| |
                            |__________________________________|                            
                            
                        -->
                            <div class="pdf-show">
                                @yield('pdf-show')
                            </div>

                        </div>



                        <div class="col-4 bg-white p-1" >

                            <!-- dans la partie la plus a droite j'integre mon scanner.js --> 
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
