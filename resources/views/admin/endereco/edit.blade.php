@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Editar endereço</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label>Provincia</label>
                    <input type="text" class="form-control" name="provincia" value="{{$getRecord->provincia }}"  required placeholder="Adicionar Provincia">
                  </div>
                  <div class="form-group">
                    <label>Municipio </label>
                    <input type="text" class="form-control" name="municipio" value="{{ $getRecord->municipio }}" required placeholder="Adicionar Municipio">
                
                    
                  </div>
                  <div class="form-group">
                    <label>Numero da casa</label>
                    <input type="text " class="form-control" name="casa"  value="{{ $getRecord->casa }}" required placeholder="Numero da casa">
                  </div>

                 


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->






          </div>
          <!--/.col (left) -->
          <!-- right column -->



              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection
