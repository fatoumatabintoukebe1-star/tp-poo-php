<?php 
require_once "Affichable.php";
require_once "Authentifiable.php";
require_once "Personne.php";
require_once "Utilisateur.php";
require_once "Client.php";
require_once "Employe.php";
require_once "Administrateur.php";



$client = new Client(1, "Fatou", "fatou@mail.com", "fatou123", "pass", "premium");
$employe = new Employe(2, "Ali", "ali@mail.com", "ali123", "pass", 200000);
$admin = new Administrateur(3, "Admin", "admin@mail.com", "admin123", "pass");

echo "<h3>Affichage :</h3>";
$client->afficher();
echo "<br>";

$employe->afficher();
echo "<br>";

$admin->afficher();
echo "<br>";

echo "<h3>Connexion :</h3>";
$client->seConnecter();
echo "<br>";

echo "<h3>Réduction :</h3>";
echo "Réduction client : " . $client->calculerReduction(10000);
echo "<br>";

echo "<h3>Salaire :</h3>";
echo "Salaire annuel employé : " . $employe->calculerSalaireAnnuel();
echo "<br>";

echo "<h3>Polymorphisme :</h3>";

function afficherUtilisateur(Affichable $u) {
    $u->afficher();
}

afficherUtilisateur($Client);
echo "<br>";

afficherUtilisateur($Employe);
echo "<br>";

afficherUtilisateur($Administrateur);
echo "<br>";

echo "<h3>Nombre d'utilisateurs :</h3>";
Utilisateur::afficherNombre();
?>