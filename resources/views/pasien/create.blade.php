@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Tambah Data Pasien</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/pasien/add">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Kode Pasien</label>
                                <input class="form-control" id="kode_pasien" name="kode_pasien"
                                    value="{{ old('kode_pasien') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Pasien</label>
                                <input class="form-control" id="nama_pasien"
                                    name="nama_pasien"value="{{ old('nama_pasien') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="birthday" name="birthday"
                                    value="{{ old('birthday') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Diagnosa</label>
                                <select class="form-select" name="dokter_id" id="dokter_id">
                                    @foreach ($dokter as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->keahlian }}</option>
                                    @endforeach
                                </select>
                                {{-- <input doctor="form-control"id="kode_pasien" name="kode_pasien" value="{{ $siswa->kelas->kelas }}"> --}}
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat" name="alamat"value="{{ old('alamat') }}">
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/pasien/all">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
