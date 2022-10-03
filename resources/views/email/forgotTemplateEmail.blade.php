<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            -webkit-text-size-adjust: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            line-height: 1.4;
        }

        .container {
            width: 100% !important;
            height: 100%;
            background-color: rgb(212, 211, 211);
        }

        .wrapper {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
            margin-top: 20px;
            width: 400px;
            height: 300px;
            background-color: white;
            box-shadow: 1px 1px 5px rgb(39, 38, 38);
        }

        .main {
            padding-top: 40px;
            padding-bottom: 20px;
        }

        p {
            margin-top: 10px;
            font-size: 1.5em;
            text-align: center;
            text-decoration: none;
            font-weight: 400;
        }

        .text-second {
            text-align: center;
            margin-top: 5px;
            font-weight: 600;
            color: rgb(90, 89, 89);
        }

        .button-reset {
            margin-left: 33%;
        }

        .btn-link {
            overflow: hidden;
            text-decoration: none;
            padding-top: 7px;
            padding-bottom: 7px;
            padding-left: 15px;
            padding-right: 15px;
            border-radius: 5px;
            background-color: rgb(69, 69, 214);
        }

        span {
            color: white;
            font-weight: 800;
            z-index: 9999;
        }

        .copy-right {
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="row justify-content-center">
                <div class="main">
                    <p>Hello, {{ $email }}</p>
                    <p class="text-second">Silahkan klik tombol dibawah untuk melakukan Reset Password</p>
                    <div class="button-reset">
                        <a href="{{ URL('auth/reset/password/' . $token) }}" class="btn-link">
                            <span> Reset Password</span>
                        </a>
                    </div>
                    <hr style="font-weight: 600;margin-top: 20px;width: 80%;">
                    <div class="copy-right">
                        © {{ date('Y') }} FORUM GUHCODING.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
