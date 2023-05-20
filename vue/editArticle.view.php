<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit article</title>
</head>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-top: 100px;
}
h2{
    
}
a {
    color: #0d6efd;
    text-decoration: none;
}
section{
    display: inline;
}
</style>
<body>
    

    <span >ajoutez des articles au Retour <b><span id="id_ret" ><?php  echo $id_retour;?></b></span></span>

    <form  method="GET" action="" name="add">
    <div><h2>Ajoutez des articles au Retour : <h2><p id="id_ret"><?php  echo $id_retour;
        ?></p></div>
    <div class="container">
    <form  id="formulaire"  class="row g-3" method="GET" action="" name="add">
    <input type="hidden" name="id_article" value="<?= $valeurs['id_article'] ?? '' ?>">

        <div class="col-md-6">
            <label for="inputNom" class="form-label">Article: </label>
            <input type="text" name="nom_article" class="form-control" id="nom_article" value="<?= $valeurs['nom_article'] ?? '' ?>">
          <span class="text-danger"><?= $erreurs['nom_article'] ?? '' ?></span>
        </div>

        <div class="col-12">
            <label for="inputQuantite" class="form-label">Quantité</label>
            <input type="number"  name="quantite" class="form-control" id="inputQuantite" placeholder="1" min="1" value="<?= htmlentities($valeurs['quantite'] ?? '') ?>">
            <div id="erreur-quantite" class="text-danger"></div>
            <span class="erreur"><?= $erreurs['quantite'] ?? '' ?></span>


        </div>

        <div class="col-md-6">
            <label for="inputMontant"  class="form-label"  >Montant</label>
            <input type="number" required name="montant_piece" class="form-control"
            min="0.00" step="0.10" placeholder="0.00" id="inputMontant" value="<?= htmlentities($valeurs['montant_piece'] ?? '') ?>">
            <span class="input-group-text">€</span>
            <div id="erreur-montant" class="text_danger"></div>
            <span  class="erreur"><?= $erreurs['montant_piece'] ?? '' ?></span>


        </div>

        <div class="col-md-2">
            <select  required id="id_motif" class="form-select" aria-label="Default select example" name="id_motif" id="id_motif" value="<?= htmlentities($valeurs['id_motif'] ?? '') ?>">
                <option selected>select motif </option>
                
                <?php
                        foreach ($columns as $column) {
                            echo $column;
                        }
                        ?>
            </select>
            <div id="erreur-motif" class="text-danger"></div>
            <span class="erreur"><?= $erreurs['id_motif'] ?? '' ?></span>

            <!-- // input hidden pour recupere le id_retour -->
            <input type="text" style="visibility: hidden;" id="id_retour" 
            name="id_retour" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></input>
        </div>
        <section>
            <label>&nbsp;</label>
            <div>
                <input type="submit" id="valider"  name="valider" value="valider" />
                <a href="../controleur/retourAdmin.php">

                &emsp;
                <input type="submit" id="annuler" name="annuler" value="Annuler" />
                <a href="../controleur/retourAdmin.php">
            </div>

        </section>
</form>
</div>
<script>
    // recuperer id_retour de retourAdmin.php et l'envoyer a edistArticle.php
    valeur= document.getElementById('id_ret').innerHTML
    document.getElementById('id_retour').value=valeur; 
/* 
document.getElementById('valider').onclick=function (event){
    
            let valide = true;
            document.querySelector('#erreur-nom').innerHTML = '';
            document.querySelector('#erreur-quantite').innerHTML = '';
            document.querySelector('#erreur-montant').innerHTML = '';
            document.querySelector('#erreur-motif').innerHTML = '';
        

            const REGEX_NOM = /^[a-zA-Z]{2,50}$/;
            const REGEX_QUANTITE = /^([1-9]|[1-9][0-9]{1,3}|10000)(\.[0-9]+)?$/;
            const REGEX_MONTANT = /^(?:\p{Sc}\s*)?([1-9]\d*|0)(?:\.\d{1,2})?(?:\s*\p{Sc})?$/;

        

            if (!document.getElementById('nom_article').value.match(REGEX_NOM)) {
                valide = false;
                document.getElementById('erreur-nom').innerHTML = 'Le nom est obligatoire et doit contenir entre 2 et 25 lettres.';
            }

            if (!document.getElementById('inputQuantite').value.match(REGEX_QUANTITE)) {
                valide = false;
                document.getElementById('erreur-quantite').innerHTML = 'La quantité est obligatoire et doit être un nombre positif inférieur ou égal à 1000.';
            }

            if (!document.getElementById('inputMontant').value.match(REGEX_MONTANT)) {
                valide = false;
                document.getElementById('erreur-montant').innerHTML = "Le montant est invalide.";
            }

            if (document.getElementById('id_motif').value="select motif") {
                valide = false;
                document.getElementById('erreur-motif').innerHTML = 'Le motif est obligatoire.';
            }

            if (!valide) {
                // permet de ne pas submit le formulaire si on utilise la fonction addEventListener
                console.log("arret l'/excution" )
                event.preventDefault();
            }

            return valide;
        };  */

</script>
</body>
</html>