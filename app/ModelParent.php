<?php


abstract class ModelParent
{
    //infos de connexion à la bdd
    //mysql-alex9019.alwaysdata.net
    private string $host = "localhost:3306";
    private string $dbname = "record";
    private string $user = "root";
    private string $mdp = "1234";
    private string $charset = "utf8";

    //connexion à la bdd en protégé pour être utilisé par éléments enfants
    protected $dbRecord;

    public string $table;
    public string $id;


    /**
     * recuperer connexion bdd
     */
    public function getConnexion()
    {
        $this->dbRecord=null;
        try {
            $dsn = "mysql:host=$this->host,dbname=$this->dbname,charset=$this->charset";
            $this->dbRecord = new PDO($dsn, $this->user, $this->mdp);
            $this->dbRecord->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $message) {
            echo $message->getMessage() . "<br>";
            echo $message->getCode();
            die;
        }
    }

}