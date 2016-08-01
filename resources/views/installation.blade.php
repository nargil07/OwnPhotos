<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>OwnPhotos</title>
</head>
<body id="installation_page">
<div>
    <div class="mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
            <div class="mdl-card__title-text">
                <h1>Bienvenue</h1>
                <p>Vous voici sur votre nouveau serveur OwnPhotos, avant de continuer nous avons besoin de quelques
                    informations</p>
            </div>

        </div>
        <div class="mdl-card__supporting-text">
            <p>
                Pour continuer vous devrez réunir les informations suivant :
            </p>
            <form method="post" action="{{route('validation')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-textfield--with-helper mdl-textfield--full-width">
                    <input class="mdl-textfield__input" type="text" id="name" name="name" value="{{old('name')}}">
                    <label class="mdl-textfield__label" for="name">Le nom de la base de donnees</label>
                    <label class="mdl-textfield__description" for="name">Le nom de la base de données ou vous souhaitez
                        installer OwnPhotos</label>
                    @if($errors->has('name'))
                        <label class="mdl-textfield__error" for="name">Le champ est requis</label>
                    @endif
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-textfield--with-helper mdl-textfield--full-width">
                    <input class="mdl-textfield__input" type="text" id="adresse" name="adresse"
                           value="{{old('adresse')}}">
                    <label class="mdl-textfield__label" for="adresse">l'adresse de la base de données</label>
                    <label class="mdl-textfield__description" for="adresse">L'adresse de la base de données ou vous
                        souhaitez installer OwnPhotos</label>
                    @if($errors->has('adresse'))
                        <label class="mdl-textfield__error" for="name">Le champ est requis</label>
                    @endif
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-textfield--with-helper mdl-textfield--full-width">
                    <input class="mdl-textfield__input" type="text" id="mysqluser" name="mysqluser"
                           value="{{old('mysqluser')}}">
                    <label class="mdl-textfield__label" for="mysqluser">Login</label>
                    <label class="mdl-textfield__description" for="mysqluser">Le nom d'utilisateur mysql de la base de
                        donnees</label>
                    @if($errors->has('mysqluser') > 0)
                        <label class="mdl-textfield__error" for="name">Le champ est requis</label>
                    @endif
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-textfield--with-helper mdl-textfield--full-width">
                    <input class="mdl-textfield__input" type="password" id="mysqlpwd" name="mysqlpwd"
                           value="{{old('mysqlpwd')}}">
                    <label class="mdl-textfield__label" for="mysqlpwd">Password</label>
                    <label class="mdl-textfield__description" for="mysqlpwd">Le mot de passe de l'utilisateur mysql de
                        la base de donnees</label>
                    @if($errors->has('mysqlpwd'))
                        <label class="mdl-textfield__error" for="name">Le champ est requis</label>
                    @endif
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-textfield--with-helper mdl-textfield--full-width">
                    <input class="mdl-textfield__input" type="text" id="user" name="user" value="{{old('user')}}">
                    <label class="mdl-textfield__label" for="user">Login</label>
                    <label class="mdl-textfield__description" for="user">Le nom de l'administrateur du serveur
                        OwnPhotos</label>
                    @if($errors->has('user'))
                        <label class="mdl-textfield__error" for="name">Le champ est requis</label>
                    @endif
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-textfield--with-helper mdl-textfield--full-width">
                    <input class="mdl-textfield__input" type="password" id="password" name="password"
                           value="{{old('password')}}">
                    <label class="mdl-textfield__label" for="password">Password</label>
                    <label class="mdl-textfield__description" for="password">Le mot de passe de l'administrateur du
                        serveur OwnPhotos</label>
                    @if($errors->has('password'))
                        <label class="mdl-textfield__error" for="name">Le champ est requis</label>
                    @endif
                </div>
                <!-- Accent-colored raised button with ripple -->
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Valider
                </button>

            </form>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="material.min.js"></script>
</body>
</html>
