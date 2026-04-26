<?php 
require_once"Personne.php";
require_once"Authentifiable.php";
abstract class Utilisateur extends Personne implements Authentifiable{
    protected $login;
    protected $motDePasse;
    protected static $nombreUtilisateurs = 0;
public function __construct($id, $nom, $email, $login, $motDePasse){
    parent::__construct($id, $nom, $email);
    self::$nombreUtilisateurs++;

    $this->login = $login;
    $this->motDePasse = $motDePasse;
}
public function seConnecter(){
    echo "Utilisateur connecte : " . $this->login;
}
public function getLogin() {
        return $this->login;
}

public function getMotDePasse() {
        return $this->motDePasse;
}
   
public function setLogin($login) {
        $this->login = $login;
}

public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
}
public function afficherUtilisateur() {

        $this->afficherInfos();

        echo "Login : " . $this->login . "<br>";
}

 abstract public function afficherRole();
 abstract public function afficher();

public static function afficherNombre() {
    echo "Nombre d'utilisateurs : " . self::$nombreUtilisateurs;
}
}

?>