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

    </style>
     <style>

     </style>

</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form class="needs-validation" novalidate action="proses/proses_login.php" method="POST">
            <img src="{{ asset('img/logo.jpg') }}" width="50%" height="auto">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>

            <div class="form-floating">
                <input name="username" type="name" class="form-control" id="floatingInput"
                    placeholder="Your Username" required>
                <label for="floatingInput">Username</label>
                <div class="invalid-feedback">
                    Masukkan Username yang valid
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

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-light" type="submit" name="submit_validate"
                value="abc">Login</button>
            <p class="mt-5 mb-3 text-muted">If you don't have the account, please <a class="btn-3 btn-link">Sign-up</a>
            </p>
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
