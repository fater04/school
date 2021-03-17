<?php
/**
 * Contact.php
 * Ecole
 * @author : fater
 * @created :  9:30 AM,3/17/2021,2021
 **/

namespace app\DefaultApp\Models;


use Delight\Auth\UnknownIdException;
use systeme\Model\Model;

class Contact extends Model
{
    private $id;
    private $nom;
    private $email;
    private $message;
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
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
        $req = "select COUNT(*) as 'nb' from contacts ";
        $rs = $con->query($req);
        $data = $rs->fetch();
        return $data['nb'];

    }

    public function lister()
    {
        try {
            $con = self::connection();
            $req = "select *from contacts order by id desc";
            $stmt = $con->prepare($req);
            $stmt->execute();
            $res = $stmt->fetchAll(\PDO::FETCH_CLASS, "app\\DefaultApp\\Models\\Contact");
            return $res;
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    public static function supprimer($id)
    {
        try {
            $req = "delete from contacts where  id=:id";
            $stmt = self::connection()->prepare($req);
            if ($stmt->execute(array(
                ":id" => $id
            ))) {
                return "ok";
            } else {
                return "no";
            }
        } catch (UnknownIdException $e) {
            return 'no';
        }
    }


}
