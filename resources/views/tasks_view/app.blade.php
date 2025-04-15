<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Projet Démo CRUD & Auth</title>
</head>
<body class="bg-light">

<!-- Header stylisé -->
<header class="bg-white shadow-sm py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-dark">
            <i class="bi bi-list-check me-2 text-primary"></i>
            Projet Démo
        </h1>
    </div>
</header>

<!-- Contenu principal -->
<main>
    <div class="container">
        @yield('content')
    </div>
</main>

</body>
</html>
