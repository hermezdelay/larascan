@extends('base')

@section('pdf-show')

<div class="container-fluid">
    <div class="row">
      <div class="col-8 bg-white p-4" style=" border: 1px solid hsl(0, 0%, 1%)">
        col-8-8
        <div id="dvs-canvas-container-lret7vn64a" class="dvs-canvas-container" style="left: 0px; top: 0px;">
            <img src="facture2.png" class="rounded" alt="grande facture" style=" border: 1px solid hsl(0, 0%, 1%)">
            <canvas height="500px" style=" cursor: crosshair; background: rgb(255, 255, 255);">
                
            </canvas>
        </div>
        
      </div>
      <div class="col-4 bg-white p-1" style=" border: 1px solid hsl(0, 0%, 1%)">
        col-8-4
        <div id="images">Uploaded Images will apear here</div>
        <div id="dvs-canvas-container-lret7vn64a" class="dvs-canvas-container" style="border: 1px solid hsl(0, 0%, 1%); left: 0px; top: 0px;">
            
            <img src="facture.png" class="img-thumbnail" alt="Petite facture" style="padding-bottom: 15px; border: 1px solid hsl(0, 0%, 1%)">
            <img src="facture2.png" class="img-thumbnail" alt="Petite facture" style="padding-bottom: 15px; border: 1px solid hsl(0, 0%, 1%)">
            <canvas width="120px" height="400px" style=" cursor: crosshair; background: rgb(255, 255, 255);">
                
            </canvas>
        </div>
      </div>
    </div>
  </div>
@endsection




@section('content')


        <!-- toute la partie du scanner.js est ajoutée ici -->

                        
                        <div class="d-grid">
                            <button type="button" class="btn btn-primary btn-block" onclick="scanToJpg();" style="font-size: 25px;">SCAN</button>
                        </div>
                    
                        <!-- Previous lines are same as demo-01, below is new addition to demo-02 -->
                    
                        <form id="form1" action="https://asprise.com/scan/applet/upload.php?action=dump" method="POST" enctype="multipart/form-data" target="_blank" >
                            <input type="text" id="sample-field" name="sample-field" value="Send to the server" style="border: 2px solid;"/>
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


