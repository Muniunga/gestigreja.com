@extends('layouts.app')

@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista de Usuarios</h1>
          </div>

          <div class="col-sm-6"style="texte-align:right;">
           <a href="{{url('admin/admin/add') }}" class="btn btn-primary">Add</a>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- /.col -->
          <div class="col-md-12">


          @include('_mensagem')
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Administradores/Pastores</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Data de criação</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($getRecord as $value)

                     <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>
                            <a href="{{ url('admin/admin/edit/'.$value->id) }}" class="btn btn-primary">editar</a>
                            <a href="{{ url('admin/admin/delete/'.$value->id) }}" class="btn btn-danger">apagar</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
                </table>
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
