@extends('layouts.app')

@section('custom_styles')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
@endsection

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-between">

                <div class="alert alert-success">
                    <div class="alert-title">
                        {{ __('Welcome') }} {{ auth()->user()->name ?? null }}
                    </div>
                    <div class="text-muted">
                        {{ __('You are logged in!') }}

                    </div>
                </div>

                @if ($data)
                    <div class="col-sm-3 my-2 p-1">
                        <div class="card">
                            <figure class="highcharts-figure">
                                <div id="gender"></div>
                                <p class="highcharts-description">

                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="col-sm-3 my-2 p-1">
                        <div class="card">
                            <figure class="highcharts-figure">
                                <div id="Religion"></div>
                                <p class="highcharts-description">

                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-3 my-2 p-1">
                        <div class="card">
                            <figure class="highcharts-figure">
                                <div id="Pendidikan"></div>
                                <p class="highcharts-description">

                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="col-sm-3 my-2 p-1">
                        <div class="card">
                            <figure class="highcharts-figure">
                                <div id="Golongan Darah"></div>
                                <p class="highcharts-description">

                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="col-sm-3 my-2 p-1">
                        <div class="card">
                            <figure class="highcharts-figure">
                                <div id="Merokok"></div>
                                <p class="highcharts-description">

                                </p>
                            </figure>

                            <figure class="highcharts-figure">
                                <div id="Minuman"></div>
                                <p class="highcharts-description">

                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="col-sm-4 my-2 p-1">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Riwayat Penyakit</h3>
                            </div>
                            <table class="table card-table table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Daftar Sakir pribadi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        @if ($d->riwaya_penyakit)
                                            <tr>
                                                <td>{{ $d->riwaya_penyakit }}</td>
                                            </tr>
                                        @else
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-5 my-2 p-1">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Riwayat keturunan</h3>
                            </div>
                            <table class="table card-table table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Daftar Sakit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        @if ($d->riwaya_keluarga)
                                            <tr>
                                                <td>{{ $d->riwaya_keluarga }}</td>
                                            </tr>
                                        @else
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                @endif
            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        // Create the chart
        // Build the chart gender
        Highcharts.chart('gender', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Persentase Gender'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Gender',
                colorByPoint: true,
                data: [{
                    name: 'Laki-laki',
                    y: {{ ($data->where('gender', 'laki-laki')->count() / $data->count()) * 100 }},
                    sliced: true,
                    selected: true
                }, {
                    name: 'Perempuan',
                    y: {{ ($data->where('gender', 'perempuan')->count() / $data->count()) * 100 }},
                }, {
                    name: 'Other',
                    y: {{ ($data->where('gender', 'lainya')->count() / $data->count()) * 100 }},
                }]
            }]
        });

        // Build the chart Religion
        Highcharts.chart('Religion', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Persentase Kepercayaan'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Religion',
                colorByPoint: true,
                data: [{
                    name: "Islam",
                    y: {{ ($data->where('agama', 'Islam')->count() / $data->count()) * 100 }},
                    sliced: true,
                    selected: true
                }, {
                    name: "kristen",
                    y: {{ ($data->where('agama', 'Kristen')->count() / $data->count()) * 100 }},
                }, {
                    name: "Katolik",
                    y: {{ ($data->where('agama', 'Katolik')->count() / $data->count()) * 100 }},

                }, {
                    name: "Hindu",
                    y: {{ ($data->where('agama', 'Hindu')->count() / $data->count()) * 100 }},

                }, {
                    name: "Budha",
                    y: {{ ($data->where('agama', 'Budha')->count() / $data->count()) * 100 }},

                }, {
                    name: "Other",
                    y: {{ ($data->where('agama', 'Lainya')->count() / $data->count()) * 100 }},
                }]
            }]
        });

        // Build the chart Pendidikan
        Highcharts.chart('Pendidikan', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Persentase Pendidikan'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Pendidikan',
                colorByPoint: true,
                data: [{
                    name: "SMA",
                    y: {{ ($data->where('pendidikan', 'SMA')->count() / $data->count()) * 100 }},
                    sliced: true,
                    selected: true
                }, {
                    name: "SMP",
                    y: {{ ($data->where('pendidikan', 'SMP')->count() / $data->count()) * 100 }},
                }, {
                    name: "SD",
                    y: {{ ($data->where('pendidikan', 'SD')->count() / $data->count()) * 100 }},

                }, {
                    name: "lainya",
                    y: {{ ($data->where('pendidikan', 'other')->count() / $data->count()) * 100 }},

                }]
            }]
        });

        // Build the chart Pendidikan
        Highcharts.chart('Golongan Darah', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Persentase Golongan Darah'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Pendidikan',
                colorByPoint: true,
                data: [{
                    name: "A",
                    y: {{ ($data->where('darah', 'A')->count() / $data->count()) * 100 }},
                    sliced: true,
                    selected: true
                }, {
                    name: "B",
                    y: {{ ($data->where('darah', 'B')->count() / $data->count()) * 100 }},
                }, {
                    name: "AB",
                    y: {{ ($data->where('darah', 'AB')->count() / $data->count()) * 100 }},

                }, {
                    name: "O",
                    y: {{ ($data->where('darah', 'O')->count() / $data->count()) * 100 }},

                }]
            }]
        });

        // Build the chart Merokok
        Highcharts.chart('Merokok', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Persentase Merokok'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'rokok',
                colorByPoint: true,
                data: [{
                    name: "Mengkonsumsi Rokok",
                    y: {{ ($data->where('rokok', 'yes')->count() / $data->count()) * 100 }},
                    sliced: true,
                    selected: true
                }, {
                    name: "Tidak Meroko",
                    y: {{ ($data->where('rokok', 'no')->count() / $data->count()) * 100 }},

                }]
            }]
        });

        // Build the chart Minuman
        Highcharts.chart('Minuman', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Persentase Merokok'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Miras',
                colorByPoint: true,
                data: [{
                    name: "Mengkonsumsi Miras",
                    y: {{ ($data->where('miras', 'yes')->count() / $data->count()) * 100 }},
                    sliced: true,
                    selected: true
                }, {
                    name: "Tidak Mengkonsumsi Miras",
                    y: {{ ($data->where('miras', 'no')->count() / $data->count()) * 100 }},

                }]
            }]
        });
    </script>
@endsection
