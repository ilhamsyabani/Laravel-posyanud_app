@extends('layouts.app')

@section('custom_styles')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
@endsection


@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h2 class="page-title">
                {{ __('Users') }}
            </h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <div class="alert alert-info">
                <div class="alert-title">Sample table page</div>
            </div>

            <div class="card">
                <figure class="highcharts-figure">
                    <div id="chartHasil"></div>
                    <p class="highcharts-description">

                    </p>
                </figure>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('custom_scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('chartHasil', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Jumlah Peserta Posyandu remaja desa Bringo'
            },
            subtitle: {
                text: 'Source: data posyandu desa'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'April', 'Mei', 'Juni', 'Juli'],
                tickmarkPlacement: 'on',
                title: {
                    enabled: false
                }
            },
            yAxis: {
                title: {
                    text: 'Billions'
                },
                labels: {
                    formatter: function() {
                        return this.value / 1000;
                    }
                }
            },
            tooltip: {
                split: true,
                valueSuffix: 'orang'
            },
            plotOptions: {
                area: {
                    stacking: 'normal',
                    lineColor: '#666666',
                    lineWidth: 1,
                    marker: {
                        lineWidth: 1,
                        lineColor: '#666666'
                    }
                }
            },
            series: [{
                //     name: 'Asia',
                //     data: [502, 635, 809, 947, 1402, 3634, 5268]
                // }, {
                //     name: 'Africa',
                //     data: [106, 107, 111, 133, 221, 767, 1766]
                // }, {
                //     name: 'Europe',
                //     data: [163, 203, 276, 408, 547, 729, 628]
                // }, {
                name: 'laki-laki',
                data: [1, 3, 4, 16, 13, 18, 12]
            }, {
                name: 'Perempuan',
                data: [2, 2, 2, 6, 13, 12, 16]
            }]
        });
    </script>
@endsection
