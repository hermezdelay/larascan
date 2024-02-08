# larascan
scan documents, extract data from PDF and images inserting them to database or via API's
To run project you have to open laravel server and bootstrap server:
$ php artisan serv
$ npm run dev

Laravel Server is running on [http://127.0.0.1:8000]
Vite is runing on : http://localhost:5173/


commands i've write to install bootstrap on laravel:
    * composer create-project laravel/laravel=10 capture_software
    * php artisan serv  
    * npm install 
    * npm run dev
    * composer require laravel/ui --dev
    * php artisan ui bootstrap --auth  
    * npm run dev        
    * npm install bootstrap-icons --save-dev
    * php artisan migrate

/****************************** Integrating Scanner step ****************************************/
For showing available scanners and scanning module you have to install scanner.js by taping this command:
    $ npm install scanner.js
    
and you have to download the software scannerjs.zip in the link: https://asprise.com/scan/scannerjs/docs/html/scannerjs-javascript-guide.html#include-scanner-js
you can include this script to your HTML pages to remotely call asprise services: <script src="//cdn.asprise.com/scannerjs/scanner.js" type="text/javascript"></script>
Or you can even host services in your own PC/Server, you have to use Bower in this case, click link bellow to know more:
https://asprise.com/scan/scannerjs/docs/html/scannerjs-javascript-guide.html#include-scanner-js

next step is to copy/paste demo-2.html in your laravel project, and make changes you whant, that's all.

/**************************************************************************************/
I use animated folder and PDF icons from "lordicon.com"
/**************************************************************************************/
I'll add tesseract OCR to the project
i don't now if it supports arabic but let's try now
for your information tesseract ocr is supported by google
