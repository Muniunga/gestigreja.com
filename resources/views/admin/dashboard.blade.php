@extends('layouts.app')

@section('content')



<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3>{{$getParoquia}}</h3>

                <p>Total de Paroquias</p>
              </div>
              <div class="icon">
                <i class="fas fa-lg fa-regular fa-landmark fa-fw"></i>
              </div>
              <a href="{{url('admin/paroquia/lista') }}" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>{{$getMembro}}</h3>

                <p>Total de Membros</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a  href="{{url('admin/membro/lista') }}" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$getSancao}}</h3>

                <p>Total de Sanções</p>
              </div>
              <div class="icon">
                <i class="fas fa-lg fa-exclamation-circle fa-fw"></i>
              </div>
              <a  href="{{url('admin/sancao/lista') }}" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
             <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ofertas </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                <canvas id="graficoOfertas"style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DONUT CHART -->
            
            <!-- /.card -->

            <!-- PIE CHART -->
           
            <!-- /.card -->

          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Dizimos</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                <canvas id="graficoDizimos" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- BAR CHART -->
            
            <!-- /.card -->

            <!-- STACKED BAR CHART -->
           
            <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section><!-- Left col -->
    
    <a href="{{url('admin/relatorio/relatorio') }}" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> Relatotio</a>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>

@endsection

@section('script')
<script>
    
        var ctx = document.getElementById("graficoOfertas").getContext("2d");

        var chart = new Chart(ctx, {
            type: "line",
            data: {
                labels: {!! $datasOfertas !!}, // Array de datas das ofertas
                datasets: [{
                    label: "Ofertas por Data",
                    data: {!! $valoresOfertas !!}, // Array de valores das ofertas
                    backgroundColor: "rgba(75, 192, 192, 0.6)",
                    borderColor: "rgba(75, 192, 192, 1)",
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


        <script>
        var ctx = document.getElementById("graficoDizimos").getContext("2d");

        var chart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: {!! $datasDizimos !!}, // Array de datas das graficoDizimos
                datasets: [{
                    label: "Dizimos",
                    data: {!! $valoresDizimos !!}, // Array de valores das graficoDizimos
                    backgroundColor: "rgba(75, 192, 192, 0.6)",
                    borderColor: "rgba(75, 192, 192, 1)",
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
