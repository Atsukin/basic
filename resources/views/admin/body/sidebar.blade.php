<!-- ====================================
      ——— LEFT SIDEBAR WITH OUT FOOTER
    ===================================== -->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html" title="Sleek Dashboard">
                <svg
                    class="brand-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid"
                    width="30"
                    height="33"
                    viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>

                <span class="brand-name text-truncate">Sleek Dashboard</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                       aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Ecommerce</span>
                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('home.slider') }}">
                                    <span class="nav-text">Slider</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="analytics.html">
                                    <span class="nav-text">Home About</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="analytics.html">
                                    <span class="nav-text">Home Portfolio</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                       aria-expanded="false" aria-controls="app">
                        <i class="mdi mdi-pencil-box-multiple"></i>
                        <span class="nav-text">Brand</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="app" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ url('/brand/all') }}">
                                    <span class="nav-text">All</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <!-- <li class="section-title">
                  UI Elements
                </li> -->

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                       aria-expanded="false" aria-controls="components">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Category</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="components" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ url('/category/all') }}">
                                    <span class="nav-text">ALL</span>
                                </a>
                            </li>

                        </div>
                    </ul>
                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                       aria-expanded="false" aria-controls="forms">
                        <i class="mdi mdi-email-mark-as-unread"></i>
                        <span class="nav-text">Forms</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="forms" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="basic-input.html">
                                    <span class="nav-text">Basic Input</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="input-group.html">
                                    <span class="nav-text">Input Group</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="checkbox-radio.html">
                                    <span class="nav-text">Checkbox & Radio</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="form-validation.html">
                                    <span class="nav-text">Form Validation</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="form-advance.html">
                                    <span class="nav-text">Form Advance</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                       aria-expanded="false" aria-controls="maps">
                        <i class="mdi mdi-google-maps"></i>
                        <span class="nav-text">Maps</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="maps" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="google-map.html">
                                    <span class="nav-text">Google Map</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="vector-map.html">
                                    <span class="nav-text">Vector Map</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                       aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-chart-pie"></i>
                        <span class="nav-text">Charts</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="charts" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="chartjs.html">
                                    <span class="nav-text">ChartJS</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <!-- <li class="section-title">
                  Pages
                </li> -->

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                       aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Pages</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="pages" data-parent="#sidebar-menu">
                        <div class="sub-menu ">
                            <li class="">
                                <a class="sidenav-item-link" href="user-profile.html">
                                    <span class="nav-text">User Profile</span>
                                </a>
                            </li>

                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                                   aria-expanded="false" aria-controls="authentication">
                                    <span class="nav-text">Authentication</span> <b class="caret"></b>
                                </a>

                                <ul class="collapse " id="authentication">
                                    <div class="sub-menu">
                                        <li class="">
                                            <a href="sign-in.html">Sign In</a>
                                        </li>

                                        <li class="">
                                            <a href="sign-up.html">Sign Up</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                                   aria-expanded="false" aria-controls="others">
                                    <span class="nav-text">Others</span> <b class="caret"></b>
                                </a>

                                <ul class="collapse " id="others">
                                    <div class="sub-menu">
                                        <li class="">
                                            <a href="invoice.html">Invoice</a>
                                        </li>

                                        <li class="">
                                            <a href="404.html">404 Page</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </li>

                <!-- <li class="section-title">
                  Documentation
                </li> -->
            </ul>
        </div>

        <div class="sidebar-footer">
            <hr class="separator mb-0" />
            <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                    Cpu Uses <span class="float-right">40%</span>
                </h6>

                <div class="progress progress-xs">
                    <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                </div>

                <h6 class="text-uppercase">
                    Memory Uses <span class="float-right">65%</span>
                </h6>

                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
                </div>
            </div>
        </div>
    </div>
</aside>
