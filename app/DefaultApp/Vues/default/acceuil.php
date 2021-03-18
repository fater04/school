<div class="slider">

    <div class="container-fluid">

        <div class="sixteen columns">

            <div class="flexslider">

                <ul class="slides">
                    <li>
                        <div class="preloader">
                            <a href="#" class="bwWrapper"><img src="app/DefaultApp/public/slides/2.jpg"></a>
                        </div>
                        <section class="caption">
                            <h4>
                                <a title="Thinking up New Projects" href="#">CFM ( centre de formation moderne )</a>
                            </h4>
                            <p class="desc">Le meilleur choix pour une bonne formation</p>
                        </section>
                    </li>

                    <li>
                        <div class="preloader">
                            <a href="#" class="bwWrapper"><img src="app/DefaultApp/public/slides/1.jpg"></a>
                        </div>
                        <section class="caption ">
                            <h4>
                                <a title="We create to make your life easier" href="#">Un reflet de votre
                                    établissement</a>
                            </h4>
                            <p class="desc">Le site internet se doit aussi d'être un vecteur positif de votre
                                image </p>
                        </section>
                    </li>

                    <li>
                        <div class="preloader">
                            <a href="#" class="bwWrapper"><img src="app/DefaultApp/public/slides/3.jpg"></a>
                        </div>
                        <section class="caption ">
                            <h4>
                                <a title="We create to make your life easier" href="#">Un reflet de votre
                                    établissement</a>
                            </h4>
                            <p class="desc">Le site internet se doit aussi d'être un vecteur positif de votre
                                image </p>
                        </section>
                    </li>

                    <li>
                        <div class="preloader">
                            <a href="#" class="bwWrapper"><img src="app/DefaultApp/public/slides/4.jpg"></a>
                        </div>
                        <section class="caption ">
                            <h4>
                                <a title="We create to make your life easier" href="#">Un reflet de votre
                                    établissement</a>
                            </h4>
                            <p class="desc">Le site internet se doit aussi d'être un vecteur positif de votre
                                image </p>
                        </section>
                    </li>

                    <li>
                        <div class="preloader">
                            <a href="#" class="bwWrapper"><img src="app/DefaultApp/public/slides/5.jpg"></a>
                        </div>
                        <section class="caption ">
                            <h4>
                                <a title="We create to make your life easier" href="#">Un reflet de votre
                                    établissement</a>
                            </h4>
                            <p class="desc">Le site internet se doit aussi d'être un vecteur positif de votre
                                image </p>
                        </section>
                    </li>
                </ul>

            </div>

        </div>

    </div>

</div>

<section id="content">

    

        <div class="detail-holder clearfix">

            <div class="four columns col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="detail-box">
                    <div class="detail-entry">
                        <i class="detail-icon icons-mail"></i>
                        <a href="<?=\app\DefaultApp\DefaultApp::genererUrl('contact')?>"><h5>Nous Contacter</h5></a>
                        <p>
                            Contacter-nous ,via notre formualire de contact.
                        </p>
                    </div>
                    <div data-color-state="#D14A00" data-color-hover="" class="transform"></div>
                </div>
            </div>

            <div class="four columns col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="detail-box">
                    <div class="detail-entry">
                        <i class="detail-icon icons-users"></i>
                        <a href="<?=\app\DefaultApp\DefaultApp::genererUrl('kindergarten')?>"><h5>Section Kindergaten</h5></a>
                        <p>Voir notre section kindergarten</p>
                    </div>
                    <div data-color-state="#F9B900" data-color-hover="" class="transform"></div>
                </div>
            </div>

            <div class="four columns col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <div class="detail-box">

                    <div class="detail-entry">

                        <i class="detail-icon icons-monitor"></i>
                        <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('formulaire')?>"><h5>Admission</h5></a>
                        <p>Remplir notre formulaire d'admission</p>
                    </div>
                    <div data-color-state="#80BE00" data-color-hover="" class="transform"></div>
                </div>
            </div>

            <div class="four columns col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <div class="detail-box">

                    <div class="detail-entry">

                        <i class="detail-icon icons-shuffle"></i>

                        <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('actualites')?>"><h5>Actualites & Evennements</h5></a>
                        <p>voir nos derniers activites</p>
                    </div>
                    <div data-color-state="#479300" data-color-hover="" class="transform"></div>
                </div>
            </div>
        </div>

        <div class="clear"></div>
        <div class="divider-solid"></div>
        
    <div class="container">
        <aside id="sidebar" class="four columns">
            <h4 style="text-transform: uppercase;">à la Une</h4>
            <ul class="ajax-nav" >
                <li><a href="#">Annonces</a></li>
                <li><a href="#">L'agenda de l'établissement</a></li>
            </ul>
        </aside>

        <section id="main" class="twelve columns">

            <div class="ajax-content">
                <ul>
                    <li class="ajax-navigation-item">
                        <?php
                        if(isset($listeAnnonce)){
                            if(count($listeAnnonce)>0){
                                foreach ($listeAnnonce as $annonce){
                                    ?>
                                    <div class="card">
                                    <h1 class=""><?= ucfirst(stripslashes($annonce->getTitre())) ?></h1>
                                    <span style="font-weight: bold">Date : <?=$annonce->getDate()?></span>

                                    <?= html_entity_decode($annonce->getDescription()) ?>
                                    </div>
                                    <hr>
                                    <?php
                                }
                            }
                        }
                        ?>

                    </li>

                    <li class="ajax-navigation-item">
                        <iframe align="top" class="gcalendar" frameborder="0" height="500" id="gcalendar_frame"
                                src="http://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=1&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=MONTH&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;hl=fr-FR&amp;height=500&amp;src=0831053u%40ac-nice.fr&amp;color=%232952A3"
                                width="100%">No Iframes supported by your browser
                        </iframe>

                    </li>
                </ul>

            </div>

        </section>
        
        <div class="clear"></div>
        <div class="divider-solid"></div>
    </div>

</section>
