@extends('admin.layouts.app')

@section('title', 'Lista Noticias')

@section('content')
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Mis Noticias</h5>
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

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Imagen</th>
                        <th>Titulo</th>
                        <th>Copete</th>
                        <th class="center"> Herramientas</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($noticias as $noticia)

                    <tr class="gradeX">
                        <td>{{ $noticia->id }}</td>
                        <td><img src="{{ Request::root() }}/images/news/{{ $noticia->img }}" style="    width: 100px;"></td>
                        <td>{{ $noticia->titulo }}</td>
                        <td class="center">{{ $noticia->copete }}</td>
                        <td class="center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                              
                                  <a href="{{ route('n_edit',$noticia->id) }}" class="btn btn-secondary"><i class="fa fa-folder"></i> Editar</a>
                                  <a href="{{ route('n_destroy',$noticia->id) }}" class="btn btn-secondary" onclick="return confirm('Desea Eliminar?')" >Eliminar</a>
                             
   
                            </div>
                        </td>
                    </tr>

                    @endforeach


                    
                    </tbody>

                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
@endsection

@section('scripts')

<script src="{!! asset('js/plugins/dataTables/datatables.min.js') !!}" type="text/javascript"></script>

    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                order: [[ 0, "desc" ]],
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

@endsection

