@include('layouts.header') <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
 <style> 
 .form-container {
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
              <div class="text-judul">
                <strong>Formulir Verifikasi</strong>
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
          <div class="card">
            <div class="card-body">
              <form>
                <div class="form-groups">
                  <label for="Rumpun Kegiatan">Rumpun Kegiatan</label>
                  <select name="Rumpun Kegiatan" id="Rumpun Kegiatan" multiple>
                    <option value="1">Pendidikan</option>
                    <option value="2">Kebudayaan</option>
                    <option value="3">Kepemudaan dan olahraga</option>
                    <option value="4">Pariwisata</option>
                    <option value="5">Kesehatan</option>
                    <option value="6">Sosial</option>
                    <option value="7">Pemberdayaan perempuan dan perlindungan anak</option>
                    <option value="8">Administrasi kependudukan dan pencatatan sipil</option>
                    <option value="9">Pemberdayaan masyarakat Desa</option>
                    <option value="10">Ketentraman, ketertiban umum dan perlindungan masyarakat</option>
                    <option value="11">Ketentraman dan ketertiban umum</option>
                    <option value="12">Urusan Kebakaran</option>
                    <option value="13">Penanaman modal</option>
                    <option value="14">Koperasi, usaha kecil dan menengah</option>
                    <option value="15">Perindustrian Perdagangan</option>
                    <option value="16">Energi dan sumber daya mineral</option>
                    <option value="17">Transmigrasi dan tenaga kerja</option>
                    <option value="18">Komunikasi dan informatika, statik dan persandian</option>
                    <option value="19">Perumahan dan kawasan pemukiman, pekerjaan umum dan penataan ruang</option>
                    <option value="20">Pertahanan</option>
                    <option value="21">Perhubungan</option>
                    <option value="22">Lingkungan hidup</option>
                    <option value="23">Kehutanan</option>
                    <option value="24">Pangan</option>
                    <option value="25">Pertanian</option>
                    <option value="26">Kelautan dan perikanan</option>
                    <option value="27">Perpustakaan dan kearsipan</option>
                  </select>
                </div>
                <div class="form-groups">
                  <label for="Bentuk Kegiatan">Bentuk Kegiatan</label>
                  <select name="Bentuk Kegiatan" id="Bentuk Kegiatan" multiple>
                    <option value="1">Klasikal</option>
                    <option value="2">Non Klasikal</option>
                    <option value="3">Blended</option>
                  </select>
                </div>
                <div class="form-groups">
                  <label for="Jenis Kegiatan">Jenis Kegiatan</label>
                  <select name="Jenis Kegiatan" id="Jenis Kegiatan" multiple>
                    <option value="1">Pelatihan Manejerial</option>
                    <option value="2">Pelatihan Teknis </option>
                    <option value="3">Pelatihan Fungsional</option>
                    <option value="4">Pelatihan Sosial Kultural</option>
                    <option value="5">Konferensi/Sarahsehan/Sosialisasi</option>
                    <option value="6">Seminar/Workshop/Lokal Karya</option>
                    <option value="7">Kursus</option>
                    <option value="8">Penataran</option>
                    <option value="9">Bimbingan Tenis</option>
                    <option value="10">Penukaran antar PNS dengan Pegawai Swasta/BUMN/BUMD (Non Klasikal)</option>
                    <option value="11">Magang/praktik Kerja</option>
                    <option value="12">Patok Banding/Benchmarking (Non Klasikal)</option>
                    <option value="13">Pelatihan Jarak Jauh (Non Klasikal)</option>
                    <option value="14">Coaching (Non klasikal)</option>
                    <option value="15">Mentoring (Non Klasikal)</option>
                    <option value="16">Datasering (Scondment) (Non Klasikal)</option>
                    <option value="17">E-Learning (Non Klasikal)</option>
                    <option value="15">Belajar Mandiri (Seld Development) (Non Klasikal)</option>
                    <option value="16">Komunitas Belajar (Community of Practice) (Non Klasikal)</option>
                    <option value="17">Pembelajaran Alam Terbuka (Outbond) (Non Klasikal)</option>
                  </select>
                </div>
                <div class="form-groups">
                  <label for="NamaKegiatan">Nama Kegiatan</label>
                  <input type="text" class="form-control" id="NamaKegiatan">
                </div>
                <div class="form-groups">
                  <label for="QuotaPeserta">Penyelenggara</label>
                  <input type="text" class="form-control" id="QuotaPeserta">
                </div>
                <div class="form-groups">
                  <label for="NamaInstansi">Tempat Diselenggarakan</label>
                  <input type="text" class="form-control" id="NamaInstansi">
                </div>
                <div class="form-groups">
                  <label for="TanggalPendaftaran">Tanggal Periode Pelaksanaan Kegiatan (Kabupaten)</label>
                  <input type="date" class="form-control" id="TanggalPendaftaran">
                </div>
                <div class="form-groups">
                  <label for="NamaInstansi">Jumlah JP</label>
                  <input type="text" class="form-control" id="NamaInstansi">
                </div>
                <div class="upload1">
                  <p>Upload Dokumen Sertifikat</p>
                  </div>
                <div class="upload">
                  <p>upload File</p>
                <input Type="file" id="upload8tn">
                <label class="lbl" for="upload8tn"><i class="fa-solid fa-upload"></i></label>
                </div>
                <div class="buttom">
                <button type="cancel" class="btn btn-primary">Cancel</button>
                <button type="submit" class="btn btn-primary">Next</button>
                </div>
              </form>
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
