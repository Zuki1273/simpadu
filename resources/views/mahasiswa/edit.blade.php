@extends('template.main')
@section('content')
<!--begin::App Main-->
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Data Mahasiswa</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="/mahasiswa">Data Mahasiswa</a></li>
                  <li class="breadcrumb-item"><a href="/prodi">Program Studi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Edit Mahasiswa</h3></div>
                  <!-- /.card-header -->
                  <form action="{{ url('mahasiswa/'.$mahasiswa->nim) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid @enderror" 
                            value="{{ $mahasiswa->nim }}" disabled>
                              @error('nim')
                               <div class="invalid-feedback">
                                  {{ $message }}
                               </div>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                              @error('password')
                               <div class="invalid-feedback">
                                  {{ $message }}
                               </div>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" 
                            value="{{ $mahasiswa->nama }}">
                              @error('nama')
                               <div class="invalid-feedback">
                                  {{ $message }}
                               </div>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" 
                            value="{{ $mahasiswa->tanggal_lahir }}">
                              @error('tanggal_lahir')
                               <div class="invalid-feedback">
                                  {{ $message }}
                               </div>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="nomor_telepon" class="form-label">No Telepon</label>
                            <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" 
                            value="{{ $mahasiswa->nomor_telepon }}">
                              @error('nomor_telepon')
                               <div class="invalid-feedback">
                                  {{ $message }}
                               </div>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" 
                            value="{{ $mahasiswa->email }}">
                              @error('email')
                               <div class="invalid-feedback">
                                  {{ $message }}
                               </div>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="id_prodi" class="form-label">Program Studi</label>
                            <select class="form-select" id="id_prodi" name="id_prodi">
                                @foreach ($prodi as $p)
                                    <option value="{{ $p->id }}"
                                        {{ $p->id == $mahasiswa->id_prodi ? 'SELECTED' : ''}}>
                                        {{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                      <div class="form-group">
                        <label class="form-label" for="foto">Upload Foto</label>
                            @if($mahasiswa->foto)
                                <div class="mb-2">
                                  <img src="{{ asset('storage/' . $mahasiswa->foto) }}" alt="Foto Mahasiswa" width="120" class="img-thumbnail">
                                </div>
                            @endif
                        <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror">
                              @error('foto')
                               <div class="invalid-feedback">
                                  {{ $message }}
                               </div>
                              @enderror
                      </div>
                    </div>
                        <div class="card-footer">
                        <a href="{{ url("mahasiswa") }}" class="btn btn-warning">kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </form>                  
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <!-- /.col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
</main>
<!--end::App Main-->
@endsection
