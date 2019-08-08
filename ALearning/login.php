<!doctype html>
<html lang="en">

<head>
    <title>Login Form</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/regist.css">

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="./jquery/regist.js"></script>

</head>

<body>



    <div class="form-regist">
        <div class="container col-md-4">
            <div class="row justify-content-between">
                <div class="col-md-6 col-sm-6">
                </div>
            </div>
            <form method="post" action="">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Form Login</a>
                            </li>
                        </ul>
                    </div>
                    <?php

                    if(isset($_POST['btnlogin'])) {
                        if ($_POST['username'] == "sukamundur" && $_POST['password'] == 123456) {
                            header("Location: index.php");
                        } else {
                            echo "<p class='text-danger text-center'>Login Gagal !!!</p>";
                        }
                    }
                    ?>
                    <div class="card-body">
                        <div class="form">
                            <div class="form-group">
                                <label for="input1"></label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="input2"></label>
                                <input type="Password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <br>
                        <button type="submit" name="btnlogin" class="btn btn-primary btn-lg">Login</button>
                    </div>
            </form>
        </div>
    </div>
    </div>

    




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>



