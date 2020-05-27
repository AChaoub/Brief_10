<?php
    include('functions.php');
    session_start();  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header+footer.css">
    <link rel="stylesheet" href="../css/Connexion.css">
    <link rel="stylesheet" href="../css/acceuil.css">
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Jost&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div id='ImgAcc'>
        <div id="Header">
            <img id="logo" src="../img/logo.png" alt="">
            <div id="HeaderWithoutLogo">
                <div id="Rayons">
                    <img id="search" src="../img/bars.png" alt="">
                    <p>Rayons</p>
                </div>
                <div id="Recherche">
                    <input type="text" placeholder="Lait,oeufs,coca.....">
                    <button><img src="../img/search.png" alt=""></button>
                </div>
                <div id="RechercheMobile">
                    <button><img src="../img/search.png" alt=""></button>
                    <p>Recherche</p>

                </div>
                <div id="Moncompte">
                    <img id="profil" src="../img/profil.png" alt="">
                    <p>Connexion</p>
                </div>
                <form id="id_form_panier"  action="Panier.php" method="post">
                    <div id="Panier">
                    <input type="text" style="display: none;" name="QTE_SENDER" id="QTE_SENDER">
                    <input type="text" style="display: none;" name="ID_SENDER" id="ID_SENDER">
                        <button name="name_BtnPanier" id="BtnPanier">
                            <img src="../img/panier.png" alt="" id="imgpanier">
                            <p id="Paragpanier" >
                                <?php
                                    if(!isset($_SESSION['total_prix'])){
                                        echo '0';
                                    } 
                                    else{
                                        echo $_SESSION['total_prix'];
                                    }
                                ?>    
                            $</p>
                        </button>

                    </div>

                </form>
               

            </div>
            <div id="CliqueSearchMobile" style="display: none;">
                <div>
                    <div id="Recherche1">
                        <input type="text" placeholder="Lait,oeufs,coca.....">
                        <button><img src="../img/search.png" alt=""></button>
                    </div>
                    <p id="Annuler">annuler</p>
                </div>
                <div id="Panier1">
                    <button>
                        <img src="../img/panier.png" alt="">
                        <p>0,00$</p>
                    </button>
                </div>

            </div>
        </div>
        <div id="MessageAcc">
            <div id="div1">
                <p id="Bienvenue">Bienvenue :)</p>
            </div>
            <div id="message1">
                <p>Vos courses en ligne avec Carrefour</p>
            </div>
            <div><button>Je me connecte</button></div>
        </div>

    </div>
    <div id="Popup">
        <div id="Barreclose">
            <div id="Pcat">
                <p> Nos rayons</p>
            </div>
            <div id="close">
                <button id="btnFermer"><img src="../img/close.png" alt=""></button>
            </div>
        </div>
        <form action="PageProduits.php" method="POST">
            <div id="Categories">
                <button name="TS" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Selection.png" alt="">
                        <p>Toute la séléction</p>
                    </div>
                </button>
                <button name="PL" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Produits-laitiers.png" alt="">
                        <p>Produits laitiers, oeufs, fromages</p>
                    </div>
                </button>
                <button name="BVP" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Boucherie.png" alt="">
                        <p>Boucherie, volaille, poissonnerie</p>
                    </div>
                </button>
                <button name="CTP" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Charcuterie.png" alt="">
                        <p>Charcuterie, traiteur, pain</p>
                    </div>
                </button>
                <button name="FL" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Fruits-legumes.png" alt="">
                        <p>Fruits, légumes </p>
                    </div>
                </button>
                <button name="S" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Surgeles.png" alt="">
                        <p>Surgelés</p>
                    </div>
                </button>
                <button name="ES" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Epecerie.png" alt="">
                        <p>Epicerie sucrée</p>
                    </div>
                </button>
                <button name="ESL" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Epicerie-salee.png" alt="">
                        <p>Epicerie salée</p>
                    </div>
                </button>
                <button name="B" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Boissons.png" alt="">
                        <p>Boissons</p>
                    </div>
                </button>
                <button name="BB" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Bebe.png" alt="">
                        <p>BéBé</p>
                    </div>
                </button>
                <button name="HBP" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Hygiene.png" alt="">
                        <p>Hygiène, beauté, parapharmacie</p>
                    </div>
                </button>
                <button name="E" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Entretien.png" alt="">
                        <p>Entretien</p>
                    </div>
                </button>
                <button name="A" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Animalerie.png" alt="">
                        <p>Animalerie</p>
                    </div>
                </button>
                <button name="ML" class="BtnSelect" >
                    <div class="Categorie">
                        <img src="../img/Categorie/Loisirs.png" alt="">
                        <p>Aller sur le site Maison &amp; Loisirs</p>
                    </div>
                </button>
                
            </div>
        </form>
    </div>
    