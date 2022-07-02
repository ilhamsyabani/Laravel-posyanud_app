@extends('layouts.app')

{{-- @section('custom_styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
@endsection --}}

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
                <div class="alert-title">Input Data Hasil</div>
            </div>
            <div class="card mb-4 col-sm-6">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-sm-10">
                            <strong></strong>
                            <p class="card-text">
                                Isi data sesui hasil yang diperoleh
                            </p>

                            {{-- <div class="form-group mt-3">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name">
                                </div>
                                @error('name')
                                <div class="form-group custom-control">
                                    <label class="">{{ $message }}</label>
                                </div>
                                @enderror --}}
                            <form action="{{ route('reports.store') }}" method="post">
                                @csrf
                                <div class="form-group mt-3">
                                    <label for="name">Nama</label>
                                    <input type="text" id="search" class="form-control @error('name') is-invalid @enderror"
                                        name="name">
                                </div>
                                @error('name')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="berat">Berat</label>
                                    <input type="text" class="form-control @error('berat') is-invalid @enderror"
                                        name="berat">
                                </div>
                                @error('berat')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="tinggi">Tinggi</label>
                                    <input type="text" class="form-control @error('tinggi') is-invalid @enderror"
                                        name="tinggi">
                                </div>
                                @error('tinggi')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for='lingkar_lengan'>Lingkar Lengan</label>
                                    <input type="text" class="form-control @error('lingkar_lengan') is-invalid @enderror"
                                        name='lingkar_lengan'>
                                </div>
                                @error('lingkar_lengan')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="lingkar_perut">Lingkar Perut</label>
                                    <input type="text" class="form-control @error('lingkar_perut') is-invalid @enderror"
                                        name="lingkar_perut">
                                </div>
                                @error('lingkar_perut')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="tekanan_darah">Tekanan Darah</label>
                                    <input type="text" class="form-control @error('tekanan_darah') is-invalid @enderror"
                                        name="tekanan_darah">
                                </div>
                                @error('tekanan_darah')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="hb">HB</label>
                                    <input type="text" class="form-control @error('hb') is-invalid @enderror" name="hb">
                                </div>
                                @error('hb')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="gula_darah">Gula Darah</label>
                                    <input type="text" class="form-control @error('gula_darah') is-invalid @enderror"
                                        name="gula_darah">
                                </div>
                                @error('gula_darah')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="from-group mt-3">
                                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
        var route = "{{ url('search') }}";

        $('#search').typeahead({
            source: function(query, process) {
                return $.get(route, {
                    query: query
                }, function(data) {
                    return process(data);
                });
            }
        });
    </script>
@endsection
