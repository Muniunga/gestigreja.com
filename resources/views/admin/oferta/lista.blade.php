@extends('layouts.app')

@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista de oferta </h1>
                </div>

                <div class="col-sm-6" style="texte-align:right;">
                    <a href="{{url('admin/oferta/add') }}" class="btn btn-primary">Add</a>
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
                        <h3 class="card-title"> Pesquisar Oferta</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="get" action="">

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Paroquia</label>
                                    <input type="text" class="form-control" value="{{ Request::get('paroquia') }}" name="Paroquia" placeholder="Paroquia ">
                                </div>
                                <div class="form-grou col-md-4">
                                    <label>Data </label>
                                    <input type="date" class="form-control" value="{{ Request::get('data') }}" name="data" placeholder="Data">
                                </div>


                                <div class="form-grou col-md-3">
                                    <button class="btn btn-primary" type="submit" style="margin-top:30px;">pesquisar</button>
                                    <a href="{{ url('admin/oferta/lista') }}"class="btn btn-success" type="submit" style="margin-top:30px;">concluir</a>
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
                            <h3 class="card-title">Ofertas </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Valor</th>
                                        <th>descricao</th>
                                        <th>Paroquia</th>
                                        <th>data</th>
                                        <th>acções</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getRecord as $value)

                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->valor }}</td>
                                        <td>{{ $value->descricao }}</td>
                                        <td>{{ $value->paroquia }}</td>
                                        <td>{{ $value->data }}</td>
                                       
                                        
                                        
                                        <td>
                                            <a href="{{ url('admin/oferta/edit/'.$value->id) }}" class="btn btn-primary">editar</a>
                                            <a href="{{ url('admin/oferta/delete/'.$value->id) }}" class="btn btn-danger">apagar</a>
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