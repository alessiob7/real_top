<?php
require_once "db_connect.php";
class User {    
    public $user;
    
    public function __construct($post){
        $this->user = array();
        foreach($post as $p){
            array_push($this->user,$p);
        }
        return $this->user;
    }
    public function getAttr($attr){
        return $this->user[$attr];
    }
    public function setAttr($attr,$pos){
        $this->user[$pos] = $attr;
    }
    public function getUser(){
        return $this->user;
    }
    public function save(){
        $p_encoded = base64_encode(sha1($this->getAttr(2)));
        $con = new Connection();
        $sql = "SELECT MAX(id_user) AS max_val FROM t_users;"; // ottiene l'ultimo id della tabella t_users
        $res = mysqli_query($con->c,$sql);
        $max = $res->fetch_assoc()["max_val"]; // salvo l'ultimo id in una variabile
        $max++;
        $sql  = "INSERT INTO t_users VALUES(".$max; // comincio a costruire la query
        for($i=0;$i<3;$i++){
            $sql .= ",'".$this->getAttr($i)."'"; // inserisce in coda all'id nome,cognome ed username
        }
        $sql .= ",'".$p_encoded."');"; // completa la query inserendo la password codificata
        if(mysqli_query($con->c,$sql)){
            $sql = "INSERT INTO t_utenti_info VALUES(".$max; // prepara la query di inserimento nella seconda tabella
            for($i=4;$i<9;$i++){
                $sql .= ",'".$this->getAttr($i)."'"; // completa la query della tabella con tutti i dati
            }
            $sql .=");";
            mysqli_query($con->c,$sql);
        }
            echo "<h2>Benvenuto ".$this->getAttr(0)." ".$this->getAttr(1)." (".$this->getAttr(2)."), la tua registrazione ha avuto successo!<br><br><a href='index.php'>Torna in Homepage</a>";
    }
}
