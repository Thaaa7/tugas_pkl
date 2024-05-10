@include('layouts.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style> .search-container {
     display: flex;
     align-items: center;
     border: 1px solid #ccc;
     border-radius: 8px;
     padding: 5px;
     width: 250px;
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
          <section class="user-info">
            <img src="./assets/img/mike.jpg" >
            <div class="user-info1">
              <h2>Ida Bagus Agung Indra Putra Pidada</h2>
              <p>Peserta</p>
            </div>
            <div class="contact">
            <p><strong>Contact Person</strong></p>
            <div class="wrapper">
              <div class="1">
              <input type="checkbox" id="check"><label for="check">Contact Person</label>
              </div>
              <div class="2">
              <input type="checkbox" id="check"><label for="check">Contact Person</label>
              </div>
              <div class="3">
              <input type="checkbox" id="check"><label for="check">Contact Person</label>
            </div>
            </div>
            </div>
            <div class="JP">
            <p>Total JP</p>
            <td><strong><h3>15</h3></strong></td>
            </div>
          </section>
          <div class="tahun">
            <h6>Tahun Pelaksanaan</h6>
            <p>2023</p>
          </div>
          <main>
          <section class="user-navigation">
            <h2>Profil Biodata</h2>
            <div class="form-groups">
              <label for="TanggalPelaksanaan">Masukkan NIP</label>
              <input type="text" class="form-control" id="NIP">
            </div>
            <div class="form-groups">
              <label for="TanggalPelaksanaan">Masukkan Nama</label>
              <input type="text" class="form-control" id="Nama">
            </div>
            <div class="form-groups">
              <label for="TanggalPelaksanaan">Masukkan Jenis Kelamin</label>
              <input type="text" class="form-control" id="Jeniskelamin">
            </div>
            <div class="form-groups">
              <label for="TanggalPelaksanaan">Masukkan Tempat/Tanggal Lahir</label>
              <input type="text" class="form-control" id="TanggalLahir">
            </div>
            <div class="form-groups">
              <label for="TanggalPelaksanaan">Masukkan Agama</label>
              <input type="text" class="form-control" id="Agama">
            </div>
            <div class="form-groups">
              <label for="TanggalPelaksanaan">Masukkan Nomor KTP</label>
              <input type="text" class="form-control" id="KTP">
            </div>
            <div class="form-groups">
              <label for="TanggalPelaksanaan">Masukkan Pangkat/Golongan</label>
              <input type="text" class="form-control" id="Pangkat">
            </div>
            <div class="form-groups">
              <label for="TanggalPelaksanaan">Masukkan Nomor HP</label>
              <input type="text" class="form-control" id="NOHP">
            </div>
            <div class="form-groups">
              <label for="TanggalPelaksanaan">Masukka Email</label>
              <input type="text" class="form-control" id="Email">
            </div>
            <div class="form-groups1">
              <button type="submit" class="btn btn-primary">Edit Biodata</button>
            </div>
            </section>
            <div class="grups">
            <section class="edit-profile1">
                <h5>Total JP Tahun 2023</h5>
                <h3><strong>15</strong></h3>
                <p><span class="statusss">Tidak Profesional</span></p>
            </section>
          </div>
        </main>
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