@extends('layouts.app')

@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
           
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="">ID #</i> {{ $getRecord->id }}
                   
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                                    <address>
                    <strong> Nome: </strong>{{ $getRecord->name }}<br>
                    <strong> idade: </strong>{{ $getRecord->idade }}<br>
                    <strong> telefone: </strong>{{ $getRecord->telefone }}<br>
                    
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                  <address>
                  <strong> Paroquia: </strong>{{ $getRecord->paroquia }}<br>
                  <strong> endereco:< /strong>{{ $getRecord->endereco }}<br>
                    
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                </div>
                <!-- /.col -->
                <a href="{{ url('admin/membro/edit/'. $getRecord->id) }}" class="btn btn-primary">editar</a>
                 <a href="{{ url('admin/admin/delete/'. $getRecord->id) }}" class="btn btn-danger">apagar</a>
              </div>
             
            </div>
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          
            <!-- /.card -->

            <!-- general form elements -->
           

          
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Dizimo</h3>
              </div>
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Valor</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Valor do Dizimo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descrição</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Descrição">
                  </div>
                  <div class="form-group">
                    
                  </div>
                  <div class="form-check">
                    
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Guardar</button>
                </div>
              </form>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection