<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

                <div class="content">
                    <button onclick="signup()">Enviar</button>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyC5h-e4mjg-tJDb__Bhm59mJ-hhTMAELow",
        authDomain: "add-player-e318b.firebaseapp.com",
        databaseURL: "https:/add-player-e318b.firebaseio.com",
        projectId: "add-player-e318b",
        storageBucket: "",
        messagingSenderId: "xxxxxxxxxx"
    };
    firebase.initializeApp(config);

    async function signin() {
        console.log('signing in')
        let creds = await firebase.auth().signInWithEmailAndPassword('craig.michael.morris@gmail.com', 'testing')
        console.log(creds.user.email)
        let token = await creds.user.getIdToken()
        console.log({ token })
        let headers = { Authorization: 'Bearer ' + token }
        // let me = await axios.get('/api/me', { headers })
        let me = await fetch(`/api/me?mail=${creds.user.email}`, {
            ...headers
            })
        console.log(me.json())
    }

    async function signup() {
        firebase.auth().createUserWithEmailAndPassword('contato@comberweb.com.br', 'lalala').then(function(user) {
            var user = firebase.auth().currentUser;
        }, function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
        });
    }
</script>
