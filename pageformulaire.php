<!DOCTYPE html>
<html>
    <head>
        <title>Page Formulaire </title>
        <meta>
        <link rel="stylesheet" href="pagefStyle.css" />
    </head>
   
    <body>           
        <div class="form-style-3">
           <form action="traitement2.php" method="POST">
                <fieldset><legend>Personal</legend>
                  <label for="field1"><span>Nom&Prenom Parent  <span class="required">*</span></span>
                      <input type="text" class="input-field" id="nomcompletP" name="nomcompletP" placeholder="saisie votre nom&prenom " required/></label>
                  <label for="field2"><span>Email <span class="required">*</span></span>
                      <input type="email" class="input-field"  id="email" name="email" placeholder="saisie votre email " required/></label>
                  <label for="field3"><span>Numéro de téléphone  <span class="required">*</span></span>
                      <input type="text" class="input-field"  id="numtel"name="numtel" placeholder="saisie le numéro de télephone "required /></label>
                  <label for="field1"><span>Nom&Prenom enfant  <span class="required">*</span></span>
                      <input type="text" class="input-field"  id="nomcompletE" name="nomcompletE" placeholder="saisie le nom& prenom d'enfant "required /></label>
                      <label for="field1"><span>code CIN  <span class="required">*</span></span>
                      <input type="text" class="input-field"  id="cin" name="cin" placeholder="saisie votre cin "required /></label>
                  <label for="field3"><span>Date de naissance  <span class="required">*</span></span>
                      <input type="date" class="input-field" name="ddn" id="ddn" placeholder="la date de naissence de votre enfant " required/></label>
                    <label for="field1"><span>Mot de passe  <span class="required">*</span></span>
                      <input type="password" class="input-field"  id="motdepass" name="motdepass" placeholder="saisie le mot de passe "required /></label>
                    <label for="field1"><span> Confirmation Mot de passe  <span class="required">*</span></span>
                      <input type="password" class="input-field" name="conmotdepass"  id= "conmotdepass" placeholder="confirmez votre mot de passe " required/></label>
                  <input type="submit" name="submit" value="Envoyer" >
                  <input type="reset" value="Annuler">
                </fieldset>
          </form>
      </div>
      <script> 
        function validate()
        {
             var parent = document.getElementById("nomcompletP").value;
             var enfant = document.getElementById("nomcompletE").value;
             var email = document.getElementById("email").value;
             var numtel= document.getElementById("numtel").value;
             var mdp = document.getElementById("motdepass").value;
             var dateNai = document.getElementById("ddn").value;
             var conmdp= document.getElementById("conmotdepass").value;
             
             if (parent==null || parent=="")
             {
             alert("champ invalide ");
             return false;
             }
             else if (email==null || email=="")
             {
             alert("Email invalide");
             return false;
             }else if (numtel==null || numtel=="" || (length(numtel)<8)) 
             {
             alert("numero de télephone  invalide");
             return false;
             }
             else if (dateNai==null || dateNai=="")
             {
             alert("date de naissence invalide ");
             return false;
             }
             else if(mdp.length<6)
             {
             alert("le mot de passe doit etre inférieur a 6");
             return false;
             }
             else if (mdp!=conmdp)
             {
             alert("Confirmation de mot de passe invalide ");
             return false;
             }
             else
            {
            alert("envoyer avec succes");
            }
         }
         
        </script>
  </body>
</html>
