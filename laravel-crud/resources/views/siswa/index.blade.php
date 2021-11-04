@extends('layout.master')

@section('content')
            @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{ session('sukses') }}
                </div>
            @endif
            <div class="row">
                <div class="col 6">
                    <h1>Ini Data Siswa</h1>
                </div>
                <div class="col 6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Siswa
                </button>
                </div>
                <table class="table table-hover">
                <tr>
                    <th>NAMA DEPAN</th>
                    <th>NAMA BELAKANG</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>ALAMAT</th>
                    <th>MENU</th>
                </tr>
                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{ $siswa->nama_depan }}</td>
                    <td>{{ $siswa->nama_belakang }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ $siswa->agama }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td><a href="/siswa/{{$siswa->id}}/edit"class="btn btn-warning btn-sm">Edit</a></td>
                    <td><a href="/siswa/{{$siswa->id}}/delete"class="btn btn-warning btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a></td>
                </tr>
                @endforeach
            </table>
            </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/siswa/create" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                        <input name="nama_depan" type="text" class="form-control" id="floatingInput" aria-describedby="emailHelp" placeholder="Nama Depan">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                    </div>
                    <div class="mb-3">
                    <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Agama</label>
                        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                    </div>
                    <div class="mb-3">
                        <label for="floatingTextarea" class="form-label">Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap anda" id="floatingTextarea" style="height: 100px"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
                </form>    
            </div>
        </div>
        </div>
    </div>
@endsection