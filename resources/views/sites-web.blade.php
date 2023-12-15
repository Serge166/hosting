<section id="sites-web">
    <section id="courtier">
        <style>
            .pricingTable{
    color: #fff;
    background-color: #294046;
    font-family: 'Roboto Condensed', sans-serif;
    text-align: center;
    margin: 0 15px 80px;
    position: relative;
}
.pricingTable:before,
.pricingTable:after{
    content: "";
    background: #294046;
    width: 100%;
    height: 65px;
    position: absolute;
    bottom: -65px;
    left: 0;
    z-index: 1;
    clip-path: polygon(0 0, 100% 0, 100% 0%, 50% 100%, 0% 0%);
}
.pricingTable:after{
    background: #ee184e;
    width: 90%;
    height: 80px;
    transform: translateX(-50%);
    bottom: -80px;
    left: 50%;
    z-index: 0;
    clip-path: polygon(0 0, 100% 0, 100% 25%, 50% 100%, 0% 25%);
}
.pricingTable .pricingTable-header{ padding: 15px 0 12px; }
.pricingTable .title{
    font-size: 35px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 0 23px;
    margin: 0;
    display: inline-block;
    position: relative;
}
.pricingTable .title:before,
.pricingTable .title:after{
    content: "";
    background: #fff;
    width: 10px;
    height: 10px;
    border-radius: 50px;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 0;
}
.pricingTable .title:after{
    left: auto;
    right: 0;
}
.pricingTable .price-value{
    background: #ee184e;
    padding: 15px 0 13px;
    margin: 0 -15px;
    position: relative;
}
.pricingTable .price-value:before,
.pricingTable .price-value:after{
    content: "";
    background: linear-gradient(to right top, transparent 49%, #a31330 50%);
    width: 15px;
    height: 15px;
    position: absolute;
    bottom: -15px;
    left: 0;
}
.pricingTable .price-value:after{
    transform: rotateY(180deg);
    left: auto;
    right: 0;
}
.pricingTable .price-value .amount{
    font-size: 50px;
    font-weight: 700;
    line-height: 40px;
    display: inline-block;
}
.pricingTable .price-value .amount-sm{
    font-size: 25px;
    font-weight: 700;
    vertical-align: top;
    margin: -5px 0 0;
    display: inline-block;
}
.pricingTable .pricing-content{
    padding: 20px 0;
    margin: 0;
    list-style: none;
}
.pricingTable .pricing-content li{
    background: #1f3135;
    font-size: 17px;
    line-height: 33px;
    text-transform: uppercase;
    margin-bottom: 20px;
}
.pricingTable .pricing-content li:last-child{ margin: 0; }
.pricingTable .pricing-content li.disable{ color: #526164; }
.pricingTable .pricingTable-signup a{
    color: #fff;
    background: #ee184e;
    font-size: 25px;
    font-weight: 700;
    line-height: 45px;
    text-transform: uppercase;
    padding: 6px 25px;
    transition: all 0.3s;
}
.pricingTable .pricingTable-signup a:hover{
    text-shadow: -2px 2px 1px #000;
    box-shadow: 0 0 15px #000;
}
.pricingTable.blue:after,
.pricingTable.blue .price-value,
.pricingTable.blue .pricingTable-signup a{
    background: #01B4C8;
}
.pricingTable.blue .price-value:before,
.pricingTable.blue .price-value:after{
    background: linear-gradient(to right top,transparent 49%, #005AC1 50%);
}
.pricingTable.green:after,
.pricingTable.green .price-value,
.pricingTable.green .pricingTable-signup a{
    background: #05c46b;
}
.pricingTable.green .price-value:before,
.pricingTable.green .price-value:after{
    background: linear-gradient(to right top,transparent 49%, #058c4d 50%);
}
@media only screen and (max-width: 990px){
    .pricingTable{ margin: 0 15px 100px; }
}
        </style>

<div class="demo">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">Sites Web</h3>
            <p class="section-description">Consultez nos packages</p>
          </div>

        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="title">Simplicité</h3>
                    </div>
                    <div class="price-value">
                        <span class="amount">$995</span>
                        <span class="amount-sm">95</span>
                    </div>
                    <ul class="pricing-content">
                        <li>Ajout du logo et liens vers compte réseaux sociaux</li>
                        <li>Optimisation et référencement dans les moteur de recherche (Google,Bing)</li>
                        <li>Hébergement et nom de domaine offert pendant un an</li>
                        <li>Site web personnalisable et modifiable (Couleurs, images, dispositions)</li>
                        <li>Tableau de bord administrateur avec les statistiques utilisateurs</li>
                        <li>Statistique des consultations des propriétés</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Choisir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable blue">
                    <div class="pricingTable-header">
                        <h3 class="title">Premium</h3>
                    </div>
                    <div class="price-value">
                        <span class="amount">$1495</span>
                        <span class="amount-sm">95</span>
                    </div>
                    <ul class="pricing-content">
                            <li>Ajout du logo et liens vers compte réseaux sociaux</li>
                            <li>Optimisation et référencement dans les moteur de recherche (Google,Bing)</li>
                            <li>Hébergement et nom de domaine offert pendant un an</li>
                            <li>Site web personnalisable et modifiable (Couleurs, images, dispositions)</li>
                            <li>Tableau de bord administrateur avec les statistiques utilisateurs</li>
                            <li>Statistique des consultations des propriétés</li>
                            <li>Création des comptes utilisateurs</li>
                            <li>Outils de calcul (Calculatrice de crédit immobilier, Calcul de l’hypothèque, évaluation et alerte immobilière)</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Choisir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable green">
                    <div class="pricingTable-header">
                        <h3 class="title">Pro</h3>
                    </div>
                    <div class="price-value">
                        <span class="amount">$1995</span>
                        <span class="amount-sm">95</span>
                    </div>
                    <ul class="pricing-content">
                            <li>Ajout du logo et liens vers compte réseaux sociaux</li>
                            <li>Optimisation et référencement dans les moteur de recherche (Google,Bing)</li>
                            <li>Hébergement et nom de domaine offert pendant un an</li>
                            <li>Site web personnalisable et modifiable (Couleurs, images, dispositions)</li>
                            <li>Tableau de bord administrateur avec les statistiques utilisateurs</li>
                            <li>Statistique des consultations des propriétés</li>
                            <li>Création des comptes utilisateurs</li>
                            <li>Outils de calcul (Calculatrice de crédit immobilier, Calcul de l’hypothèque, évaluation et alerte immobilière)</li>
                            <li>Création des comptes pour courtiers et/ou agence immobilière</li>
                            <li>Intégration des outilsTableau de bord administrateur avec les statistiques utilisateurs, courtiers </li>
                            <li>Tracking Google</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Choisir</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="box">
                  <div class="icon"><a href="#services"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="green" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
                    <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                  </svg></a></div>
                  <h4 class="title">Retour</h4>
                </div>
              </div>
        </div>
    </div>
</div>
    </section>

</section>
