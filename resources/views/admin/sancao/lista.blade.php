@extends('layouts.app')

@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista de Sancoes </h1>
                </div>

                <div class="col-sm-6" style="texte-align:right;">
                    <a href="{{url('admin/sancao/add') }}" class="btn btn-primary">Add</a>
                </div>

            </div>

        </div><!-- /.container-fluid -->

    </section>



    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">



            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title"> Pesquisar sancoes</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="get" action="">

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Membro</label>
                                    <input type="text" class="form-control" value="{{ Request::get('name') }}" name="name" placeholder="Nome ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>motivo</label>
                                    <input type="text" class="form-control" value="{{ Request::get('motivo') }}" name="motivo" placeholder="motivo ">
                                </div>
                                
                                <div class="form-grou col-md-4">
                                    <label>Data </label>
                                    <input type="date" class="form-control" value="{{ Request::get('dataInicio') }}" name="dataInicio" placeholder="Data">
                                </div>


                                <div class="form-grou col-md-3">
                                    <button class="btn btn-primary" type="submit" style="margin-top:30px;">pesquisar</button>
                                    <a href="{{ url('admin/sancao/lista') }}"class="btn btn-success" type="submit" style="margin-top:30px;">concluir</a>
                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->


                    </form>

                    <!-- /.card -->










                    <!-- /.card-body -->

                </div>

                <!-- /.col -->
                <div class="col-md-12">


                    @include('_mensagem')
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sanções </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Membro</th>
                                        <th>Motivo</th>
                                        <th>Descrição</th>
                                        <th>Data Inicio</th>
                                        <th>Data Fim</th>
                                        <th>Estado </th>
                                        <th>acções</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getRecord as $value)

                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->membro }}</td>
                                        <td>{{ $value->motivo }}</td>
                                        <td>{{ $value->descricao }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->dataInicio)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->dataFim)) }}</td>
                                        <td>{{ $value->estado }}</td>
                                        
                                        
                                        
                                        
                                        <td>
                                        <a href="{{ url('admin/sancao/edit/'.$value->id) }}" class="btn btn-primary">editar</a>
                                            <a href="{{ url('admin/sancao/delete/'.$value->id) }}" class="btn btn-danger">apagar</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                            <div style="padding:10px; float:right;">
                                {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links()!!}
                            </div>
                            
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection