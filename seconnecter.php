<!DOCTYPE html>
<html>
  <head>
      <title>Se connecter</title>
      <meta charset="utf-8">
       <!--lien du fichier CSS --> 
       <link rel="stylesheet" href="seconnecter.css">
       <!--lien du fichier CSS du BOOTSTRAP -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="titre">Se Connecter</h1>
  <div id="container">
  
        <form action="traitement1.php" method="POST">
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_POST['erreur'])){
                    $err = $_POST['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>

</body>
</html>