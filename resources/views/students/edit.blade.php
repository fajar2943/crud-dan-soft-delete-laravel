@extends('layout/main')
 
@section('title', 'Form Ubah Data Mahasiswa')

@section('container') 
<div class="container">
   <div class="row">
       <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

            <form method="post" action="/students/{{ $student->id }}">
                @method('patch')
              
                @csrf

                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                   placeholder="Masukan Nama" name="nama" value="{{ $student->nama }}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror  
                </div>

                <div class="form-group">
                  <label for="nim">Nim</label>
                  <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                   placeholder="Masukan Nim" name="nim" value="{{ $student->nim }}">
                    @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                   placeholder="Masukan Email" name="email" value="{{ $student->email }}">
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                   placeholder="Masukan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                   @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Ubah Data!</button>

            </form>
       
       </div>    
   </div>    
</div>
@endsection