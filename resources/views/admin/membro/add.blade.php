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
                            <h3 class="card-title"> Adicionar</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nome completo">
                                </div>
                                <div class="form-group">
                                    <label>Genero</label>

                                    <select class="form-control" name="genero">
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Paroquia</label>

                                    <select class="form-control" name="paroquia">
                                    <option value="1">Bom Deus</option>
                       
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="text" class="form-control" name="telefone" placeholder="Telefone">
                                </div>
                                <div class="form-group">
                                    <label>Idade</label>
                                    <input type="text" class="form-control" name="idade" placeholder="Idade">
                                </div>
                                <div class="form-group">
                                    <label>Endereço</label>

                                    <select class="form-control" name="endereco">
                                    <option value="1">Luanda</option>
                                    <option value="2">Benguela</option>
                                    </select>
                                </div>
                               <!-- <div class="form-group">
                    <label for="exampleInputFile">Fotografia</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Escolher imagem</label>
                      </div>
                      
                    </div>
                  </div> -->


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