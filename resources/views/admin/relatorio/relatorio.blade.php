<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{!empty($header_title) ? $header_title:''}}- GestIgreja</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('public/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('public/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('public/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('public/plugins/summernote/summernote-bs4.min.css') }}">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> GESTIGREJA
          <small class="float-right">RELATORIO</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    
   <!-- Paroquia -->
   <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
               <p class="lead">Paroquias Cadastradas ({{$getAllParoquia}})</p>
        <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
        <thead>
        <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Endereço</th>
                                        <th>estado</th>
                                       

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getParoquia as $value)

                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->endereco }}</td>
                                        <td>@if($value->estado==1)Ativo
                                            @else Inativo
                                            @endif
                                        </td>
                                       

                                    </tr>
                                    @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>


<!-- Membros -->
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
      <p class="lead">----------------------------------------------------------------------</p>
        <p class="lead">Membros Cadastrados ({{$getAllMembro}})</p>
        <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
        <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Idade</th>
                                        <th>Telefone</th>
                                        
                                        <th>endereço</th>


                                        <th>Paroquia</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getRecord as $value)

                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->idade }}</td>
                                        <td>{{ $value->telefone }}</td>
                                        
                                        <td>{{ $value->endereco }}</td>
                                        <td>{{ $value->paroquia }}</td>
                                       

                                    </tr>
                                    @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
        
    <!-- Oferta -->
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
          <p class="lead">----------------------------------------------------------------------</p>
        <p class="lead">Ofertas Cadastradas ({{$getAllOferta}})</p>
        <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
        <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Valor</th>
                                        <th>descricao</th>
                                        <th>Paroquia</th>
                                        <th>data</th>
                                       

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getOferta as $value)

                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->valor }}</td>
                                        <td>{{ $value->descricao }}</td>
                                        <td>{{ $value->paroquia }}</td>
                                        <td>{{ $value->data }}</td>
                                       
                                       

                                    </tr>
                                    @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>

     <!-- Dizimo -->
     <div class="row">
      
      <div class="col-6">
          <p class="lead">----------------------------------------------------------------------</p>
        <p class="lead">Dizimos Cadastrados ({{$getAllDizimo}})</p>
        <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
        <thead>
        <tr>
                                        <th>#</th>
                                        <th>Membro</th>
                                        <th>Valor</th>
                                        <th>descricao</th>
                                        <th>data</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getDizimo as $value)

                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->membro }}</td>
                                        <td>{{ $value->valor }} kz</td>
                                        <td>{{ $value->descricao }}</td>
                                        <td>{{ $value->data }}</td>
                                       
                                       

                                    </tr>
                                    @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>

    <!-- Sancoes -->
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
          <p class="lead">----------------------------------------------------------------------</p>
        <p class="lead">Sanções Cadastradas ({{$getAllSancao}})</p>
        <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
        <thead>
        <tr>
                                        <th>#</th>
                                        <th>Membro</th>
                                        <th>Motivo</th>
                                        <th>Descrição</th>
                                        <th>Data Inicio</th>
                                        <th>Data Fim</th>
                                       
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getSancao as $value)

                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->membro }}</td>
                                        <td>{{ $value->motivo }}</td>
                                        <td>{{ $value->descricao }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->dataInicio)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->dataFim)) }}</td>
                                       
                                       
                                       

                                    </tr>
                                    @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
  
        
      </div>
      <!-- /.col -->

      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  </div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('public/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('public/plugins/chart.js/Chart.js') }}"></script>
<script src="{{ url('public/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('public/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ url('public/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ url('public/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('public/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('public/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('public/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('public/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('public/dist/js/pages/dashboard.js') }}"></script>

@yield('script')
</body>
</html>