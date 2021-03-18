<?php
/**
 * Created by PhpStorm.
 * User: ALCINDOR LOSTHELVEN
 * Date: 29/03/2018
 * Time: 22:30
 */

namespace app\DefaultApp\Controlleurs;

use app\DefaultApp\Models\Annonce;
use app\DefaultApp\Models\Galerie;
use app\DefaultApp\Models\Staff;
use Delight\Auth\Auth;
use Plasticbrain\FlashMessages\FlashMessages;
use systeme\Controlleur\Controlleur;
use systeme\Model\Utilisateur;

class DefaultControlleur extends Controlleur
{
    public function login()
    {
        $variable['titre'] = "Login";
        $msg = new FlashMessages();
        $variable['titre'] = "Login";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $pseudo = trim(addslashes($_POST['pseudo']));
            $pass = trim(addslashes($_POST['pass']));
            if (isset($_POST["remember"])) {
                $rememberDuration = (int)(60 * 60 * 24 * 365.25);
            } else {
                $rememberDuration = null;
            }
            $resultat=Utilisateur::login($pseudo, $pass, $rememberDuration);

            if ($resultat == 'ok') {
                $msg->success('connection reussie');

            }else{
                $msg->error($resultat);

            }
        }
        return $this->render("default/login", $variable);
    }

    public function index()
    {
        $variable['active1'] = 'current-menu-item';
        $variable['titre'] = "Acceuil";

        $annonce=new Annonce();
        $listeAnnonce=$annonce->lister();
        $variable['listeAnnonce']=$listeAnnonce;

        return $this->render("default/acceuil", $variable);
    }

    public function contact()
    {
        $variable['active2'] = 'current-menu-item';
        $variable['titre'] = "Contact";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $message=$_POST['message'];
        }
        return $this->render("default/contact", $variable);
    }

    public function articles()
    {
        $variable['active3'] = 'current-menu-item';
        $variable['titre'] = "Articles";
        return $this->render("default/articles", $variable);
    }
    public function actualites()
    {
        $variable['active3'] = 'current-menu-item';
        $variable['titre'] = "Actualites";
        return $this->render("default/actualites", $variable);
    }

    public function single()
    {
        $variable['active3'] = 'current-menu-item';
        $variable['titre'] = "Single";
        return $this->render("default/single_post", $variable);
    }

    public function gallerie()
    {
        $variable['active4'] = 'current-menu-item';
        $variable['titre'] = "Gallerie";
        return $this->render("default/gallerie", $variable);
    }

    public function staff()
    {
        $variable['active4'] = 'current-menu-item';
        $variable['titre'] = "Staff";
        $st=new Staff();
        $listeStaff=$st->lister();
        $variable['listeStaff']=$listeStaff;

        $ga=new Galerie();
        $listeGalerie=$ga->lister();
        $variable['listeGalerie']=$listeGalerie;
        return $this->render("default/staff", $variable);
    }


    public function presentation()
    {
        $variable['active6'] = 'current-menu-item';
        $variable['titre'] = "Presentation";
        return $this->render("default/presentation", $variable);
    }

    public function historique()
    {
        $variable['active6'] = 'current-menu-item';
        $variable['titre'] = "Historiques";
        return $this->render("default/historique", $variable);
    }
    public function kindergarten()
    {
        $variable['active6'] = 'current-menu-item';
        $variable['titre'] = "Kindergarten";
        return $this->render("default/kindergarten", $variable);
    }

    public function condition()
    {
        $variable['active5'] = 'current-menu-item';
        $variable['titre'] = "Condition";
        return $this->render("default/condition", $variable);
    }

    public function formulaire()
    {
        $variable['active5'] = 'current-menu-item';
        $variable['titre'] = "Formulaire";
        return $this->render("default/formulaire", $variable);
    }



}
