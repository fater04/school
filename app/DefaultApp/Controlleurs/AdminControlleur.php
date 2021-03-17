<?php
/**
 * AdminControlleur.php
 * Ecole
 * @author : fater
 * @created :  1:07 PM,3/16/2021,2021
 **/

namespace app\DefaultApp\Controlleurs;


use app\DefaultApp\DefaultApp;
use app\DefaultApp\Models\Annonce;
use app\DefaultApp\Models\Contact;
use Plasticbrain\FlashMessages\FlashMessages;
use systeme\Controlleur\Controlleur;
use systeme\Model\Utilisateur;

class AdminControlleur extends Controlleur
{
    protected $nom_template = 'admin';

    public function dashboard()
    {
        $variable['titre'] = "Dashboard";
        return $this->render("admin/admin", $variable);
    }

    public function logout()
    {
        $msg = new FlashMessages();
        $variable['titre'] = "Logout";
        Utilisateur::logout();
        echo "<script> setTimeout(\"location . href = 'Accueil';\",0);</script>";
        return $this->render("default/login", $variable);
    }

    public function user()
    {
        $msg = New FlashMessages();
        $variable['titre'] = "Utilisateur";
        $variable['active5'] = "active";

        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['id'])) {
                if (isset($_GET['bq'])) {
                    $message = Utilisateur::blocker($_GET['id']);
                    if ($message == "ok") {
                        $msg->error("Bloquer  avec Succes ", "utilisateurs");
                    }
                } elseif (isset($_GET['dbq'])) {
                    $message = Utilisateur::deblocker($_GET['id']);
                    if ($message == "ok") {
                        $msg->success("Debloquer  avec Succes ", "utilisateurs");
                    }
                } else {
                    $resultat = Utilisateur::supprimer($_GET['id']);
                    if ($resultat == "ok") {
                        $msg->error("Suprime avec Succes ", "utilisateurs");
                    }

                }

            }
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $nom = DefaultApp::trimInput($_POST['nomcomplet']);
            $email = DefaultApp ::trimInput($_POST['email']);
            $pseudo = DefaultApp::trimInput($_POST['pseudo']);
            $role = DefaultApp::trimInput($_POST['role']);
            $password = DefaultApp::trimInput($_POST['password']);

            if (isset($_POST['add-user'])) {
                $user = new Utilisateur();
                $user->setNom($nom);
                $user->setEmail($email);
                $user->setPseudo($pseudo);
                $user->setMotdepasse($password);
                $resultat = $user->ajouter();
                if ($resultat == 'ok') {
                    Utilisateur::ajouterRole(Utilisateur::lastLogin(), $role);
                    $msg->success("Utilisateur enregistré avec succes ",'utilisateurs');
                } else {
                    $msg->error($resultat);
                }
            }
            if (isset($_POST['edit-user'])) {
                $id=DefaultApp::trimInput($_POST['user_id']);
                $old_role = DefaultApp::trimInput($_POST['old_role']);
                $user = new Utilisateur();
                $user->setId($id);
                $user->setNom($nom);
                $user->setEmail($email);
                $user->setPseudo($pseudo);
                $resultat=$user->modifier();
                if ($resultat == 'ok') {
                    if ($password != "**********") {
                        Utilisateur::changerMotdepasse($id,$password);
                    }
                    Utilisateur::retirerRole($id,$old_role);
                    Utilisateur::ajouterRole($id,$role);
                    $msg->success("Utilisateur modifié avec succes ",'utilisateurs');
                } else {
                    $msg->error($resultat);
                }

            }
        }

        $utilisateur = New Utilisateur();
        $variable['listeutilisateur'] = $utilisateur->lister();
        return $this->render("admin/user", $variable);
    }

    public function contact()
    {
        $msg = New FlashMessages();
        $contacts = New Contact();
        $variable['titre'] = "Contact";
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['id'])) {
                    $resultat = Contact::supprimer($_GET['id']);
                    if ($resultat == "ok") {
                        $msg->error("Suprime avec Succes ", "list-contact");
                    }
            }
        }

        $variable['contacts'] = $contacts->lister();
        return $this->render("admin/contact", $variable);
    }

    public function annonces()
    {
        $msg = New FlashMessages();
        $annonces = New Annonce();
        $variable['titre'] = "Annonce";
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['id'])) {
                    $resultat = Annonce::supprimer($_GET['id']);
                    if ($resultat == "ok") {
                        $msg->error("Suprime avec Succes ", "annonces");
                    }
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $titre = DefaultApp::trimInput($_POST['titre']);
            $note = DefaultApp ::trimInput($_POST['note']);

            if (isset($_POST['save'])) {
                $an = new Annonce();
                $an->setTitre($titre);
                $an->setDescription($note);
                $resultat = $an->ajouter();
                if ($resultat == 'ok') {
                    $msg->success("enregistré avec succes ",'annonces');
                } else {
                    $msg->error($resultat);
                }
            }
//            if (isset($_POST['edit-user'])) {
//                $id=DefaultApp::trimInput($_POST['user_id']);
//                $old_role = DefaultApp::trimInput($_POST['old_role']);
//                $user = new Utilisateur();
//                $user->setId($id);
//                $user->setNom($nom);
//                $user->setEmail($email);
//                $user->setPseudo($pseudo);
//                $resultat=$user->modifier();
//                if ($resultat == 'ok') {
//                    if ($password != "**********") {
//                        Utilisateur::changerMotdepasse($id,$password);
//                    }
//                    Utilisateur::retirerRole($id,$old_role);
//                    Utilisateur::ajouterRole($id,$role);
//                    $msg->success("Utilisateur modifié avec succes ",'utilisateurs');
//                } else {
//                    $msg->error($resultat);
//                }
//
//            }
        }
        $variable['annonces'] = $annonces->lister();
        return $this->render("admin/annonces", $variable);
    }

    public function change_password($id)
    {
        $variable = array();
        $msg = new FlashMessages();
        $variable['activ51'] = "active";
        $variable['titre'] = "Modifier mot de passe";
        $variable['id'] = $id;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $password1 = trim(addslashes($_POST['password1']));
            $password2 = trim(addslashes($_POST['password2']));
            if ($password1 === $password2) {
                $r = Utilisateur::changerMotdepasse($id,$password2);
                if ($r == 'ok') {
                    $msg->success("Mot de passe modifié avec succès ! ");
                    $variable['rediriger'] = "<script> setTimeout(\"location . href = '".DentAPP::genererUrl('logout')."';\",3000);</script>";


                } else {
                    $msg->error("Une erreur s'est produite ,veuillez reessayer,svp ! ! ");
                }
            } else {
                $msg->error('les mot de passe ne sont pas identiques ! ! ');
            }

        }
        return $this->render("admin/change-password", $variable);
    }

}
