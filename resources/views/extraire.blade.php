@extends('base')

@section('scan')


        <!-- toute la partie du boutton scanner.js est ajoutée ici -->

            <div class="shadow p-4 mb-4 bg-white" style="padding: 0px !important">  
                          

                  <div class="d-grid">
                      <button type="button" class="btn btn-primary btn-block" onclick="scanToJpg();" style="font-size: 25px;" data-bs-toggle="tooltip" title="Hooray!"> SCAN</button>
                  </div>
              
                  <!--  Ici la partie upload des fichiers scannés sur le serveur (reste des fonctions de scanner.js)  
                    
                      Previous lines are same as demo-01, below is new addition to demo-02 ->      
                    <form id="form1" action="https://asprise.com/scan/applet/upload.php?action=dump" method="POST" enctype="multipart/form-data" target="_blank" >
                        <input type="text" id="sample-field" name="sample-field" value=" Project {{ date('d-m-Y') }}" style="border: 2px solid;"/>
                        <input type="button" value="Save in the server" class="btn btn-secondary btn-block" onclick="submitFormWithScannedImages();">   
                    </form>      
                    <div id="server_response"></div>
                    -->      
                    <!-- 
                    <div class="asprise-footer" style="margin-top: 48px;">
                        <a href="http://asprise.com/document-scan-upload-image-browser/direct-to-server-php-asp.net-overview.html" target="_blank" title="Opens in new tab">Scanner.js Homepage</a> |
                        <a href="http://asprise.com/scan/scannerjs/docs/html/scannerjs-javascript-guide.html" target="_blank" title="Opens in new tab">Developer's Guide to ScannerJs</a> |
                        <a href="https://github.com/Asprise/scannerjs.javascript-scanner-access-in-browsers-chrome-ie.scanner.js" target="_blank" title="Opens in new tab">Sample code on Github</a>
                    </div>
                  -->
              <!-- HELP_LINKS_END -->
          </div>


      <!-- ici j'affiche l'arboressence des fichiers sur le serveur   -->

      <div class="container shadow mb-4 bg-white" >                    

                    <!-- from lordicon  -->                
                  <div class="row">
                    <div class="col-sm-2">                       
                        <lord-icon
                            src="https://cdn.lordicon.com/veoexymv.json"
                            trigger="hover"
                            style="width:40px;height:40px;">
                        </lord-icon>
                    </div>
                    <strong class="col-sm-9 " style="margin-left: 10px">
                        Document Office
                    </strong>
                  </div>

                  <div class="list-group" style="padding-bottom: 5%;">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-sm-2">                       
                                <lord-icon
                                    src="https://cdn.lordicon.com/veoexymv.json"
                                    trigger="hover"
                                    style="width:25px;height:25px;">
                                </lord-icon>
                            </div>
                            <strong class="col-sm-6" style="font-size: 70%">
                                Factures
                            </strong>
                        </div>
                    </a>
                    <div class="list-group" style="padding-bottom: 5%;">
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
                            <div class="col-sm-2" >                       
                                <lord-icon
                                    src="https://cdn.lordicon.com/veoexymv.json"
                                    trigger="hover"
                                    style="width:25px;height:25px;">
                                </lord-icon>
                            </div>
                            <strong class="col-sm-6" style="font-size: 70%">
                                Bons de Commande
                            </strong>
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
                                Doc 4.pdf
                            </div>
                        </div>
                    </a>
                    
                  </div>                
      </div>


      <!-- 
          ici j'affiche la partie Scan Utilities
      -->        

        <div class="row shadow"> 
                    
                  <div class="row">
                      <div class="col-sm-2"> 
                          <lord-icon
                              src="https://cdn.lordicon.com/ofzpbawy.json"
                              trigger="hover"
                              style="width:50px;height:50px">
                          </lord-icon>
                      </div>
                      <strong class="col-sm-9 " style="margin-left: 10px">
                          Scan utilities
                      </strong>
                  </div>

                  <div class="col-md-6 offset-md-3" style=" margin-left: 2px;" >
                        <div class="accordion accordion-flush" id="faqlist" style="width: 220%; ">
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
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                          Preferences
                                          </button>
                                      </h2>
                                      <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                          <div class="accordion-body">
                                              The online demo allows fast and robust barcode recognition from scanned documents
                                          </div>
                                      </div>
                                  </div>

                        </div>
                  </div>
          </div>

@endsection


@section('thumbnails')


    <div class="col-4 bg-white shadow" style=" width: 99%;">

          <div class="row">
            <div class="col">
              <img src="facture_3.png" class="img-thumbnail" alt="Petite facture" style="padding-bottom: 15px; border: 1px solid hsl(0, 0%, 1%)">
              <img src="facture_4.png" class="img-thumbnail" alt="Petite facture" style="padding-bottom: 15px; border: 1px solid hsl(0, 0%, 1%)">
              <img src="facture2.png" class="img-thumbnail" alt="Petite facture" style="padding-bottom: 15px; border: 1px solid hsl(0, 0%, 1%)">
            </div>

            <div class="col">
              <div id="images" class="img-thumbnail" alt="Petite facture" style="padding-bottom: 15px; border: 1px solid hsl(0, 0%, 1%)">Uploaded Images will apear here</div>
            </div>
            
          </div>
    </div> 

