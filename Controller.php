<?php
require_once "db_connect.php";

class Controller {  
    public function getList(){
        $con = new Connection();
        $sql = "SELECT id_user,firstname,lastname,username FROM t_users;";
        $res = mysqli_query($con->c,$sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                echo "<div class='utente'>";
                echo "<img src='img/blank-avatar.png' class='avatar'>";
                echo "<br>";
                echo "<strong>Nome: </strong>".$row['firstname']."<br>";
                echo "<strong>Cognome:</strong> ".$row['lastname']."<br>";
                echo "<strong>Username: </strong>".$row['username']."<br>";
                echo "<a href='page.php?id=".$row['id_user']."' target='_blank'>Link al profilo</a>";
                echo " <a style='color:red' href='delete.php?id=".$row['id_user']."' target='_blank'>Delete!</a>";
                echo "</div>";
            }
        }else { echo "Nessun utente si è ancora registrato!"; }
        unset($con);
    }
    public function makeProfilePage($id){
        $con = new Connection();
        $sql = "SELECT t_users.id_user,t_utenti_info.id_user,firstname,lastname,username,city,gender,is_smoker,hobbies,favorite_food ";
        $sql .= "FROM t_users JOIN t_utenti_info ";
        $sql .= "WHERE t_utenti_info.id_user = ".$id." AND t_users.id_user = ".$id." ";
        $sql .= "GROUP BY t_users.id_user;";
        $res = mysqli_query($con->c,$sql);
        if($res){
            while($row = $res->fetch_assoc()){
                echo "<div id='profiletitle'>Pagina personale di ".$row["username"]."</div>";
                echo "<div id='profileimage'></div>";
                echo "<strong>Nome:</strong> ".$row["firstname"]."<br>";
                echo "<strong>Cognome:</strong> ".$row["lastname"]."<br>";
                echo "<strong>Citt&agrave;:</strong> ".$row["city"]."<br>";
                echo "<strong>Sesso:</strong> ".$row["gender"]."<br>";
                echo "<strong>Fumatore:</strong> ".$row["is_smoker"]."<br>";
                echo "<strong>Hobbies:</strong> ".$row["hobbies"]."<br>";
                echo "<strong>Favorite Food:</strong> ".$row["favorite_food"]."<br>";
                echo "<div id='resFriends'>CONTROLLO</div><br>";
                if($id != 0){
                    echo "<button id='".$row['id_user']."' class='btn btn-primary btn-lg' name='add'>Aggiungi agli amici!</button><br><br>";
                }
            }
        }else{
            echo "Errore nella query: ".mysqli_error();
        }
    }
    public function areFriends($id){
        $arefriends = false;
            $con = new Connection();
            $sql = "SELECT id_user_uno,id_user_due ";
            $sql .= "FROM t_friends_match ";
            $sql .= "WHERE id_user_uno = 0 AND id_user_due = ".$id.";";
            $res = mysqli_query($con->c,$sql);
            if($res->num_rows > 0){ // se restituisce un numero di righe != da zero, i due utenti sono già amici
                $arefriends = true; // setto a true il controllo
            }
        return $arefriends; // ritorno se siano o meno amici
    }
    public function makeFriends($id){
        $friends = false;
            if(!$this->areFriends($id)){ // se areFriends ritorna false, i due utenti non sono amici, eseguo la query
                $sql = "INSERT INTO t_friends_match ";
                $sql .= "VALUES('0','".$id."');";
                $con = new Connection();
                $res = mysqli_query($con->c,$sql);
                if($res){ // se la query va a buon fine, setto a true la variabile
                    $friends = true;
                }
            }else { $friends = true; } // se erano già amici, ritorno true ed esco dalla funzione
            return $friends;
    }
    function deleteUser($id){
        $sql = "DELETE FROM t_users WHERE id_user =".$id.";";
        $con = new Connection();
        mysqli_query($con->c,$sql);
        $sql = "DELETE FROM t_utenti_info WHERE id_user =".$id.";";
        mysqli_query($con->c,$sql);
        $sql = "DELETE FROM t_friends_match WHERE id_user_due =".$id.";";
        mysqli_query($con->c,$sql);
        echo "<h1>L'utente ".$id." &egrave; stato eliminato dal database.";
    }
}