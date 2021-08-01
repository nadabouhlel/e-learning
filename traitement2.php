
<?php
session_start();
if(isset($_POST['nomcompletP']) && isset($_POST['email']) && isset($_POST['numtel']) && isset($_POST['nomcompletE']) && isset($_POST['ddn']) 
&& isset($_POST['motdepass']) && isset($_POST['conmotdepass']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'utilisateur';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($db_name,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: introduction.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
// on libère l'espace mémoire alloué pour cette interrogation de la base
mysql_free_result ($requette);
mysqli_close($db); // fermer la connexion
?>