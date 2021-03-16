<?php
/**
 * contact.php
 * Ecole
 * @author : fater
 * @created :  12:13 PM,3/11/2021,2021
 **/
?>
<section id="content">

    <div class="container clearfix">
        <div class="page-header clearfix">

            <h1>Contact</h1><span style="padding-left:10px;">Vous êtes ici : Accueil > Contact</span>

        </div>

        <div class="sixteen columns">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="1080" height="450" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Bois%20Verna,%20Port-au-Prince,%20Haiti&t=&z=16&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://soap2day-to.com">soap2day</a><br>
                    <style>.mapouter {
                            position: relative;
                            text-align: right;
                            height: 450px;
                            width: 100%;
                        }</style>
                    <a href="https://www.embedgooglemap.net"></a>
                    <style>.gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 450px;
                            width: 100%;
                        }</style>
                </div>
            </div>
        </div>

        <div class="clear"></div>
        <div class="eight columns">


            <h4 class="content-title"> Centre de Formation Moderne et<br/> Les Petits Dauphins kindergarten</h4>

            <p>
                46, Avenue Lamartinière, Bois-Verna<br>
                Tel(s): 48487879/22263872<br>
                Email:centredeformationmoderne1984@gmail.com<br>
            </p>


        </div>

        <div class="eight columns">

            <h4 class="content-title">Formulaire de contact </h4>

            <form method="post" action="">

                <p class="message-form-name">
                    <input required="" type="text" name="name" id="name" placeholder="Nom"
                           style="padding-left:25px;color:#333;"/>
                </p>

                <p class="message-form-email">
                    <input required="" type="email" name="email" id="email" placeholder="Adresse email"
                           style="padding-left:25px;color:#333;"/>
                </p>

                <p class="message-form-message">
                    <textarea required="" name="message" id="message" placeholder="Saisir votre message"
                              style="padding-left:25px;color:#333;"></textarea>
                </p>

                <p class="form-submit">
                    <button class="button default" type="submit" id="submit">Envoyer</button>
                </p>

            </form>

        </div>
    </div>

</section>
