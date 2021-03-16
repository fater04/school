<?php
/**
 * AdminControlleur.php
 * Ecole
 * @author : fater
 * @created :  1:07 PM,3/16/2021,2021
 **/

namespace app\DefaultApp\Controlleurs;


use systeme\Controlleur\Controlleur;

class AdminControlleur extends  Controlleur
{
protected  $nom_template='admin';
    public function dashboard()
    {
        $variable['titre'] = "Dashboard";
        return $this->render("admin/admin", $variable);
    }
}
