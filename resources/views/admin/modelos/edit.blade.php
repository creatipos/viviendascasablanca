@extends('admin.master')

@section('title', 'CrearNoticia')
@section('head')
    @parent
    <link rel="stylesheet" href="{{asset('assets/summernote/dist/summernote.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slim/slim.min.css')}}">
@endsection

@section('content')

<!--main content start-->

<div class="ui-container">

    <!--page title and breadcrumb start -->
    <div class="row">
        <div class="col-md-8">
            <h1 class="page-title">Crear Noticia</h1>
        </div>
        <div class="col-md-4">
            <ul class="breadcrumb pull-right">
                <li><a href="/admin/noticias" class="active">Noticias</a></li>
                <li><a href="#" class="active">Crear noticia</a></li>
            </ul>
        </div>
    </div>
    <!--page title and breadcrumb end -->
    <form id="form1" action="{{ route('update_noticia', ['id' => $new->id]) }}" class="form-validate" method="post" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <header class="panel-heading">
                         <label for="">Imagen de la noticia</label>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="slim"
                                     data-label="<div class='ctn-icon-img'><i class='fa fa-picture-o'></i></div> Drop your image here"
                                     data-size="1920,1000"
                                     data-ratio="5:3"
                                     data-post="output"
                                     data-instant-edit="true">

                                    @if ($new->image)
                                        <img src="{{ asset('images/news/'.$new->image) }}" alt=""/>
                                    @endif
                                    <input type="file" name="photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <header class="panel-heading">
                        Información de la noticia
                    </header>
                    <div class="panel-body">

                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="idShortTitle">Título corto</label>
                                    <input name="short_title" class="form-control" id="idShortTitle" type="text" required placeholder="" value="{{$new->short_title}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <div><label for="idSelectStatus">Estado</label></div>
                                    <select name="status" id="idSelectUser" class="form-control">
                                        <option value="active"
                                            @if ($new->status == 'active')
                                                selected
                                            @endif
                                        >Publicado
                                        </option>
                                        <option value="paused"
                                            @if ($new->status == 'paused')
                                                selected
                                            @endif
                                        >Pausado
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="idTitle">Título</label>
                                        <input name="title" class="form-control" id="idTitle" type="text" required placeholder="" value="{{$new->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="idTitle">Copete</label>
                                        <textarea name="header" id="" cols="30" rows="4" class="form-control">{{$new->header}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="idPlan2">Cuerpo</label>
                                    <textarea name="body" id="summernote">{{$new->body}}</textarea>
                                </div>
                            </div>

                            {{csrf_field()}}
                            <button class="btn btn-lg btn-primary"><i class="fa fa-plus"></i> Actualizar Noticia</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



@include('admin.right_sidebar')

<!--main content end-->

@endsection

@section('footer')
    @parent
    <script src="{{asset('assets/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{asset('assets/slim/slim.jquery.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $(".aMainNews").click();
            $(".slim").slim();
            $('#summernote').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                  // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection