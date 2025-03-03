<?php #include(HTML_DIR. 'overall/header.php'); ?>

<!-- <body>
	<h1>JC IMPORT</h1>
</body>
</html> -->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

        <script src="views/app/js/generales.js"></script>

        <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/5.3/examples/sign-in/sign-in.css" rel="stylesheet">
    </head>
    
<body>

    <main class="form-signin w-100 m-auto">
        <div id="_AJAX_LOGIN_"></div>
        <div role="form" onkeypress="return runScriptLogin(event)">
            <a href="<?php echo APP_URL; ?>">
                <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            </a>
            
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                <label for="usuario">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Contraseña</label>
            </div>
            
            <button class="btn btn-primary w-100 py-2" type="button" onclick="goLogin()">Login</button>
        </div>
    </main>

    <script src="views/app/js/login.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>