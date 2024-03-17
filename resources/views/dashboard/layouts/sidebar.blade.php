<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Painel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Meus posts
            </a>
          </li>
        </ul>
        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mt-4 mb-1 text-muted">
          <span>Administrador</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Categorias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/apidocs*') ? 'active' : '' }}" href="/dashboard/apidocs">
              <span data-feather="grid" class="align-text-bottom"></span>
              Documentação da API
            </a>
            <ul class="nav flex-column">
              <li class="nav-item ms-5"> <a class="nav-link" href="/dashboard/apidocs#home">Gerar Token</a></li>
              <li class="nav-item ms-5"> <a class="nav-link" href="/dashboard/apidocs#pass">Introdução</a></li>
              <li class="nav-item ms-5"><a class="nav-link" href="/dashboard/apidocs#introduction">Meus Posts</a></li>
              <li class="nav-item ms-5"><a class="nav-link" href="/dashboard/apidocs#article">&emsp;GET</a></li>
              <li class="nav-item ms-5"><a class="nav-link" href="/dashboard/apidocs#articleget">&emsp;POST</a></li>
              <li class="nav-item ms-5"><a class="nav-link" href="/dashboard/apidocs#articlepost">&emsp;PUT | PATCH</a></li>
              <li class="nav-item ms-5"><a class="nav-link" href="/dashboard/apidocs#articleputpatch">&emsp;DELETE</a></li>
              <li class="nav-item ms-5"><a class="nav-link" href="/dashboard/apidocs#articledelete">Categorias</a></li>
              <li class="nav-item ms-5"><a class="nav-link" href="/dashboard/apidocs#category">&emsp;GET</a></li>
              <li class="nav-item ms-5"><a class="nav-link" href="/dashboard/apidocs#categoryget">&emsp;POST</a></li>
              <li class="nav-item ms-5"><a class="nav-link" href="/dashboard/apidocs#categorypost">&emsp;PUT | PATCH</a></li>
              <li class="nav-item ms-5"><a class="nav-link" href="/dashboard/apidocs#categoryputpatch">&emsp;DELETE</a></li>
            </ul>
        </ul>
        @endcan
      </div>
    </nav>
