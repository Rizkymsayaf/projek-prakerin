<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard')? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*')? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            My posts
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard/anak*')? 'active' : '' }}" href="/dashboard/anak">
            <span data-feather="user-check"></span>
            Anak
          </a>
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard/donasi*')? 'active' : '' }}" href="/dashboard/donasi">
            <span data-feather="dollar-sign"></span>
            Donasi
          </a>
        </li>
        @can('admin')
        <ul>
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard/pengasuh*')? 'active' : '' }}" href="/dashboard/pengasuh">
            <span data-feather="users"></span>
            Pengasuh
          </a>
        </li>
    </ul>
    @endcan
        <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard/kebutuhan*')? 'active' : '' }}" href="/dashboard/kebutuhan">
              <span data-feather="box"></span>
              Kebutuhan
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard/laporan*')? 'active' : '' }}" href="/dashboard/anak_asuh">
            <span data-feather="book"></span>
            Laporan
          </a>
        </li>
      </ul>
      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>
            Administrator
          </span>
      </h6>
      <ul  class="nav flex-column">
          <li class="nab-item">
            <a class="nav-link  {{ Request::is('dashboard/categories*')? 'active' : '' }}" href="/dashboard/categories">
                <span data-feather="grid"></span>
                Post Categories
              </a>
        </li>

      </ul>
      @endcan

    </div>
  </nav>
