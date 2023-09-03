<?php
//echo __DIR__;

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;

    private $error;

    public function __construct() {
        //set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(PDO::ATTR_PERSISTENT=>true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

        //create PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
//            print_r($this->dbh);
        } catch(PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
    //prepare statement with query
    public function query($sql) {
        $this->stmt = $this->dbh->prepare($sql);
    }

    //bind values
    //value is the actual value of the parameter
    //param is a named parameter :value
    public function bind($param, $value, $type = null){
        if(is_null($type)) {
            switch(true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                //if none of these are true, make it a string
                default:
                    $type = PDO::PARAM_STR;

            }
        }
        $this->stmt->bindValue($param, $value, $type);

    }

    //execute the prepared statement
    public function execute() {
        return $this->stmt->execute();
    }
    //get a result set which is an array, we will call fetchall
    //get single row, so we'll came fetch
    //get result set as array of objects
    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        //gets array of objects
    }
    public function single(){
        //get a single row/record as object
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    //get row count
    public function rowCount(){
        return $this->stmt->rowCount();
    }
}

?>