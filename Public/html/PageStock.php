<?php
    include('headerAdmin.php');  
?>
<br>
<h1 style="text-align:center">Mes Alerts : </h3>
<form action="" method='POST'>

<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bd_brief9;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }



    //array($Tableau_id =[]);
    $Tableau_id = array();
    $sql='SELECT * FROM produit where Quantite_Max <=20';
    $reponse = $bdd->query($sql);
    if($reponse!=null){
        while ($ligne = $reponse->fetch()){
        //array_push($ligne['Id_produit'],$Tableau_id);
        array_push($Tableau_id,$ligne['Id_produit']);
        
        echo '<div class="produit_commande_cible">
        <div class="produit_commande_cible--img">
            <img src="../img/Produits/'.$ligne['Image_produit'].'.jfif" alt="">
        </div>
        <div class="produit_commande_cible--des prodTEXT">
            <span>'.$ligne['Description_produit'].'</span>
        </div>
        <div class="produit_commande_cible--des prodTEXT">
            <span>'.$ligne['Quantite_Max'].'</span>
        </div>
        <div>
            <button class="BTNQTE" name="BTNQTE" value='.$ligne['Id_produit'].'>Augmenter Quantité</button>
        </div>
    </div>';
        }
        

    }
    echo'</form>';
    if(isset($_POST['BTNQTE'])){
        for( $i = 0 ; $i< count($Tableau_id);$i++){
            if(($_POST['BTNQTE'])==$Tableau_id[$i]){
                //echo '<script>alert("Clicked")</script>';
                $sql1 = 'UPDATE produit set Quantite_Max= 100 where Id_produit="'.$Tableau_id[$i].'"';
                $bdd->query($sql1);
            }
        }
    
    }
    


    include('footer.php');
    include('script.php');
?>


    