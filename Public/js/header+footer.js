function menuOp() {
    const header = document.getElementById('#Header');
    const headerPrincipal = document.getElementById("HeaderWithoutLogo");
    const Rayons = document.getElementById("Rayons");
    const fermer = document.getElementById("btnFermer");
    const Popup = document.getElementById("Popup");
    const Div_message = document.getElementById("MessageAcc");
    const Recherche = document.getElementById("RechercheMobile");
    const afichnv = document.getElementById("CliqueSearchMobile");
    const annuler = document.getElementById("Annuler");

    let state1 = true;
    Rayons.addEventListener('click', () => {
        Popup.style.display = 'flex';
        Div_message.style.display = 'none';
        if (!state1) {
            Popup.style.display = "none";
            state1 = false;
        }
    });
    fermer.addEventListener('click', () => {
        Popup.style.display = 'none';
        Div_message.style.display = "flex";
    });


    let state2 = true;
    Recherche.addEventListener('click', () => {
        afichnv.style.display = 'flex';
        headerPrincipal.style.display = "none"
        if (!state2) {
            afichnv.style.display = "none";
            state2 = false;
        }

    });
    annuler.addEventListener('click', () => {
        headerPrincipal.style.display = "flex";
        afichnv.style.display = 'none';
    });
}




// -------------------------------------------------------------------------------------------------
function reduire_afficher() {
    const Btn_afficher = document.getElementById("btn_affich_plus");
    const Btn_moins = document.getElementById("btn_affich_moins");
    const Zone_categ = document.getElementById("Categories1");
    const Conteneur = document.getElementById("ZoneRayons");
    var resolution = window.innerWidth;

    // if (resolution <= 600) {
    //     Rayons.disabled;

    // }

    Btn_afficher.addEventListener('click', () => {

        if (resolution <= 600) {
            Conteneur.style.height = '850px';
            Zone_categ.style.height = '800px';
            Zone_categ.style.overflow = 'none';
            Btn_moins.style.display = 'flex';
            Btn_afficher.style.display = 'none';

        }
    });
    Btn_moins.addEventListener('click', () => {
        Btn_afficher.style.display = 'flex';
        Btn_moins.style.display = "none";
        Conteneur.style.height = '500px';
        Zone_categ.style.height = ' 480px';
        Zone_categ.style.overflow = 'hidden';

    });

}
menuOp();
reduire_afficher();
// ----------------------------------------------------------------------------------Partie Mehdi Chokri
var BTNplus = document.getElementsByClassName('produit_commande_cible--qte+');
var QteSpanValue = document.getElementById('id_span_qte');

var BTNminus = document.getElementsByClassName('produit_commande_cible--qte-');

BTNplus[0].addEventListener('click', () => {
    var cpt = Number(QteSpanValue.innerText);
    if (cpt < 4) {
        cpt++;
        QteSpanValue.innerText = cpt;
    } else {
        var btnValuePlus = document.getElementById('id_btn_plus');
        btnValuePlus.style.fontSize = "12";
        btnValuePlus.innerText = "M";
    }


})

BTNminus[0].addEventListener('click', () => {
    var cpt = Number(QteSpanValue.innerText);
    if (cpt > 1) {
        cpt--;
        QteSpanValue.innerText = cpt;
    } else {
        BTNminus[0].s
    }


})