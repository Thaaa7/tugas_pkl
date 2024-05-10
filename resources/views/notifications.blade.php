@include('layouts.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style> .search-container {
     display: flex;
     align-items: center;
     border: 1px solid #ccc;
     border-radius: 8px;
     padding: 5px;
     width: 250px;
     margin-left: auto;
}
 .search-input {
     border: none;
     outline: none;
     padding: 8px;
     width: 100%;
}
 .search-button {
     background: none;
     border: none;
     cursor: pointer;
     padding: 5px;
     color: #333;
}
 .search-button .fa {
     font-size: 16px;
}
 .pagination-container {
     display: flex;
     justify-content: center;
     align-items: center;
     padding: 20px;
}
 .pagination {
     display: inline-block;
}
 .pagination a {
     color: black;
     float: left;
     padding: 8px 16px;
     text-decoration: none;
     transition: background-color .3s;
     margin: 0 4px;
     margin-top: 200px;
}
 .pagination a.active {
     background-color: #e7e7e7;
     color: black;
}
 .pagination a:hover:not(.active) {
    background-color: #ddd;
}
 .page-size-selector {
     margin-left: 20px;
     margin-top: 200px;
}
 .uniq-page {
     width: 100%;
     height: 30px;
     border: 1px solid #ccc;
     border-radius: 4px;
}
 table{
     margin-top: 100px;
}
 .entries-info {
     text-align: center;
     margin-top: 20px;
     margin-bottom: 20px;
}
 </style>
<body>
  <div class="wrapper ">
    @include('layouts.sidebar')
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <!-- End Navbar -->

      <div class="latar">
        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
        <div class="card card-large">
          
          <div class="card-header">
                <div class="text-header"><a href="#">Application</a> > Dashboard</div>
                <div class="text-judul">
                  <strong>Data Pengajuan Usul Kegiatan</strong>
                </div>
              </div>
          <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <div class="navbar-toggle">
                  <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>
                  <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                      </div>
                    </div>
                  </div>
                </form>
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-bell"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Some Actions</span>
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
              <div class="header-area text-left">
                <button class="btn btn-primary">Status Pendaftaran Kegiatan</button>
                <button class="btn btn-plus" style="color: black;"><i class="fa fa-plus"></i></button>
              </div>

              <!-- Search Bar -->
              <div class="search-container" style="margin-top: -70px;">
                <input type="text" placeholder="Search..." class="search-input">
                <button class="search-button">
                  <i class="fa fa-search"></i>
                </button>
              </div>
              <div class="entries-info">
                Showing 1 to 10 of 150 entries
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th><strong>No</strong></th>
                    <th><strong>Nama Kegiatan</strong></th>
                    <th><strong>Rumpun Kegiatan</strong></th>
                    <th><strong>Status </strong></th>
                    <th><strong>Jadwal</strong></th>
                    <th><strong>Actions</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-light">
                    <td>1</td>
                    <td>Pelatihan X Akt XI Tahun 2023 Klasikal</td>
                    <td>Pendidikan</td>
                    <td><span class="status">Berhasil Terdaftar</span></td>
                    <td><span class="status">Sudah Terlaksana</span></td>
                    <td><a href="#">Downloaad Sertifikat</a></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr class="table-light">
                    <td>2</td>
                    <td>Pelatihan X Akt XI Tahun 2023 Klasikal</td>
                    <td>Pendidikan</td>
                    <td><span class="status">Berhasil Terdaftar</span></td>
                    <td><span class="statuss"> Kegiatan: 2 hari</span></td>
                    <td><span class="stk">Downloaad Sertifikat</span></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr class="table-light">
                    <td>3</td>
                    <td>Pelatihan X Akt XI Tahun 2023 Klasikal</td>
                    <td>Pendidikan</td>
                    <td><span class="statuss">Menunggu Verifikasi Berkas</span></td>
                    <td> - </td>
                    <td><span class="stk">Downloaad Sertifikat</span></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr class="table-light">
                    <td>4</td>
                    <td>Pelatihan X Akt XI Tahun 2023 Klasikal</td>
                    <td>Pendidikan</td>
                    <td><span class="statusss">Berkas Tidak Lengkap</span></td>
                    <td> - </td>
                    <td><span class="stk">Downloaad Sertifikat</span></td>
                  </tr>
                </tbody>
              </table>
              <div class="pagination-container">
                <div class="pagination">
                  <a href="#">&laquo;&laquo;</a>
                  <a href="#">&laquo;</a>
                  <a href="#">...</a>
                  <a href="#">1</a>
                  <a href="#" class="active">2</a>
                  <a href="#">3</a>
                  <a href="#">...</a>
                  <a href="#">&raquo;</a>
                  <a href="#">&raquo;&raquo;</a>
                </div>
                <div class="page-size-selector">
                  <select class="uniq-page">
                    <option>10</option>
                    <option>20</option>
                    <option>50</option>
                    <option>100</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--   Core JS Files   -->
    @include('layouts.script')
</body>

</html>