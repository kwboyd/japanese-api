<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Japanese Study API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Shadows Into Light', sans-serif;
                font-weight: 100;
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
                color: #000;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: sans-serif;
            }

            .m-b-md {
                margin-bottom: 10px;
            }

            .description {
              font-family: sans-serif;
              margin: 25px auto;
              width: 60%;
              font-size: .9em;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Japanese Study API
                </div>
                <div class="links">
                    <a href="https://kwboyd.gitbooks.io/japanese-api/content/">Documentation</a>
                    <a href="https://github.com/kwboyd/japanese-api">GitHub</a>
                    <a href="https://kwboyd.com">Portfolio</a>
                </div>
                <p class="description">An API for storing kanji, vocabulary, and particles. Can store pronunciation, examples sentences, compounds words, and all the other necessities for your Japanese studies.</p>

            </div>
        </div>
    </body>
</html>
