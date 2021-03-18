<?php
/**
 * staff.php
 * Ecole
 * @author : fater
 * @created :  8:59 PM,3/14/2021,2021
 **/
?>


<section id="content">

    <div class="container-fluid clearfix">
        <div class="sixteen columns">
            <h1>Staff</h1>
            <style>
                * {
                    box-sizing: border-box;
                }

                /* Center website */
                .main {
                    max-width: 1000px;
                    margin: auto;
                }

                h1 {
                    font-size: 50px;
                    word-break: break-all;
                }

                .row {
                    margin: 8px -16px;
                }

                /* Add padding BETWEEN each column */
                .row,
                .row > .column {
                    padding: 5px;
                }

                /* Create four equal columns that floats next to each other */
                .column {
                    float: left;
                    width: 31.2%;
                }

                /* Clear floats after rows */
                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                }

                /* Content */
                .content {
                    background-color: white;
                    padding: 1px;
                }

                /* Responsive layout - makes a two column-layout instead of four columns */
                @media screen and (max-width: 900px) {
                    .column {
                        width: 50%;
                    }
                }

                /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
                @media screen and (max-width: 600px) {
                    .column {
                        width: 100%;
                    }
                }
            </style>
            <div class="row">
                <?php
                if (isset($listeStaff)) {
                    if (count($listeStaff) > 0) {
                        foreach ($listeStaff as $staff) {
                            ?>
                            <div class="col-md-3 col-xs-6">
                                <div class="content">
                                    <img src="<?= $staff->getImage(); ?>" alt="Mountains"
                                         style="width:100%;height: 260px">
                                    <h3><?= strtoupper($staff->nomcomplet) ?> <br/>
                                        <small><?= ucfirst($staff->getPoste()) ?></small></h3>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }
                ?>
            </div>

        </div>
        <hr>
        <div class="sixteen columns">
            <h1>Galerie</h1>
            <div class="row">

                <?php
                if (isset($listeGalerie)) {
                    if (count($listeGalerie) > 0) {
                        foreach ($listeGalerie as $ga) {
                            ?>
                            <div style="margin-bottom: 10px" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <img style="width:100%;height: 260px" src="<?= $ga->image ?>" class="img-responsive">
                            </div>
                            <?php
                        }
                    }
                }
                ?>
            </div>
        </div>

        <hr>

    </div>

    </div>

</section>
