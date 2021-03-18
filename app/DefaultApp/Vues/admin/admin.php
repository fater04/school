<?php
/**
 * admin.php
 * Ecole
 * @author : fater
 * @created :  1:25 PM,3/16/2021,2021
 **/
?>

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
