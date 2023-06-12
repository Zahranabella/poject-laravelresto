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

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container-fluid">
            <a class="navbar-brand " href="."><i><img src="{{ asset('img/logo.jpg') }}" width="5%" height="auto"></i>   Restaurant</a>
            
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        {{-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php
                            echo $hasil['username'];
                            ?>
                        </a> --}}
    
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profil</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#ModalUbahPassword"><i class="bi bi-key-fill"></i> Ubah Password</a>
                            </li>
                            <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Modal ubah password -->
    <div class="modal fade" id="ModalUbahPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
    
                <div class="modal-body">
                    <form class="needs-validation" novalidate action="proses/proses_ubah_password.php" method="POST">
                        {{-- <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input disabled type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" name="username" required
                                        value="<?php echo $_SESSION['username_cafe'] ?>">
                                    <label for="floatingInput">Username</label>
                                    <div class="invalid-feedback">
                                        Masukkan Username
                                    </div>
                                </div>
                            </div> --}}
    
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" name="passwordlama"
                                        required>
                                    <label for="floatingInput">Password Lama</label>
                                    <div class="invalid-feedback">
                                        Masukkan Password Lama
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" name="passwordbaru"
                                        required>
                                    <label for="floatingInput">Password Baru</label>
                                    <div class="invalid-feedback">
                                        Masukkan Password Baru
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" name="repasswordbaru"
                                        required>
                                    <label for="floatingInput">Ulangi Password Baru</label>
                                    <div class="invalid-feedback">
                                        Masukkan Password Baru
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="ubah_password_validate" value="12345">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 mt-2">
        <div class="card">
            <div class="card-header">
                Home
            </div>
            <div class="card-body">
                <h5 class="card-title">Ini Adalah Bagian Home</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content. Lorem ipsum
                    dolor sit amet harum veritatis aliquam cum error beatae, at recusandae ducimus tenetur quod
                    reprehenderit iste laudantium nesciunt, natus minus.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</head>

</html>
