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
<body id="login_page">
    <div>
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title" >
                <h1 class="mdl-card__title-text">Bienvenue</h1>
            </div>
            <div class="mdl-card__supporting-text">
                <form method="post" action="{{route('auth')}}">


                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="login" name="login">
                        <label class="mdl-textfield__label" for="login">Login</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" id="password" name="password">
                        <label class="mdl-textfield__label" for="password">Password</label>
                    </div>
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
