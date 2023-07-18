@extends('layouts.app')

@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista de Membros </h1>
                </div>

                <div class="col-sm-6" style="texte-align:right;">
                    <a href="{{url('admin/membro/add') }}" class="btn btn-primary">Add</a>
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
                        <h3 class="card-title"> Pesquisar membro</h3>
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
                                    <label>Idade </label>
                                    <input type="text" class="form-control" value="{{ Request::get('idade') }}" name="idade" placeholder="idade">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Paroquia </label>
                                    <input type="text" class="form-control" value="{{ Request::get('paroquia') }}" name="paroquia" placeholder="paroquia">
                                </div>


                                <div class="form-grou col-md-3">
                                    <button class="btn btn-primary" type="submit" style="margin-top:30px;">pesquisar</button>
                                    <a href="{{ url('admin/endereco/lista') }}" class="btn btn-success" type="submit" style="margin-top:30px;">concluir</a>
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
                            <h3 class="card-title">Membros </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        
                                        <th>endereço</th>


                                        <th>Paroquia</th>
                                       
                                        <th>acções</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getRecord as $value)

                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->name }}</td>
                                        
                                        <td>{{ $value->endereco }}</td>
                                        <td>{{ $value->paroquia }}</td>
                                       
                                       
                                        
                                       


                                        <td>
                                        
                                            <a href="{{ url('admin/membro/detalhe/'.$value->id  ) }}" class="btn btn-success">Mais</a>
                                           
                                        </td> 
                                    </tr>
                                    @endforeach
                            </table>
                            <div style="padding:10px; float:right;">
                                {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links()!!}
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
