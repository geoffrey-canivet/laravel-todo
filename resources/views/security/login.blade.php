<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <title>Page de connexion</title>

</head>
<body>
<section class="h-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 shadow text-black">
                    <div class="row g-0">
                        <div class="col-lg-6 bg-light rounded-start">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="https://cdn.simpleicons.org/laravel/4b5563"
                                         style="width: 120px;" alt="Laravel logo">
                                    <h4 class="mt-4 mb-5 pb-1">Formulaire de connexion</h4>
                                    @if(session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                </div>

                                <form action="{{route('login.post')}}" method="POST">
                                @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control"/>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="password">Mot de passe</label>
                                        <input type="password" name="password" id="password" class="form-control" />
                                    </div>

                                    <button type="submit" class="btn w-100 text-white"
                                            style="background-color: #4b5563; border: none;"
                                            onmouseover="this.style.backgroundColor='#374151'"
                                            onmouseout="this.style.backgroundColor='#4b5563'">
                                        Se connecter
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex align-items-center bg-secondary rounded-end">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">Projet de démonstration</h4>
                                <p class="small mb-3">Ceci est un projet de démonstration dans le cadre
                                    de l'apprentissage du framework Laravel.</p>
                                <p class="small mb-2 fw-bold">Pour vous connecter :</p>
                                <ul class="small">
                                    <li>Email: email@mail.com</li>
                                    <li>Mot de passe: 1234</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
