<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon web" href="img-felis/biodata.jpg">
  <title>Portofolio-felicya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Portofolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#biodata">Biodata</a></li>
          <li class="nav-item"><a class="nav-link" href="#tentang">About Me</a></li>
          <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="biodata" class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <img src="img-felis/biodata.jpg" alt="Foto Profil" class="rounded-circle img-fluid mb-3" width="200">
        <p><em>"Jangan takut gagal, takutlah karna tidak mencoba"</em></p>
      </div>
      <div class="col-md-8">
        <div class="card shadow p-3">
          <h4 class="mb-3 text-danger">Biodata</h4>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Nama:</b> Felicya Agatha Susanto Lie</li>
            <li class="list-group-item"><b>Tanggal Lahir:</b> 02 Maret 2009</li>
            <li class="list-group-item"><b>Alamat:</b> Parung Panjang, Bogor</li>
            <li class="list-group-item"><b>Email:</b> felicyafelicya03@gmail.com</li>
            <li class="list-group-item"><b>Telepon:</b> 0899-8998-663</li>
            <li class="list-group-item"><b>Pendidikan:</b> SMK Bina Putra Mandiri - RPL</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="tentang" class="bg-light p-5">
    <div class="container">
      <h3 class="text-center text-danger mb-4">About Me</h3>
      <p class="text-center">
        Halo, nama saya <b>Felicya Agatha Susanto Lie</b>, siswi <b>SMK Bina Putra Mandiri</b> jurusan <b>Rekayasa Perangkat Lunak (RPL)</b>. 
        Saya memiliki ketertarikan besar pada dunia teknologi, terutama dalam bidang pemrograman.
        Selain aktif dalam pembelajaran, saya juga senang berorganisasi karena melalui organisasi saya belajar kepemimpinan, kerja sama, 
        serta melatih rasa tanggung jawab. Harapan saya adalah terus berkembang, baik dalam bidang akademik maupun non-akademik.
      </p>
    </div>
  </section>

  <section id="galeri" class="container my-5">
    <h3 class="text-center mb-4 text-danger">Galeri Kegiatan</h3>
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="{{ asset('img-felis/pengibaran.jpg')}}" class="card-img-top" alt="Kegiatan 1">
          <div class="card-body text-center">
            <p>Pengibaran 17 Agustus</p>
            <button class="btn btn-danger btn-sm mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#info1">
             ⭣
            </button>
            <div class="collapse mt-2" id="info1">
              <div class="card card-body text-start">
                <p><b>Tanggal:</b> 17 Agustus 2025</p>
                <p><b>Deskripsi:</b> Menjadi salah satu anggota petugas pengibar bendera merah putih pada upacara peringatan Hari Kemerdekaan 17 Agustus di sekolah. Momen ini menjadi pengalaman berharga karena dapat berkontribusi langsung dalam upacara sakral 
                  yang penuh makna nasionalisme dan kebanggaan sebagai pelajar.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="latpaskib2.jpg" class="card-img-top" alt="Kegiatan 2">
          <div class="card-body text-center">
            <p>Latihan Paskibra Sekolah</p>
            <button class="btn btn-danger btn-sm mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#info2">
             ⭣
            </button>
            <div class="collapse mt-2" id="info2">
              <div class="card card-body text-start">
                <p><b>Tanggal:</b> 31 Agustus 2025</p>
                <p><b>Deskripsi:</b> Mengikuti latihan Paskibra secara rutin bersama tim di sekolah. Latihan ini melatih kedisiplinan, tanggung jawab, kerja sama tim, serta meningkatkan
                   rasa cinta tanah air melalui kegiatan baris-berbaris dan persiapan upacara.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="rapatosis.jpg" class="card-img-top" alt="Kegiatan 3">
          <div class="card-body text-center">
            <p>Kegiatan rapat OSIS dan MPK</p>
            <button class="btn btn-danger btn-sm mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#info3">
             ⭣
            </button>
            <div class="collapse mt-2" id="info3">
              <div class="card card-body text-start">
                <p><b>Tanggal:</b> 05 September 2025</p>
                <p><b>Deskripsi:</b> Terlibat dalam rapat organisasi OSIS dan MPK untuk membahas berbagai program kerja sekolah. Melalui kegiatan ini, saya belajar cara berorganisasi,
                   berdiskusi, serta mengambil keputusan bersama demi keberhasilan kegiatan sekolah.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="serrtifkec.jpg" class="card-img-top" alt="Kegiatan 4">
          <div class="card-body text-center">
            <p>Rapat & Pembagian Sertifikat PPK</p>
            <button class="btn btn-danger btn-sm mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#info4">
              ⭣
            </button>
            <div class="collapse mt-2" id="info4">
              <div class="card card-body text-start">    
                <p><b>Tanggal:</b> 07 September 2025</p>
                <p><b>Deskripsi:</b> Mengikuti kegiatan rapat sekaligus pembagian sertifikat purna Paskibra tingkat kecamatan tahun 2025. Acara ini menjadi momen yang berkesan karena selain mendapatkan apresiasi berupa sertifikat atas dedikasi selama bertugas, 
                  juga menjadi ajang silaturahmi dengan sesama anggota Paskibra dari berbagai sekolah.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="debat4.jpg" class="card-img-top" alt="Kegiatan 5">
          <div class="card-body text-center">
            <p>Kegiatan Debat OSIS</p>
            <button class="btn btn-danger btn-sm mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#info5">
              ⭣
            </button>
            <div class="collapse mt-2" id="info5">
              <div class="card card-body text-start">
                <p><b>Tanggal:</b> 27 Agustus 2025</p>
                <p><b>Deskripsi:</b> Berpartisipasi dalam kegiatan debat OSIS dan menjadi salah satu calon yang maju dalam ajang tersebut. Kegiatan ini memberikan pengalaman berharga dalam melatih kemampuan berbicara, berpikir kritis, 
                  serta menyampaikan pendapat dengan percaya diri di hadapan audiens.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="ekskulpaskib.jpg" class="card-img-top" alt="Kegiatan 6">
          <div class="card-body text-center">
            <p>Kegiatan Ekstrakulikuler Paskibra</p>
            <button class="btn btn-danger btn-sm mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#info6">
              ⭣
            </button>
            <div class="collapse mt-2" id="info6">
              <div class="card card-body text-start">
                <p><b>Tanggal:</b> 28 Agustus 2025</p>
                <p><b>Deskripsi:</b> Aktif mengikuti kegiatan ekstrakurikuler Paskibra di sekolah. Melalui kegiatan ini, saya belajar tentang kedisiplinan, kekompakan, serta tanggung jawab sebagai anggota. Selain itu, kegiatan ini juga mempererat kebersamaan 
                  dengan teman-teman dalam latihan baris-berbaris maupun persiapan upacara.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <footer id="kontak" class="bg-danger text-white text-center p-4">
    <h5>Ikuti Saya</h5>
    <a href="https://instagram.com/ceceepelll" class="text-white fs-3 mx-2"><i class="bi bi-instagram"></i></a>
    <a href="https://wa.me/628998998663" class="text-white fs-3 mx-2"><i class="bi bi-whatsapp"></i></a>
    <a href="mailto:felicyafelicya03@example.com" class="text-white fs-3 mx-2"><i class="bi bi-envelope-fill"></i></a>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
