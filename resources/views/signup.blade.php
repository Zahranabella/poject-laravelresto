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
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <!-- Custom styles for this template -->
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 0px;
            padding-bottom: 20px;
            background-color: #ffffff;
        }

        .form-signin {
            max-width: 430px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color : #FC6A73;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color : #FC6A73;
        }

        .form-signin input[type="add"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color : #FC6A73;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color : #FC6A73;
        }

        .form-signin input[type="password1"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color : #FC6A73;
        }

        .form-signin button {
            background-color: #FC6A73;
            border-color: #FC6A73;
        }
    </style>

</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form class="needs-validation" novalidate action="proses/proses_login.php" method="POST">
            <img src="{{ asset('img/logo.jpg') }}" width="50%" height="auto">
            <h1 class="h3 mb-3 fw-normal">Create your account!</h1>

            <div class="form-floating">
                <input name="username" type="text" class="form-control" id="floatingInput"
                    placeholder="Your Username" required>
                <label for="floatingInput">Username</label>
                <div class="invalid-feedback">
                    Masukkan Username yang valid
                </div>
            </div>
            <div class="form-floating mt-2">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name"
                    required>
                <label for="floatingInput">Email address</label>
                <div class="invalid-feedback">
                    Masukkan Email yang Valid
                </div>
            </div>
            <div class="form-floating mt-2">
                <input name="address" type="add" class="form-control" id="floatingInput" placeholder="Your Address"
                    required>
                <label for="floatingInput">Address</label>
                <div class="invalid-feedback">
                    Harap masukkan alamat anda
                </div>
            </div>
            <div class="form-floating mt-2">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password"
                    required>
                <label for="floatingPassword">Password</label>
                <div class="invalid-feedback">
                    Masukkan Password yang valid
                </div>
            </div>
            <div class="form-floating mt-2">
                <input name="conpassword" type="password1" class="form-control" id="floatingPassword"
                    placeholder="Password" required>
                <label for="floatingPassword">Confirm Password</label>
                <div class="invalid-feedback">
                    Cocokkan password anda
                </div>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="agree"> Are you agree with the terms & conditions?
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-light" type="submit" name="submit_validate"
                value="abc">Sign-up</button>
        </form>
    </main>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>
