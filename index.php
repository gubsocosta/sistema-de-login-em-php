<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Login</h1>
                    <?php if (isset($_SESSION['loginError'])): ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            echo $_SESSION['loginError'];
                            unset($_SESSION['loginError']);
                            ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="auth/logon.php" id="formlogin" name="formlogin" >
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" autofocus />
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control" name="senha" id="senha" />
                        </div>
                        <button type="submit" class="btn btn-default">Logar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>