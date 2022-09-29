<?php


class Database{

    private $hostName = 'localhost';
    private $userName = 'root';
    private $passSql = '';
    private $dbName = 'framwork';
    private $portSql = '3306';
    private $dbh;
    private $stmt;

    public function __construct(){

        $dsn = 'mysql:host='.$this->hostName.';port='.$this->portSql.';dbname='.$this->dbName.';charset=utf8';
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->userName, $this->passSql, $options);
        } catch (PDOException $e) {
            echo "Code Error!: " . $e->getCode() . "<br/>";
            echo "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    //Cria a query
    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);
    }

    //Executa o bindValue
    public function bind($parament, $value, $type = null){
        if(is_null($type)):
            switch(true):
                case(is_int($value)):
                    PDO::PARAM_INT;
                break;
                case(is_bool($value)):
                    PDO::PARAM_BOOL;
                break;
                case(is_null($value)):
                    PDO::PARAM_NULL;
                break;
                default:
                $type = PDO::PARAM_STR;
            endswitch;
        endif;

        $this->stmt->bindValue($parament, $value, $type);
    }

    //Executa a funcao execute()
    public function execute(){
        return $this->stmt->execute();
    }

    //Retorna 1 resultado
    public function result(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //Retorna resultados
    public function results(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Retorna total resultados
    public function totalResults(){
        return $this->stmt->rowCount();
    }

    //Retorna o ultimo id cadastrado
    public function lastIdInsert(){
        return $this->dbh->lastInsertId();
    }
}

