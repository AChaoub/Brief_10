<script>
    $(document).ready(function () {

    $(window).scroll(function () {
        
        if ($(this).scrollTop() > 50) {
            $("#Header").css("background-color", "white");
            $("#id_form_panier").css("background-color", "black");
            $("#Paragpanier").css("color", "white");
            $("#imgpanier").attr("src","../img/panier2.png");
            $("#imgpanier").css("width","45px");
            $("#imgpanier").css("height","45px");
            $("#BtnPanier").css("background-color", "black");
            


        } else {
            
            $("#id_form_panier").css("background-color", "white");
            $("#BtnPanier").css("background-color", "white");
            $("#Header").css("background-color", "tranparent");
            $("#Paragpanier").css("color", "black");
            $("#imgpanier").attr("src","../img/panier.png");
            
            
        }
    });
 
    $(function () {
        
       
    
    //diminue quantité
 
        $(".produit_commande_cible--qte-").on('click', function (e) {
          
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
                $(this).next().next('.PDQPLUS').html("<button class='id_btn_plus'>+</button>");
            }
            else
            {
                 number++;
                $(this).html("<button  class='class_btn_minus'><i style='color:red;' class='fas fa-trash-alt'></i></button>");
                $(this).next('.produit_commande_cible--qteNumber').text("0");
            }
            remplir_panier();
        
     
    
        });

        // auguement quantité
        $(".PDQPLUS").on('click', function (e) {
           
             
            var number = Number($(this).prev('.produit_commande_cible--qteNumber').text());
            if(number<4 )
            {
                number++;
                var prix = Number($(this).prev().prev().prev().prev('.produit_commande_cible--prixFixe').text());
                $(this).prev().prev().prev('.produit_commande_cible--prix').text((prix*number).toFixed(2));
                $(this).prev('.produit_commande_cible--qteNumber').text(number);
                $(this).html("<button class='id_btn_plus'>+</button>");
                $(this).prev().prev('.produit_commande_cible--qte-').html("<button class='id_btn_plus'>-</button>");
            }
            else
            {
                number--;
                $(this).html("<button style='disabled:true;' class='id_btn_plus'><i style='color:red;' class='far fa-hand-paper'></i></button>");
               
                

            }
            remplir_panier();
           
    
        });
        
       



});
})
        var allProduit=document.getElementsByClassName('produit_commande_cible--IdProduit');
        var Qte_Valide=document.getElementsByClassName('produit_commande_cible--qteNumber');
        //pour stocké les données dans des inputs invisible pour les transmettres a php
        var QTE_TOSEND =  document.getElementById('QTE_SENDER');
        var ID_TOSEND =  document.getElementById('ID_SENDER');

        var ALLprix=document.getElementsByClassName('produit_commande_cible--prix');

        var panier = document.getElementById('Paragpanier');
        var btn_clicked=document.getElementsByClassName('PDQPLUS');

 
// Modification panier
function remplir_panier()
{
 

    var id_Produits =[];

    var Qte_produits=[];

    var Prix_produits=[];

    var j=0;

    var somme=0;



for(var i=0;i<allProduit.length;i++)
{
    if((Number(Qte_Valide[i].innerHTML)>0))
    {
        // recuperation id produit seletionné from div hidden
        id_Produits[j]=allProduit[i].innerHTML;
        // le choix si on click sur plus ou moins
        
            Qte_produits[j]=Number(Qte_Valide[i].innerHTML);

            //Prix produit

            Prix_produits[j]=Number(ALLprix[i].innerHTML);

            somme+=Prix_produits[j];
             
        
       
        
        j++;
        
 
    }

}
 

        // console.log(id_Produits);
        // console.log(Qte_produits);
        // console.log(Prix_produits);
        // console.log(somme);
        panier.innerHTML=somme.toFixed(2)+"$";
        QTE_TOSEND.value=Qte_produits;
        ID_TOSEND.value=id_Produits;
        // console.log(QTE_TOSEND.value);
        // console.log(ID_TOSEND.value);



}





</script>
</body>
</html>