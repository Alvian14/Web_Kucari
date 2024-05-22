<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <title>Laporan</title>
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">


    <!-- tabel -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}">
    {{-- <script src="{{asset('assets/js/dropzone.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script> --}}
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light" style="background-color: #e9ecef;">
        <!-- Navbar Brand-->
        <a href="dashboard" class="logo-container">
            <img src="{{ asset('assets/img/qqq.png') }}" alt="KuCari Logo" class="logo">
        </a>
    </nav>

    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <!-- <div class="input-group"> -->
        <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" /> -->
        <!-- <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
        </div>
    </form>

    <!-- Navbar profil -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">


                        <!-- menu dashboard -->
                        <br>
                        <a class="nav-link" href="dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <!-- Menu Laporan -->
                        <a class="nav-link" href="{{ route('laporan') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                            Laporan
                        </a>
                        <!-- Melu keluar -->
                        <a class="nav-link" href="user" onclick="confirmLogout(event)">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            Keluar
                        </a>
                    </div>
                </div>
            </nav>
        </div>


        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Laporan</h1>
                    <ol class="breadcrumb mb-3">
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>

                <div class="container-fluid px-4">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Tabel -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Data Postingan
                                </div>
                                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                <div class="text-right">
                                    <!-- Button untuk membuka modal -->
                                    <button type="button" class="btn btn-primary mt-3 mr-4" data-toggle="modal"
                                        data-target="#tambahModal">Tambah</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                                        aria-labelledby="tambahModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="tambahModalLabel">Tambah Postingan</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form di dalam modal -->
                                                    <form method="POST" action="{{ route('upload.proses') }}" class="dropzone" id="formDropzone" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label font-weight-bold" for="kategori">Kategori:</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control" id="kategori" name="kategori">
                                                                    <option value="Ditemukan">Ditemukan</option>
                                                                    <option value="Kehilangan">Kehilangan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label font-weight-bold" for="deskripsi">Deskripsi:</label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label font-weight-bold" for="alamat">Alamat:</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control" id="alamat" name="alamat">
                                                                    <option value="Bagor">Bagor</option>
                                                                    <option value="Baron">Baron</option>
                                                                    <option value="Berbek">Berbek</option>
                                                                    <option value="Gondang">Gondang</option>
                                                                    <option value="Jatikalen">Jatikalen</option>
                                                                    <option value="Kertosono">Kertosono</option>
                                                                    <option value="Lengkong">Lengkong</option>
                                                                    <option value="Loceret">Loceret</option>
                                                                    <option value="Nganjuk">Nganjuk</option>
                                                                    <option value="Ngetos">Ngetos</option>
                                                                    <option value="Ngluyu">Ngluyu</option>
                                                                    <option value="Ngronggot">Ngronggot</option>
                                                                    <option value="Pace">Pace</option>
                                                                    <option value="Patianrowo">Patianrowo</option>
                                                                    <option value="Prambon">Prambon</option>
                                                                    <option value="Rejoso">Rejoso</option>
                                                                    <option value="Sawahan">Sawahan</option>
                                                                    <option value="Sukomoro">Sukomoro</option>
                                                                    <option value="Tanjunganom">Tanjunganom</option>
                                                                    <option value="Wilangan">Wilangan</option>
                                                                </select>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label font-weight-bold" for="lokasi">Lokasi Terakhir:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="lokasi" name="lokasi">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label font-weight-bold" for="tanggal">Tanggal:</label>
                                                            <div class="col-sm-9">
                                                                <input type="date" class="form-control" id="tanggal" name="tanggal_postingan">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label font-weight-bold" for="waktu">Waktu:</label>
                                                            <div class="col-sm-9">
                                                                <input type="time" class="form-control" id="waktu" name="jam_postingan">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label font-weight-bold" for="formImage">Foto Detailing <span style="color: red;">*</span></label>
                                                            <div class="col-sm-9">
                                                                <div class="dropzone">
                                                                    <input type="file" name="file" id="" value="pilih file">
                                                                    {{-- <div class="dz-message text-muted opacity-50" name="file" data-dz-message>
                                                                        <span>Drag file here to upload</span>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary" id="search-btn">Simpan</button>
                                                        </div>
                                                    </form>
                                                    <!-- end Form tambah di dalam modal -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>no</th>
                                                <th>kategori</th>
                                                <th>deskripsi</th>
                                                <th>alamat</th>
                                                <th>lokasi</th>
                                                <th>tanggal</th>
                                                <th>jam</th>
                                                <th>foto</th>
                                                <th>aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($postingan as $p)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $p->kategori }}</td>
                                                    <td>{{ $p->deskripsi }}</td>
                                                    <td>{{ $p->alamat }}</td>
                                                    <td>{{ $p->lokasi }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($p->tanggal_postingan . ' -1 year -1 month')) }}
                                                    </td>
                                                    <td>{{ date('H:i', strtotime($p->jam_postingan)) }}</td>
                                                    <td><img width="150px"
                                                            src="{{ url('/mobile/uploads/' . $p->foto_postingan) }}">
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger"
                                                                onclick="hapus('{{ $p->id_postingan }}')">Hapus</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                @if(session('alert'))
                    var alert =  {!! json_encode(session('alert')) !!};
                    Swal.fire({
                        icon: alert['status'],
                        title: alert['message'],
                        showConfirmButton: false,
                        timer: 1500 // Durasi pop-up ditampilkan (dalam milidetik)
                    });
                @endif
            </script>
            <!-- script tabel -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
            </script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
                crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
            <!-- SweetAlert 2 CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

            <!-- SweetAlert 2 JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">




            <!-- Javascript -->
            <script src="assets/js/button.js"></script>

            <!-- Scripts -->
            {{-- <script src="{{ asset('assets/js/dropzone.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.js') }}"></script> --}}
            <script>
                function hapus(idPostingan) {
    Swal.fire({
        title: 'Apakah Anda yakin ingin menghapus postingan ini?',
        text: "Anda tidak akan dapat mengembalikan data ini setelah dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            var csrfToken = "{{ csrf_token() }}"; // Dapatkan CSRF token
            var xhr = new XMLHttpRequest();
            var body = {
                id_postingan: idPostingan,
            };
            xhr.open('POST', '/upload/hapus');
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.send(JSON.stringify(body));
            xhr.onreadystatechange = function () {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil hapus data',
                            showConfirmButton: false,
                            timer: 1500 // Durasi pop-up ditampilkan (dalam milidetik)
                        }).then(() => {
                            location.reload(); // Refresh halaman setelah sukses
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal hapus data',
                            showConfirmButton: false,
                            timer: 1500 // Durasi pop-up ditampilkan (dalam milidetik)
                        });
                    }
                }
            }
        }
    });
}

            </script>
                
                
            
            
</body>

</html>
