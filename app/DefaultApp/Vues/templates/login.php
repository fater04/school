<?php use systeme\Application\Application as ap;

if (\systeme\Model\Utilisateur::auth()->isLoggedIn()) {
    ap::redirection('dashboard');
}
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/admin/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="public/admin/css/datatables.min.css">
    <link rel="stylesheet" href="public/admin/css/fullcalendar.min.css">
    <link rel="stylesheet" href="public/admin/css/bootadmin.min.css">
    <title>Login</title>
</head>
<body class="bg-light">

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-4">
            <?php
            $msg=new \Plasticbrain\FlashMessages\FlashMessages();
            $msg->display();
            ?>
            <h1 class="text-center mb-4">Admin</h1>
            <div class="card">
                <div class="card-body">
                    <form method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="pseudo" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Mot de passe" name="pass" required>
                        </div>

                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-check-input">
                                Remember Me
                            </label>
                        </div>

                        <div class="row">
                            <div class="col pr-2">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="public/admin/js/jquery.min.js"></script>
<script src="public/admin/js/bootstrap.bundle.min.js"></script>
<script src="public/admin/js/datatables.min.js"></script>
<script src="public/admin/js/moment.min.js"></script>
<script src="public/admin/js/fullcalendar.min.js"></script>
<script src="public/admin/js/bootadmin.min.js"></script>
</body>
</html>
