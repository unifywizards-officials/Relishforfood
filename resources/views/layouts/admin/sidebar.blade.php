<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('guest/images/demo-restaurant-logo-black.png') }}" alt="AdminLTE Logo" class="brand-image"
            style="width:200px" style="height:40px">
        <span class="brand-text font-weight-light"></span>
    </a>
    <br>

    <div class="sidebar">
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Request::is('admin/dashboard') ? 'active' : null }}">
                        <i class="fa-solid fa-chart-line"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!--------------------------------------------Location ------------------------------------------------>

                {{-- <li class="nav-item">
                    <a href="{{ route('admin.manage-banner.index') }}"
                        class="nav-link {{ Request::is('admin/manage-banner*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-panorama"></i>
                        <p>Home Page Banner's</p>
                    </a>
                </li> --}}


                <!--------------------------------------------Master Entries for About us------------------------------------------------>
                <li
                    class="nav-item 
    {{ Request::routeIs('admin.manage-menu.index') ||
    Request::routeIs('admin.manage-menu-item.index') ||
    Request::routeIs('admin.manage-menu.edit') ||
    Request::routeIs('admin.manage-menu-item.edit')
        ? 'menu-is-opening menu-open'
        : null }}">
                    <a href="#"
                        class="nav-link 
        {{ Request::routeIs('admin.manage-menu.index') ||
        Request::routeIs('admin.manage-menu-item.index') ||
        Request::routeIs('admin.manage-menu.edit') ||
        Request::routeIs('admin.manage-menu-item.edit')
            ? 'active'
            : null }}">
                        <i class="nav-icon fa fa-chalkboard"></i>
                        <p>
                            Food Menu/Items
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage-menu.index') }}"
                                class="nav-link 
                    {{ Request::routeIs('admin.manage-menu.index') || Request::routeIs('admin.manage-menu.edit') ? 'active' : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Food Menu</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage-menu-item.index') }}"
                                class="nav-link 
                    {{ Request::routeIs('admin.manage-menu-item.index') || Request::routeIs('admin.manage-menu-item.edit')
                        ? 'active'
                        : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Food Items</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <!--------------------------------------------Catering Menu ------------------------------------------------>

                <li
                    class="nav-item 
    {{ Request::routeIs('admin.manage-catering-menu.index') ||
    Request::routeIs('admin.manage-catering-menu-item.index') ||
    Request::routeIs('admin.manage-catering-menu.edit') ||
    Request::routeIs('admin.manage-catering-menu-item.edit')
        ? 'menu-is-opening menu-open'
        : null }}">
                    <a href="#"
                        class="nav-link 
        {{ Request::routeIs('admin.manage-catering-menu.index') ||
        Request::routeIs('admin.manage-catering-menu-item.index') ||
        Request::routeIs('admin.manage-catering-menu.edit') ||
        Request::routeIs('admin.manage-catering-menu-item.edit')
            ? 'active'
            : null }}">
                        <i class="nav-icon fa fa-chalkboard"></i>
                        <p>
                            Catering Menu/Items
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage-catering-menu.index') }}"
                                class="nav-link 
                    {{ Request::routeIs('admin.manage-catering-menu.index') || Request::routeIs('admin.manage-catering-menu.edit') ? 'active' : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Catering Menu</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage-catering-menu-item.index') }}"
                                class="nav-link 
                    {{ Request::routeIs('admin.manage-catering-menu-item.index') ||
                    Request::routeIs('admin.manage-catering-menu-item.edit')
                        ? 'active'
                        : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Catering Items</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!------------------------------ Gallery Category and Gallery------------------------>


                <li
                    class="nav-item 
{{ Request::routeIs('admin.manage-gallery-category-menu.index') ||
Request::routeIs('admin.manage-gallery.index') ||
Request::routeIs('admin.manage-gallery-category.edit') ||
Request::routeIs('admin.manage-gallery.edit')
    ? 'menu-is-opening menu-open'
    : null }}">
                    <a href="#"
                        class="nav-link 
    {{ Request::routeIs('admin.manage-gallery-category.index') ||
    Request::routeIs('admin.manage-gallery.index') ||
    Request::routeIs('admin.manage-gallery-category.edit') ||
    Request::routeIs('admin.manage-gallery.edit')
        ? 'active'
        : null }}">
                        <i class="nav-icon fa fa-chalkboard"></i>
                        <p>
                            Category/Gallery
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage-gallery-category.index') }}"
                                class="nav-link 
                {{ Request::routeIs('admin.manage-gallery-category.index') || Request::routeIs('admin.manage-gallery-category.edit') ? 'active' : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gallery Category</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage-gallery.index') }}"
                                class="nav-link 
                {{ Request::routeIs('admin.manage-gallery.index') || Request::routeIs('admin.manage-gallery.edit')
                    ? 'active'
                    : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gallery Images</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <!-------------------------------------------Blogs And Category-------------------------------------------------------------------->


                <li
                    class="nav-item 
{{ Request::routeIs('admin.category.index') ||
Request::routeIs('admin.manage-blog.index') ||
Request::routeIs('admin.category.edit') ||
Request::routeIs('admin.manage-blog.edit')
    ? 'menu-is-opening menu-open'
    : null }}">
                    <a href="#"
                        class="nav-link 
    {{ Request::routeIs('admin.category.index') ||
    Request::routeIs('admin.manage-blog.index') ||
    Request::routeIs('admin.category.edit') ||
    Request::routeIs('admin.manage-blog.edit')
        ? 'active'
        : null }}">
                        <i class="nav-icon fa fa-chalkboard"></i>
                        <p>
                            Blog/Category
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.category.index') }}"
                                class="nav-link 
                {{ Request::routeIs('admin.category.index') || Request::routeIs('admin.category.edit') ? 'active' : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage-blog.index') }}"
                                class="nav-link 
                                    {{ Request::routeIs('admin.manage-blog.index') || Request::routeIs('admin.manage-blog.edit') ? 'active' : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('images.index') }}"
                        class="nav-link {{ Request::is('admin/images*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-address-card"></i>
                        <p>File Uploader</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('schemas.index') }}"
                        class="nav-link {{ Request::is('admin/schemas*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-address-card"></i>
                        <p>Manage Schemas</p>
                    </a>
                </li>



                <!--------------------------------------------Blog ------------------------------------------------>

                {{-- <li class="nav-item">
                    <a href="{{ route('admin.manage-blog.index') }}"
                        class="nav-link {{ Request::is('admin/manage-blog*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-blog"></i>
                        <p>Blog</p>
                    </a>
                </li> --}}


                <!--------------------------------------------Event ------------------------------------------------>

                {{-- <li class="nav-item">
                    <a href="{{ route('admin.manage-event.index') }}"
                        class="nav-link {{ Request::is('admin/manage-event*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-calendar-days"></i>
                        <p>Event</p>
                    </a>
                </li> --}}

                {{-- <li class="nav-item">
                    <a href="{{ route('admin.manage-news.index') }}"
                        class="nav-link {{ Request::is('admin/manage-news*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>News</p>
                    </a>
                </li> --}}


                {{-- <li class="nav-item">
                    <a href="{{ route('admin.eventFormData') }}"
                        class="nav-link {{ Request::is('admin/event-Form-data*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-file-lines"></i>
                        <p>Event From Data List</p>
                    </a>
                </li> --}}



                <li class="nav-item">
                    <a href="{{ route('admin.contactdata.list') }}"
                        class="nav-link {{ Request::is('admin/contact-data*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-address-card"></i>
                        <p>Contact Data List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.book.table.data') }}"
                        class="nav-link {{ Request::is('admin/book-table-data') ? 'active' : null }}">
                        <i class="nav-icon fa fa-address-card"></i>
                        <p>Book Table List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.order-now.data') }}"
                        class="nav-link {{ Request::is('admin/order-now-data') ? 'active' : null }}">
                        <i class="nav-icon fa fa-address-card"></i>
                        <p>Order List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.bookcatering.service.data') }}"
                        class="nav-link {{ Request::is('admin/book-catering-service-data') ? 'active' : null }}">
                        <i class="nav-icon fa fa-address-card"></i>
                        <p>Book Catering List</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{ route('admin.edit-staticpage_seo') }}"
                        class="nav-link {{ Request::is('admin/edit-staticpage_seo*') ? 'active' : null }}">
                        <i class="nav-icon fa-brands fa-searchengin"></i>
                        <p>Manage Seo</p>
                    </a>
                </li>
                

                <li class="nav-item">
                    <a href="{{ route('admin.edit.setting') }}"
                        class="nav-link {{ Request::is('admin/edit-setting*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-puzzle-piece"></i>
                        <p>Settings</p>
                    </a>
                </li> --}}




                <li class="nav-item">
                    <form id="myForm" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="#" id="submitLink" class="nav-link">
                            <i class="fa fa-power-off nav-icon"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>

    </div>

</aside>
