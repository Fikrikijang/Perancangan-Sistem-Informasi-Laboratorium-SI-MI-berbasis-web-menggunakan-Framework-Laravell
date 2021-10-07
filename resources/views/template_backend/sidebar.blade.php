      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">ILABSIMI STMIK JAKARTA</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ISJ</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Beranda</li>

            <li class=active><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> <span>Home</span></a></li>

              <li class="menu-header">Menu</li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-fire"></i> <span>Ilab</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('jadwal.index') }}">List Jadwal</a></li>
                  <li><a class="nav-link" href="{{ route('praktikum.index') }}">List Praktikum</a></li>
                  <li><a class="nav-link" href="{{ route('strukturlab.index') }}">List Struktur Labsimi</a></li>
                  {{-- <li><a class="nav-link" href="{{ route('kategoris.index') }}">List Kategori Playlist</a></li>
                  <li><a class="nav-link" href="{{ route('kelas.index') }}">List Kelas</a></li>
                  <li><a class="nav-link" href="{{ route('playlist.index') }}">List Playlist</a></li>
                  <li><a class="nav-link" href="{{ route('buku.index') }}">List Buku Praktikum</a></li> --}}
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Berita dan Kegiatan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('post.index') }}">List Berita dan Kegiatan</a></li> 
                  <li><a class="nav-link" href="{{ route('category.index') }}">List Kategori</a></li>
                  <li><a class="nav-link" href="{{ route('tag.index') }}">List Tag</a></li>
                  {{-- <li><a class="nav-link" href="{{ route('post.tampil_hapus') }}">List Artikel Dihapus</a></li>               --}}
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-database"></i> <span>Data</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('asisten.index') }}">Data Asisten Lab</a></li>
                  <li><a class="nav-link" href="{{ route('mahasiswa.index') }}">Data Mahasiswa</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>Users</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('user.index') }}">List User</a></li>            
                </ul>
              </li>
            </ul>
        </aside>
      </div>