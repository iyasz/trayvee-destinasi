<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <style>
        .header h3{
            font-weight: lighter;
        }
        .parent {
            position: relative;
            top: 150px;
        }
    </style>
    <div class="container parent">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="header text-center mb-4">
                                <h3>Sign In To Trayvee</h3>
                            </div>
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username">

                            <label for="pw">Password</label>
                            <input type="password" name="password" id="pw" class="form-control">

                            <div class="footer">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>