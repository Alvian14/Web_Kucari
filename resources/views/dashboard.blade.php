<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        
        <title>Dashboard</title>
        <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">


        <!-- tabel -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

        <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light" style="background-color: #e9ecef;">
                            <!-- Navbar Brand-->
                            <a href="dashboard" class="logo-container">
                                    <img src="{{ asset('assets/img/qqq.png') }}" alt="KuCari Logo" class="logo">
                                </a>
                            </nav>
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            
                            <!-- chart kehilangan -->
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header" style="background-color: #259E73; color: #fff;">
                                        <i class="fas fa-exclamation-triangle me-1"></i> <!-- Ganti ikon dengan yang melambangkan kehilangan -->
                                        Kehilangan
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <?php 
                                                $kehilanganCategory = 0;
                                                $menemukanCategory = 0;
                                                foreach($postingan as $item){
                                                    if($item['kategori'] == 'Kehilangan'){
                                                        $kehilanganCategory++;
                                                    }else{
                                                        $menemukanCategory++;
                                                    }
                                                }
                                            ?>
                                            <p>Data Kehilangan: <?php echo $kehilanganCategory; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- chart Ditemukan -->
                            <div class="col-xl-6">
                            <div class="card mb-4">
                                    <div class="card-header" style="background-color: #259E73; color: #fff;">
                                    <i class="fas fa-question-circle me-1"></i>
                                        Ditemukan
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <?php 
                                                $kehilanganCategory = 0;
                                                $menemukanCategory = 0;
                                                foreach($postingan as $item ){
                                                    if($item['kategori'] == 'Ditemukan'){
                                                        $menemukanCategory++;
                                                    }else{
                                                        $kehilanganCategory++;
                                                    }
                                                }
                                            ?>
                                            <p>Data Ditemukan: <?php echo $menemukanCategory; ?></p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Tabel -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Total Postingan
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
                                            <td>{{ date('d-m-Y', strtotime($p->tanggal_postingan . ' -1 year -1 month')) }}</td>
                                            <td>{{ date('H:i', strtotime($p->jam_postingan)) }}</td>
                                            <td><img width="150px" src="{{ url('/mobile/uploads/'.$p->foto_postingan) }}"></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <br> <br>
            </div>
        </div>

        <!-- script tabel -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <!-- SweetAlert 2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

        <!-- SweetAlert 2 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">


        <!-- Javascript -->
        <script src="assets/js/button.js"></script>

    </body>
</html>
