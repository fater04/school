<?php

use app\DefaultApp\DefaultApp as app;

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>
<html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600italic|Handlee' rel='stylesheet'
          type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--[if ie]>
    <meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1"/><![endif]-->
    <title><?php

        if (isset($titre)) echo $titre; ?></title>
    <meta name="description" content="">
    <meta name="author" content="fater04">
    <link rel="icon" type="image/x-icon" href="#"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= APP::css('style') ?>"/>
    <link rel="stylesheet" href="<?= APP::css('skeleton') ?>"/>
    <link rel="stylesheet" href="<?= APP::css('layout') ?>"/>
    <link rel="stylesheet" href="<?= APP::css('font-awesome') ?>"/>
    <link rel="stylesheet" href="<?= APP::css('flexslider') ?>"/>
    <link rel="stylesheet" href="<?= APP::css('jquery.fancybox') ?>"/>
    <script src="<?= APP::js('jquery.modernizr') ?>"></script>
</head>
<body class="boxed  normal pattern-4 color-1">

<div id="wrapper">

    <header id="header">
        <div class="container">

            <div class="eight columns">

                <div id="logo">
                    <a href="/"><img width="85px" height="10px"
                                     src="<?= APP::autre('images/logopng.png') ?>"
                                     alt="logo"></a>
                </div><!--/ #logo-->

            </div><!--/ .columns-->

            <div class="eight columns">

                <div class="widget widget_contacts">

                    <div class="vcard clearfix">
                        <p><i class=" fa fa-map-marker" aria-hidden="true"></i> 46, Avenue Lamartinière,
                            Bois-Verna,Port-au-prince,Haiti</p>
                    </div>


                    <div class="vcard clearfix">
                        <p><i class=" fa fa-phone" aria-hidden="true"></i>
                            Téléphone(s) : <strong>(+509) 4848-7879/2226-3872</strong>
                        </p>
                    </div>
                    <div class="vcard clearfix">
                        <p><i class=" fa fa-envelope" aria-hidden="true"></i>
                            Email(s) : <strong>centredeformationmoderne1984@gmail.com</strong></p>
                    </div>

                    <div class="clear"></div>

                    <ul class="social-icons">
                        <li class="twitter"><a href="#">Twitter</a></li>
                        <li class="facebook"><a href="#">Facebook</a></li>
                        <li class="dribble"><a href="#">Dribble</a></li>
                        <li class="vimeo"><a href="#">Vimeo</a></li>
                        <li class="youtube"><a href="#">Youtube</a></li>
                        <li class="rss"><a href="#">Rss</a></li>
                    </ul>

                </div>

            </div>

            <div class="clear"></div>

            <div class="sixteen columns">

                <div class="menu-container clearfix">

                    <nav id="navigation" class="navigation clearfix">

                        <div class="menu">
                            <ul>
                                <li class="<?php if (isset($active1)) {
                                    echo $active1;
                                } ?>">
                                    <a href="<?= app::genererUrl('Accueil') ?>">Accueil</a>
                                </li>
                                <li class="<?php if (isset($active6)) {
                                    echo $active6;
                                } ?>">
                                    <a href="javascript:void(0)">QUI-SOMMES-NOUS</a>
                                    <ul>
                                        <li><a href="<?= app::genererUrl('presentation') ?>">Presentation</a></li>
                                        <li><a href="<?= app::genererUrl('historique') ?>">Historique</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if (isset($active5)) {
                                    echo $active5;
                                } ?>">
                                    <a href="javascript:void(0)">Admission</a>
                                    <ul>
                                        <li><a href="<?= app::genererUrl('condition') ?>">Condition </a></li>
                                        <li><a href="<?= app::genererUrl('formulaire') ?>">Formulaire</a></li>
                                    </ul>
                                </li>
                                <li class="<?php
                                if (isset($active3)) {
                                    echo $active3;
                                }
                                ?>"><a href="<?= app::genererUrl('actualites') ?>">Actualites & Evennements</a></li>
                                <li class="<?php if (isset($active4)) {
                                    echo $active4;
                                } ?>">
                                    <a href="javascript:void(0)">Galerie</a>
                                    <ul>
                                        <li><a href="<?= app::genererUrl('staff') ?>">STAFF</a></li>
                                        <li><a href="<?= app::genererUrl('gallerie') ?>">GALLERIE</a></li>
                                    </ul>
                                </li>


                                <li class="<?php
                                if (isset($active2)) {
                                    echo $active2;
                                }
                                ?>"><a href="<?= app::genererUrl('contact') ?>">Contact</a></li>
                            </ul>
                        </div>

                    </nav>

                    <div class="search-wrapper">

                        <form method="post" action="#">

                            <p>
                                <input name="s" id="s" type="text">
                                <button type="submit" class="submit-search">Search</button>
                            </p>

                        </form>

                    </div>

                </div>
            </div>

        </div>
    </header>
    <?php
    if (isset($contenue)) {
        echo $contenue;
    }
    ?>
    <footer id="footer">

        <div class="container">
            <div class="five columns">

                <div class="widget widget_text" align="center">
                    <a href="<?=\app\DefaultApp\DefaultApp::genererUrl('dashboard')?>"><img alt="logo" width="50%" src="<?= APP::autre('images/logopng.png') ?>"
                                    class="single-image img-responsive"/></a>
                    <p><span class="widget-title">Centre de Formation Moderne</span> <br/>Le meilleur choix pour une
                        bonne formation</p>
                </div>
            </div>

            <div class="five columns">
                <div class="widget widget_text">
                    <h3 class="widget-title" style="color:#CCC;">Nos Coordonnées</h3>

                    <div class="textwidget">

                        <h4 class="content-title">Centre de Formation Moderne </h4>

                        <p><i class=" fa fa-map-marker" aria-hidden="true"></i>&nbsp;46, Avenue Lamartinière,
                            Bois-Verna,Port-au-prince,Haiti<br>
                            <i class=" fa fa-phone" aria-hidden="true"></i>&nbsp;(+509) 4848-7879/2226-3872<br>
                            <i class=" fa fa-envelope" aria-hidden="true"></i>&nbsp;centredeformationmoderne1984@gmail.com<br>
                        </p>
                    </div>

                </div>

            </div>

            <div class="five columns">

                <div class="widget widget_text">

                    <h3 class="widget-title">Nos Horaires</h3>
                    <div class="textwidget">
                        <p><span>&rsaquo;</span> Kindergarden: 8:00 à 13:00 du lundi au jeudi, vendredi 8:00 à
                            12:00<br/>
                            <span>&rsaquo;</span> Fondamentale: 1er et 2ème cycle (1ère AF à 6ème AF) 8:00 à 14:00<br/>
                            <span>&rsaquo;</span> Fondamentale, 3ème cycle( 7ème AF à 9ème AF)<br/>
                            <span>&rsaquo;</span> 8:00 à 13:00 (parfois 14:00)<br/>
                            <span>&rsaquo;</span> Secondaire(SI à SIV): 8:00 à 14:00(parfois 15h voire 16h)<br/>
                        </p>
                    </div>


                </div>
            </div>


            <div class="clear"></div>

            <div class="sixteen columns">

                <div class="adjective clearfix">
                    <div class="copyright">©<?= Date('Y') ?><strong></strong>Centre de Formation Moderne. Tous droits
                        réservés
                    </div>
                    <div class="developed">developped by <a href="https://bioshaiti.com" target="_blank">BIOS</a></div>
                </div>
            </div>

        </div>

    </footer>

</div>


<script src="<?= APP::js('jquery.min') ?>"></script>
<script src="<?= APP::js('flexslider/js/jquery.flexslider-min') ?>"></script>
<script src="<?= APP::js('jquery.easing.1.3.min') ?>"></script>
<script src="<?= APP::js('jquery.cycle.all.min') ?>"></script>
<script src="<?= APP::js('jquery.blackandwhite.min') ?>"></script>
<script src="<?= APP::js('jquery.isotope.min') ?>"></script>
<script src="<?= APP::js('jquery.jcarousel.min') ?>"></script>
<script src="<?= APP::js('jquery.jflickrfeed.min') ?>"></script>
<script src="<?= APP::js('fancybox/jquery.fancybox.pack') ?>"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?= APP::js('jquery.gmap.min') ?>"></script>
<script src="<?= APP::js('jquery.touchswipe.min') ?>"></script>
<script src="<?= APP::js('config') ?>"></script>
<script src="<?= APP::js('custom') ?>"></script>
<script>
    $(document).ready(function () {

        $(".filter-button").click(function () {
            var value = $(this).attr('data-filter');

            if (value == "all") {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            } else {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');

            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });
</script>
</body>
</html>
