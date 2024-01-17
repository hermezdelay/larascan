<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  body {
      position: relative; 
  }
  </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#section1">Section 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section2">Section 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section3">Section 3</a>
      </li>
    </ul>
  </div>
</nav>

<div id="section1" class="container-fluid bg-success text-white" style="padding:100px 20px;">
  <h1>Section 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

<div id="section2" class="container-fluid bg-warning" style="padding:100px 20px;">
  <h1>Section 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

<div id="section3" class="container-fluid bg-secondary text-white" style="padding:100px 20px;">
  <h1>Section 3</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

</body>
</html>

@extends('base')

@section('pdf-show')

  
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#section1">Scanner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section2">Path</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section3">Découpage de fichier</a>
          </li>
        </ul>
      </div>
    </nav>

    <div id="section1" class="container-fluid bg-success text-white" style="padding:100px 20px;">
      <h1>Scanner Informations</h1>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>

    <div id="section2" class="container-fluid bg-warning" style="padding:100px 20px;">
      <h1>File path</h1>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>

    <div id="section3" class="container-fluid bg-secondary text-white" style="padding:100px 20px;">
      <h1>decoupage par codebare</h1>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>

@endsection




@section('content')


        <!-- toute la partie du scanner.js est ajoutée ici -->

                        
                        <div class="d-grid">
                            <button type="button" class="btn btn-primary btn-block" onclick="scanToJpg();" style="font-size: 25px;" data-bs-toggle="tooltip" title="Hooray!">SCAN</button>
                        </div>
                    
                        <!-- Previous lines are same as demo-01, below is new addition to demo-02 -->
                    
                        <form id="form1" action="https://asprise.com/scan/applet/upload.php?action=dump" method="POST" enctype="multipart/form-data" target="_blank" >
                            <input type="text" id="sample-field" name="sample-field" value=" Project {{ date('d-m-Y') }}" style="border: 2px solid;"/>
                            <input type="button" value="Save in the server" class="btn btn-secondary btn-block" onclick="submitFormWithScannedImages();">
                            
                        </form>
                    
                        <div id="server_response"></div>
                    
                        <!-- 
                        <div class="asprise-footer" style="margin-top: 48px;">
                            <a href="http://asprise.com/document-scan-upload-image-browser/direct-to-server-php-asp.net-overview.html" target="_blank" title="Opens in new tab">Scanner.js Homepage</a> |
                            <a href="http://asprise.com/scan/scannerjs/docs/html/scannerjs-javascript-guide.html" target="_blank" title="Opens in new tab">Developer's Guide to ScannerJs</a> |
                            <a href="https://github.com/Asprise/scannerjs.javascript-scanner-access-in-browsers-chrome-ie.scanner.js" target="_blank" title="Opens in new tab">Sample code on Github</a>
                        </div>
                        -->
                        <!-- HELP_LINKS_END -->
@endsection


