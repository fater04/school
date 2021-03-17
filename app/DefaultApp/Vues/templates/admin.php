<?php

use systeme\Application\Application as ap;
use systeme\Model\Utilisateur;

if (!Utilisateur::auth()->isLoggedIn()) {
    ap::redirection('login');
} else {

    $userId = Utilisateur::auth()->id();
    $userEmail = Utilisateur::auth()->getEmail();
    if (!Utilisateur::auth()->isNormal()) {
        $msg1 = new \Plasticbrain\FlashMessages\FlashMessages();
        $msg1->error("Utilisateur Blocké ,veuillez contacter l'administrateur,svp !", "login");
        ap::redirection('login');
    }
}
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/admin/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="public/admin/css/datatables.min.css">
    <link rel="stylesheet" href="public/admin/css/fullcalendar.min.css">
    <link rel="stylesheet" href="public/admin/css/bootadmin.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <title>Admin - <?php if (isset($titre)) echo $titre; ?></title>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="javascript:void(0)">Administration</a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('logout') ?>" class="nav-link"><i
                            class="fa fa-sign-out-alt fa-2x"></i></a>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    <div class="sidebar sidebar-dark bg-dark">
        <ul class="list-unstyled">
            <li class="active"><a href="<?= \app\DefaultApp\DefaultApp::genererUrl('dashboard') ?>"><i
                            class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="<?= \app\DefaultApp\DefaultApp::genererUrl('annonces') ?>"><i
                            class="fa fa-fw fa-clipboard-list"></i> Annonces</a></li>
            <li><a href="<?= \app\DefaultApp\DefaultApp::genererUrl('dashboard') ?>"><i class="fa fa-fw fa-images"></i>
                    Gallerie</a></li>
            <li><a href="<?= \app\DefaultApp\DefaultApp::genererUrl('list-staff') ?>"><i class="fa fa-fw fa-images"></i>
                    Staff</a></li>
            <li><a href="<?= \app\DefaultApp\DefaultApp::genererUrl('dashboard') ?>"><i class="fa fa-fw fa-folder"></i>
                    Admission</a></li>
            <li><a href="<?= \app\DefaultApp\DefaultApp::genererUrl('list-contact') ?>"><i
                            class="fa fa-fw fa-envelope-open"></i> Contacts</a></li>
            <li>
                <a href="#sm_base" data-toggle="collapse">
                    <i class="fa fa-fw fa-cube"></i> Article
                </a>
                <ul id="sm_base" class="list-unstyled collapse">
                    <li><a href="<?= \app\DefaultApp\DefaultApp::genererUrl('dashboard') ?>">Ajouter</a></li>
                    <li><a href="<?= \app\DefaultApp\DefaultApp::genererUrl('dashboard') ?>">lister</a></li>
                </ul>
            </li>
            <li><a href="<?= \app\DefaultApp\DefaultApp::genererUrl('user') ?>"><i class="fa fa-fw fa-user"></i>
                    Utilisateurs</a></li>

            <li><a href="<?= \app\DefaultApp\DefaultApp::genererUrl('Accueil') ?>"><i
                            class="fa fa-fw fa-external-link-alt"></i> Back to site</a></li>
        </ul>
    </div>

    <div class="content p-4">
        <h2 class="mb-4"></h2>
        <?php
        $msg = new \Plasticbrain\FlashMessages\FlashMessages();
        $msg->display();

        if (isset($contenue)) {
            echo $contenue;
        }
        ?>
    </div>
</div>

<script src="public/admin/js/jquery.min.js"></script>
<script src="public/admin/js/bootstrap.bundle.min.js"></script>
<script src="public/admin/js/datatables.min.js"></script>
<script src="public/admin/js/moment.min.js"></script>
<script src="public/admin/js/fullcalendar.min.js"></script>
<script src="public/admin/js/bootadmin.min.js"></script>
<script type="text/javascript" src="public/admin/js/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart3);
    google.charts.setOnLoadCallback(drawChart4);

    function drawChart3() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2013', 1000, 400],
            ['2014', 1170, 460],
            ['2015', 660, 1120],
            ['2016', 1030, 540]
        ]);

        var options = {
            title: 'Company Performance',
            hAxis: {title: 'Year', titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div_3'));
        chart.draw(data, options);
    }

    function drawChart4() {
        var data = google.visualization.arrayToDataTable([
            ['Country', 'Popularity'],
            ['Germany', 200],
            ['United States', 300],
            ['Brazil', 400],
            ['Canada', 500],
            ['France', 600],
            ['RU', 700]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('chart_div_4'));

        chart.draw(data, options);
    }
</script>
<script>
    window.setTimeout(function () {

        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 4000);
    ClassicEditor.create( document.querySelector( '#editor' ) )
        .then( editor => {
            editor.ui.view.editable.element.style.height = '150px';
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
