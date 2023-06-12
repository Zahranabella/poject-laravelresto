<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Restaurant Reservation</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white navbar-custom rounded">
        <style>
            .navbar-custom {
                border: 2px solid #FC6A73;
            }
        </style>
        <div class="container-lg">
            <img src="{{ asset('img/logo.jpg') }}" width="15%" height="auto">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link" aria-current="page">
                            <font face="Oswald" color="black" size="5"> Reservation Data
                        </a></font>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">
                            <font face="Source Sans Pro" color="black" size="5"> Reservation
                        </a></font>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">
                            <font face="Lato" color="black" size="5"> Info
                        </a></font>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">
                            <font face="Raleway" color="black" size="5"> Profile
                        </a></font>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

<div class="col-12 mt-4 rounded">
    <div class="card">
        <div class="card-header" style="background-color:#FC6A73;">
            <font size="5" style="padding-left: 50px;">
                Name</font>
            <font size="5" style="padding-left: 180px;">
                Email</font>
            <font size="5" style="padding-left: 180px;">
                Date</font>
            <font size="5" style="padding-left: 180px;">
                Table</font>
            <font size="5" style="padding-left: 180px;">
                Guest</font>
            <font size="5" style="padding-left: 180px;">
                Action</font>
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-warning me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit"
                style="float: right;">Edit</a>
            <a href="#" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete"
                style="float: right;">Delete</a>
        </div>
    </div>
</div>
</head>

</html>
