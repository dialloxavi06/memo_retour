function casherTableArticle() {
    const allClassArticle = document.getElementsByClassName("article");
    let result = "document.getElementsByClassName('article')";
    for (let i = 0; i < allClassArticle.length; i++) {
        result += `\n  ${allClassArticle[i].style.display = 'none'}`;
    }
}

function confirmerAvantEffacer() {
    res = confirm('Etes-vous sûr de vouloir supprimer ce retour ?')
    if (res === false) {
        document.getElementById('supp').href = " "
        header("Refresh:0");
    } else header("Refresh:0");
}

///** */
function getIdRetour(valeur){
    console.log(valeur)
    document.getElementById('id_retour_modif_statut').value=valeur
}
///** */
///** */

///** */









