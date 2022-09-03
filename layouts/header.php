<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trayvee - Jelajahi Dunia Bersama Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <style>
        .navbar {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 3;
        }
        .auth {
            gap: 4px;
        }
        .auth a{
            color: #f1f1f1;
        }
        .signup {
            background: #D07000;
            border-radius: 9px;
            width: max-content;
            padding-left: 9px;
            padding-right: 9px;
        }
    </style>
    <div class="navbar navbar-dark navbar-expand-lg text-bg-dark">
        <div class="container">
            <a class="navbar-brand h1  fs-4" href="#">Tray<span class="text-warning">vee></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto auth">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li> -->
                        <a class="nav-link ps-2" href="index.php?page=login">Sign In</a>
                        <a class="nav-link signup" href="index.php?page=register">Sign Up</a>

                </ul>
            </div>
        </div>
    </div>