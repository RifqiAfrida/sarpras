  <aside class="sidenav navbar navbar-vertical navbar-expand-xs 
  border-0 border-radius-xl my-3 fixed-start ms-3   
  bg-gradient-info" id="sidenav-main">
    <div class="sidenav-header bg-gradient-info">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://smkn1depok.sch.id/" target="_blank">
        <img src="{{ asset("assets/img/logo-onedek.png") }}" class="navbar-brand-img h-100" alt="">
        <span class="ms-1 font-weight-bold text-white">SMK NEGERI 1 DEPOK</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active" href={{ route('admin.dashboard') }}>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-20">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">DASHBOARD</span>
          </a>
        </li>
        {{-- Akun --}}
        <li class="nav-item mt-3">
          <h5 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">INFORMASI</h5>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white"  {{ Route::is('admin.adminusers.index') || Route::is('admin.adminusers.show')}} href={{ route('admin.adminusers.index') }}>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">ADMIN</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" {{ Route::is('admin.users.index') || Route::is('admin.users.show')}} href={{ route('admin.users.index') }}>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">people</i>
            </div>
            <span class="nav-link-text ms-1">USER</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" {{ Route::is('admin.kelas.index') }} href={{ route('admin.kelas.index') }}>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">house</i>
            </div>
            <span class="nav-link-text ms-1">KELAS</span>
          </a>
        </li>

        {{-- Inventori dan Rent --}}
        <li class="nav-item mt-3">
          <h5 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">INVENTORI</h5>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" {{ Route::is('admin.inventories.index') || Route::is('admin.inventories.show')}} href={{ route('admin.inventories.index') }}>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">archive</i>
            </div>
            <span class="nav-link-text ms-1">INVENTORI</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" {{ Route::is('admin.rents.index') || Route::is('admin.rents.show')}} href={{ route('admin.rents.index') }}>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">archive</i>
            </div>
            <span class="nav-link-text ms-1">RENTAL</span>
          </a>
        </li>
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST">
                @csrf
                <div class="sidenav-footer position-absolute w-100 bottom-2">
                <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();"> <i class="material-icons">logout</i>
              <span class="nav-link-text ms-1">LOGOUT</span>
              </a>
           <div class="mx-4">
            </div>
          </div>
        </form>
      </li>
      </ul>
    </div>
  </aside>

  
            {{-- Jurusan
            <li class="nav-item mt-3"></li>
              <h5 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">JURUSAN</h5>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href={{ route('admin.pplg') }}>
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">laptop</i>
                </div>
                <span class="nav-link-text ms-1">PPLG</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href={{ route('admin.dkv') }}>
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">camera</i>
                </div>
                <span class="nav-link-text ms-1">DKV</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href={{ route('admin.akl') }}>
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">book</i>
                </div>
                <span class="nav-link-text ms-1">AKL</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href={{ route('admin.aph') }}>
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">hotel</i>
                </div>
                <span class="nav-link-text ms-1">APH</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href={{ route('admin.to') }}>
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">build</i>
                </div>
                <span class="nav-link-text ms-1">TO</span>
              </a>
            </li> --}}