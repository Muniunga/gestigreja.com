@extends('layouts.app')

@section('content')

<canvas id="graficoOfertas"></canvas>
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
@endsection