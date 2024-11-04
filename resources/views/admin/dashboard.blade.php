@extends('layout_login')
@section('content')
<div class="wrapper">
    <aside id="sidebar">
        <div class="h-100">
            <div class="sidebar-logo">
                <a href="#">Code</a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Tools & Components
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-list pe-2"></i>
                        Profile
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages"
                        aria-expanded="false" aria-controls="pages">
                        <i class="fa-regular fa-file-lines pe-2"></i>
                        Pages
                    </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Analytics</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Ecommerce</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Crypto</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard"
                        aria-expanded="false" aria-controls="dashboard">
                        <i class="fa-solid fa-sliders pe-2"></i>
                        Dashboard
                    </a>
                    <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Dashboard Analytics</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Dashboard Ecommerce</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#auth"
                        aria-expanded="false" aria-controls="auth">
                        <i class="fa-regular fa-user pe-2"></i>
                        Auth
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Login</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Register</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-header">
                    Multi Level Nav
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi"
                        aria-expanded="false" aria-controls="multi">
                        <i class="fa-solid fa-share-nodes pe-2"></i>
                        Multi Level
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <div class="main">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="d-flex container-fluid">
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li> -->
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="ms-auto navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-bell"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link position-relative" href="#">
                                <i class="fa-solid fa-message"></i>
                                <span
                                    class="rounded-pill badge bg-secondary position-absolute top-20 start-100 translate-middle">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- <nav class="navbar navbar-expand px-3 border-bottom">
            <button class="btn" type="button" data-bs-theme="dark">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex justify-content-between">
                <div class="input-group">
                    <div class="input-group-text" id="btnGroupAddon">
                        <img src="{{URL("storage/search.png")}}" alt="">
                    </div>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div>
                    <a href="#" class="position-relative" style="margin: auto">
                        <i class="fa-solid fa-bell"></i>
                        <span style="font-size: 8px"
                            class="position-absolute top-100 start-150 translate-middle badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span>
                        </span>

                    </a>
                    <a href="#" class="position-relative" style="margin: auto">
                        <i class="fa-solid fa-message"></i>
                        <span style="font-size: 8px"
                            class="position-absolute top-100 start-150 translate-middle badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </div>

                input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </nav> -->
        <main class="content px-3 py-2">
            <div class="container-fluid">
                <div class="mb-3">
                    <h3>Bootstrap Sidebar Tutorial</h3>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection