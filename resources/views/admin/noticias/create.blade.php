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
           <form class="form-horizontal" method="post" id="form1" action="@if(isset($new))/admin/noticias/actualizar_noticia @else ./create_noticia @endif" enctype="multipart/form-data">

                <div class="col-lg-9">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Nueva Noticia</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

            
                        <div class="form-group"><label class="col-sm-2 control-label">#hastag:</label>

                            <div class="col-sm-10"><input type="text" class="form-control" value="@if(isset($new)){{ $new->hastag }}@endif" name="hastag"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Titulo:</label>

                            <div class="col-sm-10"><input type="text" class="form-control" value="@if(isset($new)){{ $new->titulo }}@endif" name="titulo"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Copete:</label>

                            <div class="col-sm-10">
                             <textarea rows="4" class="form-control" style="width: 100%;" name="copete">@if(isset($new)){{ $new->copete }}@endif</textarea>
                            </div>
                        </div>
{{ csrf_field() }}

                                <textarea id="summernote" name="cuerpo">@if(isset($new)){{ $new->curepo }}@endif</textarea>


                                               <div class="clearfix"></div>



                                               <input type="hidden" name="id_n" value="@if(isset($new)){{ $new->id }}@endif">              


                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Modal form <small>Example of login in modal box</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
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
                                                            ¿Mostrar Cotizacion ?
                                <div class="onoffswitch">

                                    <input type="checkbox"  class="onoffswitch-checkbox" id="example3" name="cotizacion">
                                    <label class="onoffswitch-label" for="example3">
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



                            <h3>
                                Imagen Destacada
                            </h3>
                            <div class="text-center center">
                             <div class="img-preview img-preview-sm"><img id="thumbnil" style="width:100%;"  src="{{ Request::root() }}/images/news/@if(isset($new)){{ $new->img }}@endif" alt="image"/></div>
                            </div>



                            <div class="btn-group">

                                <input type="file" accept="image/*"  onchange="showMyImage(this)" name="foto" />
 <br/>




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
function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnil");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }    
    }
        $(document).ready(function(){



            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {

                    $('#modal-form').modal('show'); 

                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

        });



        $(document).ready(function(){

      $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 400
      });

        });



    Dropzone.options.dropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            dictDefaultMessage: "<strong>Drop files here or click to upload. </strong></br> (This is just a demo dropzone. Selected files are not actually uploaded.)"
        };

$(".select2_demo_1").select2();

    </script>
@endsection