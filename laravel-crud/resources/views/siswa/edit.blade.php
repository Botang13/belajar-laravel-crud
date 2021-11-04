@extends('layout.master')

@section('content')
            <h1>Edit Data Siswa</h1>
            @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{ session('sukses') }}
                </div>
            @endif
            <div class="row">
                <form action="/siswa/{{ $siswa->id }}/update" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                        <input name="nama_depan" type="text" class="form-control" id="floatingInput" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{ $siswa->nama_depan }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{ $siswa->nama_belakang }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pilih Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="L" @if ($siswa->jenis_kelamin == 'L')selected @endif>Laki-laki</option>
                        <option value="P" @if ($siswa->jenis_kelamin == 'P')selected @endif>Perempuan</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Agama</label>
                        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{ $siswa->agama }}">
                    </div>
                    <div class="mb-3">
                        <label for="floatingTextarea" class="form-label">Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap anda" id="floatingTextarea" style="height: 100px">{{ $siswa->alamat }}</textarea>
                    </div>
                <button type="submit" class="btn btn-warning" onclick="return confirm('Data sudah benar?')">Update</button> 
                </form>                   
            </div>
@endsection