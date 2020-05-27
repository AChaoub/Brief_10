<?php
    include('header.php');  
?>



<?php
$filtre;
    if(isset($_POST["TS"])){
        $filtre = "TS"; 
    }
    $filtre;
    if(isset($_POST["PL"])){
        $filtre = "PL"; 
    }
    else if(isset($_POST["BVP"])){
        $filtre = "BVP";
    }
    else if(isset($_POST["CTP"])){
        $filtre = "CTP";
    }
    else if(isset($_POST["FL"])){
        $filtre = "FL";
    }
    else if(isset($_POST["S"])){
        $filtre = "S";
    }
    else if(isset($_POST["ES"])){
        $filtre = "ES";
    }
    else if(isset($_POST["ESL"])){
        $filtre = "ESL\r\n";
        $filtre_img = "ESL";
    }
    
    else if(isset($_POST["B"])){
        $filtre = "B";
    }
    else if(isset($_POST["BB"])){
        $filtre = "BB";
    }
    else if(isset($_POST["HBP"])){
        $filtre = "HBP";
    }
    else if(isset($_POST["HBP"])){
        $filtre = "HBP";
    }
    else if(isset($_POST["E"])){
        $filtre = "E";
    }
    else if(isset($_POST["A"])){
        $filtre = "A";
    }
    else if(isset($_POST["ML"])){
        $filtre = "ML";
    }
    if($filtre !="ESL\r\n"){
        echo '<div class="ImgPrincipale" style="height:100px;width:100%;background-image: url(../img/ImgPrincipaleProduit/'.$filtre.'.png);">
        </div>';
    }
    else{
        echo '<div class="ImgPrincipale" style="height:100px;width:100%;background-image: url(../img/ImgPrincipaleProduit/'.$filtre_img.'.png);">
        </div>';
    }
    
     
    if($filtre !="TS"){
        $sql = "SELECT * FROM produit ,categorie where produit.Id_categorie = categorie.Id_categorie and categorie.Description_categorie ='$filtre'";
    }
    else{
        $sql = "SELECT * FROM produit";

    }
    
                // Connexion à la base de données
                try
                {
                    $bdd = new PDO('mysql:host=localhost;dbname=bd_brief9;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }

                // Récupération des 10 derniers messages
                $reponse = $bdd->query($sql);

                // Affichage de chaque Produits 
                echo '<form method="post" >
                <div id="ZoneProduits">';
                while ($ligne = $reponse->fetch())
                {
                    echo'<div class="produit">
                    
                    <div class="imgs">
                        <img src="../img/Produits/'.$ligne['Image_produit'].'.jfif" alt="">
                    </div>
                    <div class="desc">
                        <p>'.$ligne['Description_produit'].'</p>
                    </div>
                    <div class="Prix">
                        <p>'.$ligne['Prix_produit']."$".'</p>
                        <div class="produit_commande_cible-Manipulation">
                        
                                <div style="display: none;" class="produit_commande_cible--IdProduit prodTEXT">'.$ligne['Id_produit'].'</div>
                                <div style="display: none;" class="produit_commande_cible--prixFixe prodTEXT">'.$ligne['Prix_produit'].'</div>
                                <div class="produit_commande_cible--prix prodTEXT">0</div>
                                <div id="5" class="produit_commande_cible--qte- prodBTN"><button  class="class_btn_minus">-</button></div>
                                <div  id="l9itha"class="produit_commande_cible--qteNumber prodTEXT">0</div>
                                <div id="6" class="produit_commande_cible--qte+ PDQPLUS prodBTN" name="name_btn_plus"><button  class="id_btn_plus">+</button></div>
                               
                                
                        </div>
                    </div>
                </div>';
                }
                echo '</div></form>';
                $reponse->closeCursor();

               ?>

 
                      


<?php
    include('footer.php');
    include('script.php');

?>