@endsection


@section('pdf-show')

<div class="container-fluid ">
    <div class="row p-4 shadow mb-4 bg-white">

          <!-- 
            ici j'affiche les icones de traitement du PDF 
          -->
        <div class="row">

              <div class="col"   style=" padding-right: 0; padding-left: 3px; ">
                <img src="icons/rotate_left.png" alt="" style="border:1px solid rgb(10, 10, 10);width:55px;height:100%;">
              </div>
              <div class="col" style=" padding-right: 0; padding-left: 3px; ">
                <img src="icons/rotate_right.png" alt="" style="border:1px solid rgb(10, 10, 10);width:55px;height:100%;">
              </div>
              <div class="col" style=" padding-right: 0; padding-left: 3px; ">
                <img src="icons/rotate_180.png" alt="" style="border:1px solid rgb(10, 10, 10);width:55px;height:100%;">
              </div>
              <div class="col" style=" padding-right: 0; padding-left: 3px; ">
                <img src="icons/edit.png" alt="" style="border:1px solid rgb(10, 10, 10);width:55px;height:100%;">
              </div>
              <div class="col" style=" padding-right: 0; padding-left: 3px; ">
                <img src="icons/horizontale.png" alt="" style="border:1px solid rgb(10, 10, 10);width:55px;height:100%;">
              </div>
              <div class="col" style=" padding-right: 0; padding-left: 3px; ">
                <img src="icons/vertical.png" alt="" style="border:1px solid rgb(10, 10, 10);width:55px;height:100%;">
              </div>
              <div class="col" style=" padding-right: 0; padding-left: 3px; ">
                <img src="icons/agrandir.png" alt="" style="border:1px solid rgb(10, 10, 10);width:55px;height:100%;">
              </div>
              <div class="col" style=" padding-right: 0; padding-left: 3px; ">
                <img src="icons/delete.png" alt="" style="border:1px solid rgb(10, 10, 10);width:55px;height:100%;">
              </div>
              <div class="col" style=" padding-right: 0; padding-left: 3px; ">
                <img src="icons/delete_plusieurs.png" alt="" style="border:1px solid rgb(10, 10, 10);width:55px;height:100%;">
              </div>
              <div class="col" style=" padding-right: 0; padding-left: 3px; ">
                <img src="icons/recadrer.png" alt="" style="border:1px solid rgb(10, 10, 10);width:100%;height:100%;">
              </div>

          </div>
        <div class="col-8 bg-white mx-auto bg-warning"    style=" margin-top: 0.5rem; padding: 0.5rem !important; width: 75%">        
           

            <!-- ici j'affiche le PDF --> 
            <div id="dvs-canvas-container-lret7vn64a" class="dvs-canvas-container" style="left: 0px; top: 0px;">
                <img src="facture_4.png" class="rounded" alt="grande facture" style="left: 0px; top: 0px;border: 1px solid;" >

                  
                <!-- <canvas height="500px" style=" cursor: crosshair; background: rgb(255, 255, 255);"> 
                    
                </canvas>--> 
            </div>
                <!-- ici j'affiche les icones de zoom et changement de pages -->
                <div class="row" style="    margin-top: 1rem;" >

                  <div class="col" style=" padding-right: 0; padding-left: 0; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash-square-fill" viewBox="0 0 16 16">
                      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm2.5 7.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1"/>
                    </svg>
                  </div>
                  <div class="col" style=" padding-right: 0; padding-left: 0; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                  </div>
                  
                  <div class="col" style=" padding-right: 0; padding-left: 0; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                    </svg>
                  </div>
                  <div class="col" style=" padding-right: 0; padding-left: 0; ">
                    Page: 
                  </div>
                  <div class="col" style=" padding-right: 0; padding-left: 0; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                    </svg>
                  </div>
                  
                  <div class="col" style=" padding-right: 0; padding-left: 0; ">
                    1/1
                  </div>
                  <div class="col" style=" padding-right: 0; padding-left: 0; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                    </svg>
                  </div>

                </div>

        </div>
    </div>
</div>

@endsection




@section('content')

        <div class="d-grid">
          <button type="button" class="btn btn-secondary btn-block" onclick="alert('document pas encore prét');" style="font-size: 25px;" data-bs-toggle="tooltip"> Save</button>
        </div>
          <div>
            <label for="email">Document Name :</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
          </div>
          
          <div>            
            <label for="language">Language :</label>
            <select class="form-select">
              <option>French</option>
              <option>English</option>
              <option>Ababic</option>
              <option>Deutsch</option>
            </select>
          </div>
          
          <div>
            <label for="facture">Facture Number :</label>
            <input type="text" class="form-control" id="facture_number" placeholder="Number" name="facture_number">
          </div>
          <div>
            <label for="size">Size:</label>
            <input type="text" class="form-control" id="size" placeholder="Octet" name="size">
          </div>
          <div>
            <label for="value">Value :</label>
            <input type="text" class="form-control" id="value" placeholder=" $" name="value">
          </div>
        
            
            
@endsection


