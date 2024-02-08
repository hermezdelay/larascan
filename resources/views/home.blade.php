@extends('layouts.app')

@section('content')
<!--  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        
    </div>
</div> 
    -->
    
    <div class="row">
        <div class="col-8">
            
            <div class="row">
                <!--ici je charge l'image uploadé -->
                <div class="col-6">
                    <div class="div">
                        @if(Session::has('text'))                                       
                            <img src="{{Session::get('fullUrl')}}" alt="votre image ici" class="mx-auto d-block img-fluid" style=" margin-top:10px; margin-left:20px !important; border:2px solid black;">
                        @else
                            <img src="images/upload-social-media.png" alt="votre image ici" style="max-width: 400px; max-height: 400px;"  class="mx-auto d-block img-fluid">
                        @endif

                    </div>
                    
                </div>
                <div class="col-6">
                    <!--ici je met le boutton pour uploader l'image -->

                    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                        <div class="panel panel-info" >
                                <div class="panel-heading">
                                    <div class="panel-title">Upload</div>
                                </div>     
            
                                <div style="padding-top:30px" class="panel-body" >
            
                                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                        
                                    <form method="post" action="{{route('upload')}}"  enctype="multipart/form-data" class="form-horizontal" role="form">
                                                @csrf
                                        <div style="margin-bottom: 10px" class="input-group">
                                                <!--<input type="file" name="image"/>   -->                                    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFileMultiple" class="form-label">Please Upload your image here</label>
                                                    <!-- <input class="form-control" type="file" name="image" id="formFileMultiple" multiple>  -->
                                                    <input class="form-control" type="file" name="image" id="formFileMultiple" />
                                                </div>
            
                                            
                                    
            
            
                                            <div style="margin-top:10px" class="form-group">
                                                <!-- Button -->
            
                                                <div class="col-sm-12 controls">
                                                <input type="submit" class="btn btn-success" value="Text Extract">
                                            
            
                                                </div>
                                            </div>
            
                                            
            
                                            
                                        </form>     
            
            
            
                                    </div>                     
                                </div>  
                    </div>
                </div>
            </div>
            </div>

            <div class="col-4">
                
                <div style="margin-top:10px; margin-right:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls" style="border:2px solid black; min-height: 200px">
                        <label>Your Text:</label></br>
                
                        @if(Session::has('text'))
                    {{Session::get('text')}}
                        @endif

                    </div>
                </div>

            </div>
        </div>

@endsection
