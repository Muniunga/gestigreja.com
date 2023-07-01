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
                <h3 class="card-title"> Adicionar Dizimo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label>Valor</label>
                    <input type="text" class="form-control" name="valor" value="{{ old('valor') }}"  required placeholder="Adicionar uma descrição">
                  </div>
                  <div class="form-group">
                    <label>Descricao</label>
                    <input type="text" class="form-control" name="descricao" value="{{ old('descricao') }}"  required placeholder="Adicionar uma descrição">
                  </div>
                  
                  <div class="form-group">
                    <label>Membro </label>
                    <select  name="membro" class="form-control">
                        @foreach($getMembro as $value)
                        <option value="{{$value->id}}"> {{$value->name}}</option>
                        @endforeach
                        
                    </select>
                   
                  </div>
                  
                  
                  <div class="form-group">
                    <label>data </label>
                    <input type="date" class="form-control" name="data" value="{{ old('data') }}"  required placeholder="Adicionar Nome da Paroquia">
                  </div>
                 


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Adicionar</button>
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
