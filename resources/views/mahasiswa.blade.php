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
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
                  <li class="breadcrumb-item"><a href="prodi.php">Program Studi</a></li>
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
                  <div class="card-header"><h3 class="card-title">Data Mahasiswa</h3>
                    <div class="card-tools">
                    <a href="tambahmahasiswa.php" class="btn btn-primary">Tambah</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Prodi</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($mahasiswa as $z)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $z->nim }}</td>
                            <td>{{ $z->nama }}</td>
                            <td>{{ $z->tanggal_lahir }}</td>
                            <td>{{ $z->nomor_telepon }}</td>
                            <td>{{ $z->email }}</td>
                            <td>{{ $z->prodi->nama }}</td>
                            <td><a href="deletemahasiswa.php?nim={{ $z->nim }}"
                            onclick="return confirm('Yakin ingin hapus?')"
                            class="btn btn-danger">Delete</a> <a 
                            href="editmahasiswa.php?nim={{ $z->nim }}"
                            class="btn btn-warning">Edit</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
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
