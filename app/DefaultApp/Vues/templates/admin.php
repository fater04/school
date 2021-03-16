<?php

use app\DefaultApp\DefaultApp as app;

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

    <title>Admin</title>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="javascript:void(0)">Administration</a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a href="javascript:void(0)"  class="nav-link"><i class="fa fa-sign-out-alt fa-2x"></i></a>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    <div class="sidebar sidebar-dark bg-dark">
        <ul class="list-unstyled">
            <li class="active"><a href="<?=\app\DefaultApp\DefaultApp::genererUrl('dashboard')?>"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="<?=\app\DefaultApp\DefaultApp::genererUrl('dashboard')?>"><i class="fa fa-fw fa-clipboard-list"></i> Annonces</a></li>
            <li><a href="<?=\app\DefaultApp\DefaultApp::genererUrl('dashboard')?>"><i class="fa fa-fw fa-images"></i> Gallerie</a></li>
            <li><a href="<?=\app\DefaultApp\DefaultApp::genererUrl('dashboard')?>"><i class="fa fa-fw fa-images"></i> Staff</a></li>
            <li><a href="<?=\app\DefaultApp\DefaultApp::genererUrl('dashboard')?>"><i class="fa fa-fw fa-folder"></i> Admission</a></li>
            <li><a href="<?=\app\DefaultApp\DefaultApp::genererUrl('dashboard')?>"><i class="fa fa-fw fa-envelope-open"></i> Contacts</a></li>
            <li>
                <a href="#sm_base" data-toggle="collapse">
                    <i class="fa fa-fw fa-cube"></i> Article
                </a>
                <ul id="sm_base" class="list-unstyled collapse">
                    <li><a href="<?=\app\DefaultApp\DefaultApp::genererUrl('dashboard')?>">Ajouter</a></li>
                    <li><a href="<?=\app\DefaultApp\DefaultApp::genererUrl('dashboard')?>">lister</a></li>
                </ul>
            </li>
            <li><a href="<?=\app\DefaultApp\DefaultApp::genererUrl('dashboard')?>"><i class="fa fa-fw fa-user"></i> Utilisateurs</a></li>

            <li><a href="<?=\app\DefaultApp\DefaultApp::genererUrl('Accueil')?>"><i class="fa fa-fw fa-external-link-alt"></i> Back to site</a></li>
        </ul>
    </div>

    <div class="content p-4"
        <h2 class="mb-4">Dashboard</h2>
        <div class="row mb-4">
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-primary text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-cog"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">Usage</p>
                        <h3 class="font-weight-bold mb-0">10%</h3>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-success text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-comments"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">Tickets</p>
                        <h3 class="font-weight-bold mb-0">374</h3>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-danger text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">Sales</p>
                        <h3 class="font-weight-bold mb-0">73,829</h3>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-info text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-users"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <p class="text-uppercase text-secondary mb-0">Customers</p>
                        <h3 class="font-weight-bold mb-0">1,683</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-10">

                <div class="card">
                    <div class="card-header bg-white font-weight-bold">
                        Recent Orders
                    </div>
                    <div class="card-body">

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Item</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">00000077</a></td>
                                <td>Praesent eu viverra leo</td>
                                <td>Kevin Dion</td>
                                <td><span class="badge badge-success">Shipped</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">00000078</a></td>
                                <td>Lorem ipsum dolor</td>
                                <td>Mark Otto</td>
                                <td><span class="badge badge-success">Shipped</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">00000079</a></td>
                                <td>Etiam eleifend elit</td>
                                <td>Jacob Thornton</td>
                                <td><span class="badge badge-info">Packaging</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">00000080</a></td>
                                <td>Donec vitae ante egestas</td>
                                <td>Larry the Bird</td>
                                <td><span class="badge badge-secondary">Back Ordered</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="card bg-success text-light text-uppercase">
                    <div class="card-body py-5">
                        <i class="fa fa-3x fa-chart-pie"></i>
                        <h5 class="mt-2 mb-0">10,342</h5>
                        <p class="mb-4">Visits</p>

                        <i class="fa fa-3x fa-handshake"></i>
                        <h5 class="mt-2 mb-0">70%</h5>
                        <p class="mb-4">Referrals</p>

                        <i class="fa fa-3x fa-leaf"></i>
                        <h5 class="mt-2 mb-0">30%</h5>
                        <p class="mb-0">Organic</p>
                    </div>
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
</body>
</html>
