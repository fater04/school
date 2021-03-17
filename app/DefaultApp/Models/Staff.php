<?php
/**
 * Staff.php
 * Ecole
 * @author : fater
 * @created :  11:12 AM,3/17/2021,2021
 **/

namespace app\DefaultApp\Models;


use systeme\Model\Model;

class Staff extends Model
{
private $id;
private $NomComplet;
private $poste;
private $image;
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
    public function getNomComplet()
    {
        return $this->NomComplet;
    }

    /**
     * @param mixed $NomComplet
     */
    public function setNomComplet($NomComplet): void
    {
        $this->NomComplet = $NomComplet;
    }

    /**
     * @return mixed
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param mixed $poste
     */
    public function setPoste($poste): void
    {
        $this->poste = $poste;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
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

    public function ajouter()
    {
        try {

            $con = self::connection();
            $req = "insert into staff (nomcomplet,poste,image) VALUES (:nomcomplet,:poste,:image)";

            $param = array(
                ":nomcomplet" => $this->NomComplet,
                ":poste" => $this->poste,
                ":image" => $this->image
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
    public static function count()
    {
        $con = self::connection();
        $req = "select COUNT(*) as 'nb' from staff ";
        $rs = $con->query($req);
        $data = $rs->fetch();
        return $data['nb'];

    }

    public function lister()
    {
        try {
            $con = self::connection();
            $req = "select *from staff order by id desc";
            $stmt = $con->prepare($req);
            $stmt->execute();
            $res = $stmt->fetchAll(\PDO::FETCH_CLASS, "app\\DefaultApp\\Models\\Staff");
            return $res;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    public static function supprimer($id)
    {
        try {
            $req = "delete from staff where  id=:id";
            $stmt = self::connection()->prepare($req);
            if ($stmt->execute(array(
                ":id" => $id
            ))) {
                return "ok";
            } else {
                return "no";
            }
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

}
