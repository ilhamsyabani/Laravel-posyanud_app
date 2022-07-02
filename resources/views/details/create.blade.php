@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h3 class="page-title">
                {{ __('About Page') }}
            </h3>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <form action="{{ route('details.store') }}" method="POST">
                @csrf
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col">
                                <strong>Informasi Personal</strong>
                                <p class="card-text">
                                    Isi data sesui data pribadi Anda yang tercatat dalam kartu tanda penduduk (KTP)
                                </p>
                            </div>
                            <div class="col">
                                {{-- <form action="{{ route('details.simpan') }}" method="POST"> --}}
                                {{-- @csrf --}}

                                {{-- <div class="form-group mt-3">
                                    <input type="hidden" class="form-control @error('alamat') is-invalid @enderror"
                                        name="user_id" value="{{ auth()->user()->id ?? null }}">
                                </div> --}}

                                <div class="form-group mt-3">
                                    <label for="nama">Nama</label>
                                    <input type="nama" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama" value="{{ auth()->user()->name ?? null }}">
                                    <small id="nikHelp" class="form-text text-muted">Isi Nama sesuai yang tertera dalam
                                        KTP</small>
                                </div>
                                @error('nama')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                        name="NIK" id="nik" aria-describedby="niklHelp" placeholder="nik">
                                    <small id="nikHelp" class="form-text text-muted">Isi nomor Penduduk yang tertera dalam
                                        KTP</small>
                                </div>
                                @error('nik')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        name="alamat">
                                </div>
                                @error('alamat')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="no_hp">no_hp</label>
                                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                        name="no_hp">
                                </div>
                                @error('no_hp')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="darah">Golongan Darah</label>
                                    <select class="form-control" id="darah" name="darah">
                                        <option value="O">O</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                    </select>
                                </div>
                                @error('agama')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror


                                <div class="form-group mt-3">
                                    <label for="agama">Agama</label>
                                    <select class="form-control" id="agama" name="agama">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Budha">Lainya</option>
                                    </select>
                                </div>
                                @error('agama')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror


                                <div class="form-group mt-3">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                @error('gender')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror


                                <div class="form-group mt-3">
                                    <label for="pendidikan">Pendidikan</label>
                                    <select class="form-control" id="pendidikan" name="pendidikan">
                                        <option value="SMA">SMA/MA/SMK</option>
                                        <option value="SMP">SMP/MTS</option>
                                        <option value="SD">SD/MI</option>
                                    </select>
                                </div>
                                @error('pendidikan')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror
                                {{-- <div class="">
                                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                </div> --}}
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col">
                                <strong>Informasi Personal</strong>
                                <p class="card-text">
                                    Isi data sesui data pribadi Anda yang tercatat dalam kartu tanda penduduk (KTP)
                                </p>
                            </div>
                            <div class="col">

                                <div class="form-group mt-3">
                                    <label for="ayah">ayah</label>
                                    <input type="text" class="form-control @error('ayah') is-invalid @enderror"
                                        name="ayah" id=" ayah" placeholder="ayah">
                                </div>
                                @error('ayah')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="ibu">ibu</label>
                                    <input type="text" class="form-control @error('ibu') is-invalid @enderror"
                                        name="ibu" id=" ibu" placeholder="ibu">
                                </div>
                                @error('ibu')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror


                                <div class="form-group mt-3">
                                    <label for="riwaya_penyakit">riwayat_penyakit</label>
                                    <input type="text"
                                        class="form-control @error('riwaya_penyakit') is-invalid @enderror"
                                        name="riwaya_penyakit">
                                </div>
                                @error('riwaya_penyakit')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <label for="riwaya_keluarga">riwayat_keluarga</label>
                                    <input type="text"
                                        class="form-control @error('riwaya_keluarga') is-invalid @enderror"
                                        name="riwaya_keluarga" id="riwaya_keluarga" placeholder="riwayat_keluarga">
                                </div>
                                @error('riwaya_keluarga')
                                    <div class="form-group custom-control">
                                        <label class="">{{ $message }}</label>
                                    </div>
                                @enderror

                                {{-- <div class="form-group">
                            <label for="var">var</label>
                            <input type="var" class="form-control @error('var') is-invalid @enderror" " id="
                                var" placeholder="var">
                        </div>
                        @error('var')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                        @enderror --}}

                            </div>
                        </div>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col">
                                <strong>Kebisaan Kurang Baik</strong>

                            </div>
                            <div class="col">
                                <p class="card-text">
                                    Isi data sesui data pribadi Anda yang tercatat dalam kartu tanda penduduk (KTP)
                                </p>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address" name="merokok"
                                        value="yes">
                                    <label class="custom-control-label" for="same-address">Merokok</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address" name="miras"
                                        value="">
                                    <label class="custom-control-label" for="same-address">Minum Minuman Keras</label>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="">
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
