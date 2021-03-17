<?php
/**
 * Annonce.php
 * Ecole
 * @author : fater
 * @created :  10:14 AM,3/17/2021,2021
 **/

namespace app\DefaultApp\Models;


use Delight\Auth\UnknownIdException;
use systeme\Model\Model;

class Annonce extends Model
{
    private $id;
    private $titre;
    private $description;
    private $date;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    public static function count()
    {
        $con = self::connection();
        $req = "select COUNT(*) as 'nb' from annonces ";
        $rs = $con->query($req);
        $data = $rs->fetch();
        return $data['nb'];

    }

    public function ajouter()
    {
        try {

            $con = self::connection();
            $req = "insert into annonces (titre,description) VALUES (:titre,:description)";

            $param = array(
                ":titre" => $this->titre,
                ":description" => $this->description
            );

            $stmt = $con->prepare($req);
            if ($stmt->execute($param)) {
                return "ok";
            } else {
                return "no";
            }


        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function lister()
    {
        try {
            $con = self::connection();
            $req = "select *from annonces order by id desc";
            $stmt = $con->prepare($req);
            $stmt->execute();
            $res = $stmt->fetchAll(\PDO::FETCH_CLASS, "app\\DefaultApp\\Models\\Annonce");
            return $res;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    public static function supprimer($id)
    {
        try {
            $req = "delete from annonces where  id=:id";
            $stmt = self::connection()->prepare($req);
            if ($stmt->execute(array(
                ":id" => $id
            ))) {
                return "ok";
            } else {
                return "no";
            }
        } catch (Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }
}
