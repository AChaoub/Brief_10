$(function () {
        
       
    calcul_price();
    //diminue quantité
 
        $(".produit_commande_cible--qte-NEW").on('click', function (e) {
          
            var number = Number($(this).next('.produit_commande_cible--qteNumber').text());
            if(number>0)
            {
                number--;
                var prix = Number($(this).prev().prev('.produit_commande_cible--prixFixe').text());
                var expression =prix*number.toFixed(2);
                $(this).prev('.produit_commande_cible--prix').text((expression).toFixed(2));
                $(this).next('.produit_commande_cible--qteNumber').text(number);
                $(this).next('.produit_commande_cible--qteNumber').text(number);
                $(this).html("<button class='id_btn_plus'>-</button>");
                $(this).next().next('.PDQPLUSNEW').html("<button class='id_btn_plus'>+</button>");
            }
            else
            {
                  number++;
                $(this).html("<button  class='class_btn_minus'><i style='color:red;' class='fas fa-trash-alt'></i></button>");
                $(this).next('.produit_commande_cible--qteNumber').text("0");
            }
            remplir_panier();
            calcul_price();
            Send_data();
        
     
    
        });

        // auguement quantité
        $(".PDQPLUSNEW").on('click', function (e) {
           
             
            var number = Number($(this).prev('.produit_commande_cible--qteNumber').text());
            if(number<4 )
            {
                number++;
                var prix = Number($(this).prev().prev().prev().prev('.produit_commande_cible--prixFixe').text());
                $(this).prev().prev().prev('.produit_commande_cible--prix').text((prix*number).toFixed(2));
                $(this).prev('.produit_commande_cible--qteNumber').text(number);
                $(this).html("<button class='id_btn_plus'>+</button>");
                $(this).prev().prev('.produit_commande_cible--qte-NEW').html("<button class='id_btn_plus'>-</button>");
            }
            else
            {
                  number--;
                $(this).html("<button style='disabled:true;' class='id_btn_plus'><i style='color:red;' class='far fa-hand-paper'></i></button>");
               
                

            }
            remplir_panier();
            calcul_price();
            Send_data();
           
    
        });
        
       



});

function calcul_price() {
    var totalPrix = document.getElementsByClassName('container_body_right--rightInfos_prix');


    var allPrices = document.getElementsByClassName('produit_commande_cible--prix');
    var allQTE = document.getElementsByClassName('produit_commande_cible--qteNumber');

    var sommePrix = 0;


    for (var i = 0; i < allPrices.length; i++) {
        sommePrix += (Number(allPrices[i].innerHTML));

        // sommePrix = sommePrix + (Number(allPrices[i].innerHTML)*Number(allQTE[i].innerHTML)) ;
        
    }
    // sommePrix+="€";   

    totalPrix[0].innerHTML = Number(sommePrix.toFixed(2));
    totalPrix[1].innerHTML = Number(sommePrix.toFixed(2));
    livraison_msg(sommePrix);
    return 1;


}
function Send_data()
   {
       var allID  = document.getElementsByClassName('IDproduit_commande');

       var ALLQTE = document.getElementsByClassName('QTEPROD');

       var hiddenID=document.getElementById('HiddenIDS');

       var hiddenQte=document.getElementById('HiddenQTES');

     
    hiddenID.value="";
    hiddenQte.value="";

       for(var i=0;i<allID.length;i++)
       {
         hiddenID.value+="|"+allID[i].innerHTML;
         hiddenQte.value+="|"+ALLQTE[i].innerHTML;
        
        
       }
       console.log(hiddenID.value);
       console.log(hiddenQte.value);

       
   }
   console.log("tested");

function livraison_msg(prix) {
    var div_toDisplay = document.getElementsByClassName('div_livraison');
    if (prix >= 20) {
        div_toDisplay[0].style.visibility = "hidden";
    } else {
        div_toDisplay[0].style.visibility = "visible";
    }
     

}
   