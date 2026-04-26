<?php 
function afficherUtilisateur(Affichable $u) {
    $u->afficher();
}
require_once "Client.php";
require_once "Employe.php";
require_once "Administrateur.php";
require_once "Affichable.php";

$client = new Client(1, "Fatou", "fatou@mail.com", "fatou123", "pass", "premium");
$employe = new Employe(2, "Ali", "ali@mail.com", "ali123", "pass", 200000);
$admin = new Administrateur(3, "Admin", "admin@mail.com", "admin123", "pass");

afficherUtilisateur($Client);
echo "<br>";

afficherUtilisateur($Employe);
echo "<br>";

afficherUtilisateur($Administrateur);
?>