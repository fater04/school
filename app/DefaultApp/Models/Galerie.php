<?php


namespace app\DefaultApp\Models;


use systeme\Model\Model;

class Galerie extends Model
{
 public $id,$image;

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
        $req = "select COUNT(*) as 'nb' from galerie ";
        $rs = $con->query($req);
        $data = $rs->fetch();
        return $data['nb'];

    }

    public function lister()
    {
        try {
            $con = self::connection();
            $req = "select *from galerie order by id desc";
            $stmt = $con->prepare($req);
            $stmt->execute();
            $res = $stmt->fetchAll(\PDO::FETCH_CLASS, __CLASS__);
            return $res;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    public static function supprimer($id)
    {
        try {
            $req = "delete from galerie where  id=:id";
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
