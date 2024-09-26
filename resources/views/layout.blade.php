<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="d-flex container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                <ul class="ms-auto navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img style="width: 24px" src="{{URL('storage/account.png')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img style="width: 24px" src="{{URL('storage/global.png')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#">
                            <img style="width: 24px" src="{{URL('storage/cart.png')}}" alt="">
                            <span class="rounded-pill badge bg-secondary position-absolute top-20 start-100 translate-middle">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-4">
            <form class="d-flex">
                <div class="input-group">
                    <div class="input-group-text" id="btnGroupAddon">
                        <img src="{{URL("storage/search.png")}}" alt="">
                    </div>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
        </div>
        <div class="col-6">
            <div>

            </div>
        </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{URL('storage/carousal_1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{URL('storage/carousal_2.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{URL('storage/carousal_3.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
<br><br>
<footer class="container-flur bg-light p-4" style="height: 35vh">
    <div class="row">
        <div class="col-4">
            <h4>ShopGenZ</h4>
            <p>Got Question? Please call us: #########</p>
            <p>Country: VietNam</p>
            <p>Address: Ho Chi Minh city</p>
            <div class="d-flex flex-row justify-content-evenly">
                <a href="">
                    <img src="{{URL("storage/facebook.png")}}" alt="">
                </a>
                <a href="">
                    <img src="{{URL("storage/youtube.png")}}" alt="">
                </a>
                <a href="">
                    <img src="{{URL("storage/google.png")}}" alt="">
                </a>
                <a href="">
                    <img src="{{URL("storage/twitter.png")}}" alt="">
                </a>
            </div>
        </div>
        <div class="col-4">
            <h5>Find it fast</h5>
            <div class="row">
                <div class="col-6">
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                </div>
                <div class="col-6">
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                    <a href="">Sunglasses</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <h5>Customer care</h5>
            <a href="">Sunglasses</a><br>
            <a href="">Sunglasses</a><br>
            <a href="">Sunglasses</a><br>
            <a href="">Sunglasses</a><br>
            <a href="">Sunglasses</a><br>
            <a href="">Sunglasses</a>
        </div>
    </div>
</footer>

</html>