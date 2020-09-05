@extends('admin.layouts.app')

@section('title', 'CrearNoticia')
@section('head')
    @parent
    <link rel="stylesheet" href="{{asset('assets/summernote/dist/summernote.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slim/slim.min.css')}}">
@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
           <form class="form-horizontal" method="post" id="form1" action="@if(isset($new))/admin/modelos/actualizar_modelos @else ./create_modelos @endif" enctype="multipart/form-data">

                <div class="col-lg-9">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Nuevo Modelo</h5>

                        </div>
                        <div class="ibox-content">

            
                        <div class="form-group col-sm-4 ">
                            <label class="col-sm-2 control-label">M2:</label>

                            <div class="col-sm-10"><input type="text" class="form-control" value="@if(isset($new)){{ $new->m2 }}@endif" name="m2"></div>
                        </div>

                        <div class="form-group col-sm-4 ">
                            <label class="col-sm-3 control-label">Ambientes:</label>

                            <div class="col-sm-9"><input type="text" class="form-control" value="@if(isset($new)){{ $new->m2 }}@endif" name="ambientes"></div>
                        </div>

                        <div class="form-group col-sm-4 ">
                            <label class="col-sm-2 control-label">Baños:</label>

                            <div class="col-sm-10"><input type="text" class="form-control" value="@if(isset($new)){{ $new->m2 }}@endif" name="banos"></div>
                        </div>



                        <div class="form-group"><label class="col-sm-2 control-label">Titulo:</label>

                            <div class="col-sm-10"><input type="text" class="form-control" value="@if(isset($new)){{ $new->titulo }}@endif" name="titulo"></div>
                        </div>

{{ csrf_field() }}

                                <textarea id="summernote" name="descripcion">@if(isset($new)){{ $new->curepo }}@endif</textarea>


                                               <div class="clearfix"></div>



                                               <input type="hidden" name="id_n" value="@if(isset($new)){{ $new->id }}@endif">              


                         <div class="ibox-title">

                            <h5>Fotos</h5>

                        </div>
                    <!-- dropzone field -->
                <div id="myDropzone" class="dropzone"></div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Tools</h5>
    
                        </div>
                        <div class="ibox-content">

                            <div class="switch">
                                                            Estado
                                <div class="onoffswitch">

                                    <input type="checkbox" checked class="onoffswitch-checkbox" id="example1" name="estado">
                                    <label class="onoffswitch-label" for="example1">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>

                            </div>

                            <div class="switch">
                                Destacar
                                <div class="onoffswitch">

                                    <input type="checkbox"  class="onoffswitch-checkbox" id="example2" name="destacar">
                                    
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>

                            </div>






                            <div class="btn-group" id="img_names">

     <button type="submit" form="form1" value="Submit" class="btn btn-primary" >Publicar</button>

                                  
                           </div>


                            
                    </div>
                </div>
            </div>

              </form>

            
        </div>

        </div>

@endsection

@section('scripts')
    @parent
    <!-- SUMMERNOTE -->

    <link href="{!! asset('css/plugins/select2/select2.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/summernote/summernote.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/summernote/summernote-bs3.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/dropzone/basic.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/dropzone/dropzone.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/cropper/cropper.min.css') !!}" rel="stylesheet">

    <script src="{!! asset('js/plugins/summernote/summernote.min.js') !!}" type="text/javascript"></script>

    <!-- Select2 -->
    <script src="{!! asset('js/plugins/select2/select2.full.min.js') !!}"></script>
   <!-- DROPZONE -->
    <script src="{!! asset('js/plugins/dropzone/dropzone.js') !!}"></script>

    <!-- Image cropper -->
    <script src="{!! asset('js/plugins/cropper/cropper.min.js') !!}"></script>


    <script>



        $(document).ready(function(){

      $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 400
      });

        });

// disable auto discover
Dropzone.autoDiscover = false;
// init dropzone on id (form or div)
$(document).ready(function() {

    var myDropzone = new Dropzone("#myDropzone", {
        url: "{{ route('upload_modelos') }}",
        paramName: "file",
        autoProcessQueue: true,
        uploadMultiple: false, // uplaod files in a single request
        parallelUploads: 100, // use it with uploadMultiple
        maxFilesize: 10, // MB
        maxFiles: 10,
        acceptedFiles: ".jpg, .jpeg, .png, .gif, .pdf",
        addRemoveLinks: true,
        // Language Strings
        dictFileTooBig: "File is to big (10mb). Max allowed file size is 10mb",
        dictInvalidFileType: "Invalid File Type",
        dictCancelUpload: "Cancel",
        dictRemoveFile: "Remove",
        dictMaxFilesExceeded: "Only 10files are allowed",
        dictDefaultMessage: "Drop files here to upload",
        headers: {
        'X-CSRF-TOKEN':'{{ csrf_token() }}'
        
    },
    success: function(file, response){
        //alert("Test1");

        $('#img_names').append("<input type='hidden' value='"+response+"' name='fotos[]'  />"); 

    }
    });


});


$(".select2_demo_1").select2();

    </script>
@endsection