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
                    <i class="">ID #</i> {{ $getSingle->id }}
                   
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                                    <address>
                    <strong> Nome: </strong>{{ $getSingle->name }}<br>
                    <strong> idade: </strong>{{ $getSingle->idade }}<br>
                    <strong> telefone: </strong>{{ $getSingle->telefone }}<br>
                    
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                  <address>
                  <strong> Paroquia: </strong>{{ $getSingle->paroquia }}<br>
                  <strong> endereco: </strong>{{ $getSingle->endereco }}<br>
                    
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                </div>
                <!-- /.col -->
                <a href="{{ url('admin/membro/edit/'. $getSingle->id) }}" class="btn btn-primary">editar</a>
                 <a href="{{ url('admin/membro/delete/'. $getSingle->id) }}" class="btn btn-danger">apagar</a>
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
          <div class="col-md">
          
              <a href="{{ url('admin/sancao/add/') }}" class="btn btn-primary"><i class="fas fa-lg fa-exclamation-circle fa-fw"></i>Sancionar</a>
              </div>
                 
          
          <div class="col-md">
              
          <a href="{{ url('admin/dizimo/add/') }}" class="btn btn-primary"><i class="fa fa-dollar" aria-hidden="true"></i>Dizimo</a>
                
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