
<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-house-user"></i><span>Dashboard</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-link"></i><span>Portal</span></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a href="#" class="nav-link">Pengumuman</a></li>
            <li class="nav-item"><a href="{{ route('data-mahasiswa') }}" class="nav-link">Data Mahasiswa</a></li>
            <li class="nav-item"><a href="{{ route('kalender') }}" class="nav-link">Kalender Akademik</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Kuesioner</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Perkuliahan</span></a>
            <ul class="dropdown-menu">
                <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Data Kurikulum</a>
                    <ul class="dropdown-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Link 3</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a href="{{ route('beasiswa') }}" class="nav-link has-dropdown">Beasiswa</a>
                    <ul class="dropdown-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Link 3</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a href="{{ route('sertifikasi') }}" class="nav-link has-dropdown">Sertifikasi</a>
                    <ul class="dropdown-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Jadwal Sertifikasi</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Pendaftaran Sertifikasi</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('jadwal-kuliah') }}" class="nav-link">Jadwal Perkuliahan</a></li>
                <li class="nav-item"><a href="{{ route('krs') }}" class="nav-link">KRS</a></li>
                <li class="nav-item"><a href="{{ route('khs') }}" class="nav-link">KHS</a></li>
                <li class="nav-item"><a href="{{ route('nilai-mahasiswa') }}" class="nav-link">Nilai Mahasiswa</a></li>
                <li class="nav-item"><a href="{{ route('transkip-nilai') }}" class="nav-link">Transkrip Nilai</a></li>
                <li class="nav-item"><a href="{{ route('jadwal-ujian') }}" class="nav-link">Jadwal Ujian</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Kartu Ujian</a></li>
            </ul>
        </li>
      </ul>
    </div>
  </nav>