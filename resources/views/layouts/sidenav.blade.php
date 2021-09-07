<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('argon/img/brand/blue.png') }}"class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <!-- Heading -->
          @role('admin')
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Menu Utama</span>
          </h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="{{route('home')}}" class="nav-link {{(request()->is('home')) ? 'active' : ''}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('dokter.index')}}" class="nav-link {{(request()->is('dokter*')) ? 'active' : ''}}">
                <i class="ni ni-circle-08 text-primary"></i>
                <span class="nav-link-text">Dokter</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('jam')}}" class="nav-link {{(request()->is('pasien*')) ? 'active' : ''}}">
                <i class="ni ni-circle-08 text-primary"></i>
                <span class="nav-link-text">Pasien</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- Divider -->
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Berita & Promosi</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a href="{{route('profil-rs.index')}}" class="nav-link {{(request()->is('profil-rs*')) ? 'active' : ''}}">
                <i class="ni ni-ambulance text-primary"></i>
                <span class="nav-link-text">Profil RS</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('berita.index')}}" class="nav-link {{(request()->is('berita*')) ? 'active' : ''}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Berita</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('berita.index')}}" class="nav-link {{(request()->is('berita*')) ? 'active' : ''}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Berita</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
        @endrole
        @role('pasien')
        <hr class="my-2">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Menu Utama</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a href="{{route('home')}}" class="nav-link {{(request()->is('home')) ? 'active' : ''}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('berita.index')}}" class="nav-link {{(request()->is('berita*')) ? 'active' : ''}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Berita</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('janji.index')}}" class="nav-link {{(request()->is('janji*')) ? 'active' : ''}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Konsultasi</span>
              </a>
            </li>
          </ul>
        @endrole
          <!-- Divider -->
        <hr class="my-2">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Bantuan & Kebijakan</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a href="{{route('syarat-dan-ketentuan')}}" class="nav-link {{(request()->is('syarat-dan-ketentuan')) ? 'active' : ''}}">
                <i class="ni ni-ambulance text-primary"></i>
                <span class="nav-link-text">Syarat Dan Ketentuan</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('kebijakan-privasi')}}" class="nav-link {{(request()->is('kebijakan-privasi')) ? 'active' : ''}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Kebijakan Privasi</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('tentang')}}" class="nav-link {{(request()->is('tentang')) ? 'active' : ''}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Tentang Sistem</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('faq')}}" class="nav-link {{(request()->is('faq')) ? 'active' : ''}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">FAQ</span>
              </a>
            </li>
          </ul>
      </div>
    </div>
</nav>