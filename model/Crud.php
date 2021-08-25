<?php


class Crud extends ModelParent
{

    public function __construct()
    {
        $this->getConnexion();
    }


    public function trouver(){
        $sql = " SELECT *  FROM record.disc";
        $requete = $this->dbRecord->query($sql);
        return $requete->fetchAll(PDO::FETCH_OBJ);

    }

    public function listeArtiste()
    {
        $sql = "SELECT * FROM record.artist";
        $requete = $this->dbRecord->query($sql);
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


}