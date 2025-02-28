<header class="header-area clearfix" id="siteNavbar" v-cloak>
    <div class="primary-header-parent bg-white">
        <div class="container">
            <div class="primary-header d-flex align-items-center border-bottom">
                <div class="logo">
                    <a href="#">
                        <img src="{{asset('/assets/img/logo.jpeg')}}" alt="logo image" class="logo-image">
                    </a>
                </div>
                <div class="search-field px-4">
                    <form action="javascript:void(0)" class="search-form">
                        <div class="d-flex align-items-center">
                            <input type="text" class="form-control rounded-0 border-0 shadow-none">
                            <button type="submit" class="btn btn-primary rounded-0 border-0 shadow-none">
                                <i class="fa-light fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="nav-last-item">
                    <div class="d-flex align-items-center gap-2 justify-content-end">
                        <button class="btn last-item-button border-0 shadow-none" type="button">
                            <i class="fa-light fa-heart"></i>
                            <span class="item-count">10</span>
                        </button>
                        <div class="dropdown">
                            <button class="btn last-item-button border-0 shadow-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-light fa-user"></i>
                            </button>
                            <ul class="dropdown-menu user-droplown-content shadow rounded-0">
                              <li><a class="dropdown-item" href="#">Login</a></li>
                              <li><a class="dropdown-item" href="#">Register</a></li>
                              <li><a class="dropdown-item" href="#">Profile</a></li>
                              <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn last-item-button border-0 shadow-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-light fa-cart-shopping"></i>
                                <span class="item-count">10</span>
                            </button>
                            <ul class="dropdown-menu mini-cart">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secondary-header text-white">
        <div class="container">
            <ul class="category-menu">
                <li>
                    <button type="button" class="btn btn-primary rounded-0 border py-1 px-2"><i class="fa-regular fa-bars-staggered"></i> Category</button>
                </li>
                <li>
                    <ul class="d-none d-lg-flex align-items-center gap-4 category-items">
                        <li><a href="javascript:void(0)">Home</a></li>
                        <li><a href="javascript:void(0)">Privacy Notice</a></li>
                        <li><a href="javascript:void(0)">New products</a></li>
                        <li><a href="javascript:void(0)">Search</a></li>
                        <li><a href="javascript:void(0)">My account</a></li>
                        <li><a href="javascript:void(0)">Contact Us</a></li>
                        <li>
                            <a href="javascript:void(0)">Menufacturers</a>
                            <ul class="subcategory-items bg-white p-2 border text-dark shadow">
                                <li><a href="javascript:void(0)">Sandra Foods</a></li>
                                <li><a href="javascript:void(0)">All Menuyfacturers</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="text-end d-lg-none">
                        <button type="button" class="btn btn-primary rounded-0 border py-1 px-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#categoryOffcanvas" aria-controls="categoryOffcanvas"><i class="fa-solid fa-bars"></i> Menu</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>



    {{-- offcanvas menu --}}
    <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="categoryOffcanvas" aria-labelledby="categoryOffcanvasLabel">
        <div class="offcanvas-header bg-light border-bottom">
          <h5 class="offcanvas-title ps-2" id="categoryOffcanvasLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="d-block d-lg-none menu-offcanvas list-unstyled p-0 m-0">
              <li><a href="javascript:void(0)">Home</a></li>
              <li><a href="javascript:void(0)">Privacy Notice</a></li>
              <li><a href="javascript:void(0)">New products</a></li>
              <li><a href="javascript:void(0)">Search</a></li>
              <li><a href="javascript:void(0)">My account</a></li>
              <li><a href="javascript:void(0)">Contact Us</a></li>
              <li>
                  <a href="javascript:void(0)" class="justify-content-between" @click.prevent="toggleSubmenu = !toggleSubmenu">
                    <span>Menufacturers</span>
                    <button class="btn rounded-0 p-1">
                        <i class="fa-regular fa-plus" v-if="!toggleSubmenu"></i>
                        <i class="fa-regular fa-minus" v-else></i>
                    </button>
                  </a>
                  <ul class="p-0 m-0 list-unstyled bg-light ps-3 py-3" v-if="toggleSubmenu">
                      <li><a href="javascript:void(0)">Sandra Foods</a></li>
                      <li><a href="javascript:void(0)">All Menuyfacturers</a></li>
                  </ul>
              </li>
          </ul>
        </div>
    </div>




</header>




