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
    <div class="secondary-header">
        <div class="container">
            <ul class="category-menu">
                <li>
                    <button type="button" class="btn btn-primary rounded-0 border py-1 px-2 me-5"><i class="fa-regular fa-bars-staggered"></i> Category</button>
                </li>
                <li><a href="javascript:void(0)">Home</a></li>
                <li><a href="javascript:void(0)">Privacy Notice</a></li>
                <li><a href="javascript:void(0)">New products</a></li>
                <li><a href="javascript:void(0)">Search</a></li>
                <li><a href="javascript:void(0)">My account</a></li>
                <li><a href="javascript:void(0)">Contact Us</a></li>
                <li><a href="javascript:void(0)">Menufacturers</a></li>
            </ul>
        </div>
    </div>

</header>
