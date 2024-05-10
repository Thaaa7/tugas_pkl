@include('layouts.header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
<style> .form-container {
     background: white;
     padding: 20px;
     border-radius: 8px;
     box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
 .form-group {
     margin-bottom: 15px;
}
 .form-label {
     font-weight: bold;
}
 .editor {
     border: 1px solid #ccc;
     border-radius: 4px;
     padding: 10px;
}
 .checkbox-group {
     border: 1px solid #ccc;
     padding: 10px;
     border-radius: 4px;
     overflow-y: auto;
     height: 150px;
}
 .checkbox-group label {
     display: block;
}
 .grid-container {
     display: grid;
     grid-template-columns: repeat(2, 1fr);
     gap: 20px;
}
 .form-group {
     margin-bottom: 1rem;
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
                <div class="text-judul1">
                  <strong>Detail Pelatihan</strong>
                  <div class="ajukan"><strong>Ajukan Konversi</strong></div>
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
          <div class="konversi">
            <div class="card3">
            <div class="card-body1">
              <div class="form-result">
                <div class="form-groupp">
                    <strong>Rumpun Kegiatan</strong>
                    <p>Pendidikan</p>
                </div>
                <div class="form-groupp">
                    <strong>Bentuk Kegiatan</strong>
                    <p>Klasikal</p>
                </div>
                <div class="form-groupp">
                    <strong>Jenis Kegiatan</strong>
                    <p>Pelatihan Manajerial</p>
                </div>
                <div class="form-groupp">
                    <strong>Nama Kegiatan</strong>
                    <p>Pelatihan X Akt XI Tahun 2023</p>
                </div>
                <div class="form-groupp">
                    <strong>Penyelenggara</strong>
                    <p>BKPSDM</p>
                </div>
                <div class="form-groupp">
                    <strong>Tanggal Periode Pelaksanaan Kegiatan</strong>
                    <p>12 Jul, 2023 - 12 Aug, 2023</p>
                </div>
                <div class="form-groupp">
                    <strong>Tempat Diselenggarakan (Kabupaten)</strong>
                    <p>Kota Denpasar</p>
                </div>
                <div class="form-groupp">
                    <strong>Jumlah JP</strong>
                    <p>20</p>
                </div>
                <div class="form-groupp">
                    <strong>Dokumen Sertifikat</strong>
                    <p><a href="#">Klik disini</a></p>
                </div>
                <div class="form-groups3">
                  <button type="submit" class="btn btn-primary2">Edit</button>
                </div>
                </div>
            </div>
        </div>
        <div class="persetujuan">
        <p>Peserta</p>
        <div class="peserta">
          <input type="checkbox" id="check"><label for="check">Dengan mencentang kolom checkbox ini, saya menyatakan telah mengisi form pengajuan dengan benar dan sebaik-baiknya</label>
        </div>
        <div class="form-groups2">
          <button type="submit" class="btn btn-primary">Ajukan Konversi</button>
        </div>
        </div>
          </div>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
  <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
  <script>
    new MultiSelectTag('Rumpun Kegiatan')  // id
  </script>
  <script>
    new MultiSelectTag('Bentuk Kegiatan')  // id
  </script>
  <script>
    new MultiSelectTag('Jenis Kegiatan')  // id
  </script>

  <!--   Core JS Files   -->
  @include('layouts.script')
</body>

</html>