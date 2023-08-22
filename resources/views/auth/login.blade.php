<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/layout.css">
    <title>Document</title>
</head>

<body>


    <main class="main-content  mt-4">
        <section class="">
            <div class="col-md-12">
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-5 col-md-5 d-flex flex-column mx-lg-0 mx-auto ml-6">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Connexion</h4>
                                    <p class="mb-0">Veuillez saisir vos paramètres de connexion</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg"
                                                value="{{ old('email') }}" aria-label="Email"
                                                placeholder="votremail@gmail.com">
                                            @error('email')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg"
                                                aria-label="Password" placeholder="votre mot de passe">
                                            @error('password')
                                                <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox"
                                                id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Connexion</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-1 text-sm mx-auto">
                                        Mot de passe oublié? Cliquez
                                        <a href="{{ route('password.request') }}"
                                            class="text-primary text-gradient font-weight-bold">ici </a>pour
                                        réinitialiser
                                    </p>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Vous n'avez pas de compte?
                                        <a href="{{ route('register') }}"
                                            class="text-primary text-gradient font-weight-bold">S'enregistrer</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
