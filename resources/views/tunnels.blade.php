<section id="tunnels">
    <style>
        :root{
    --main-color: #ff6348;
    --header-color : #ff7f50;
}
.pricingTable{
    background: radial-gradient(#fff,#f9f9f9,#eee);
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    padding: 0 0 35px;
    border-radius: 25px;
    box-shadow: 5px 0 10px rgb(0 0 0 / 30%);
}
.pricingTable .pricingTable-header{
    color: #fff;
    background: var(--header-color);
    padding: 35px 20px 0;
    border-radius: 25px 25px 0 0;
    margin: 0 0 50px;
}
.pricingTable .price-value .currency{
    font-size: 35px;
    font-weight: 300;
    line-height: 35px;
    vertical-align: top;
    display: inline-block;
}
.pricingTable .price-value .amount{
    font-size: 58px;
    font-weight: 700;
    line-height: 45px;
    display: inline-block;
}
.pricingTable .price-value .duration{
    font-size: 18px;
    font-weight: 400;
    letter-spacing: 1px;
    margin: 0 0 0 -5px;
    display: inline-block;
}
.pricingTable .title{
    color:#fff;
    background: var(--main-color);
    font-size: 30px;
    font-weight: 400;
    text-transform: uppercase;
    padding: 5px 20px;
    margin: 0;
    border-radius: 5px;
    display: inline-block;
    transform: translateY(25px);
}
.pricingTable .pricing-content{
    text-align: left;
    padding: 0;
    margin: 0 0 30px;
    list-style: none;
    display: inline-block;
}
.pricingTable .pricing-content li{
    color: #666;
    font-size: 17px;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 35px;
    padding: 0 0 0 35px;
    margin: 0 0 5px;
    position: relative;
}
.pricingTable .pricing-content li:last-child{ margin: 0; }
.pricingTable .pricing-content li:before{
    content: "\f00c";
    color: #fff;
    background: var(--main-color);
    font-family: "Font Awesome 5 free";
    font-size: 14px;
    font-weight: 900;
    text-align: center;
    line-height: 23px;
    width: 23px;
    height: 23px;
    border-radius: 50%;
    position: absolute;
    top: 7px;
    left: 0;
}
.pricingTable .pricing-content li.disable:before{
    content: "\f00d"; 
    background: #ddd;
}
.pricingTable .pricingTable-signup a{
    color: var(--main-color);
    font-size: 23px;
    font-weight: 700;
    line-height: 25px;
    text-transform: uppercase;
    padding: 12px 50px;
    border-radius: 15px;
    border: 2px solid var(--main-color);
    display: inline-block;
    transition: all 0.3s ease;
}
.pricingTable .pricingTable-signup a:hover{
    color: #fff;
    background: var(--main-color);
    box-shadow: 10px 10px 0 4px rgba(0,0,0,0.1);
}
.pricingTable.pink{
    --main-color: #ff4757;
    --header-color: #ff6b81;
}
.pricingTable.blue{
    --main-color: #2932df;
    --header-color: #5b5bfa;
}
@media only screen and (max-width: 990px){
    .pricingTable{ margin: 0 0 40px; }
}
    </style>
<div class="demo">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">Tunnels de vente</h3>
            <p class="section-description">Consultez nos packages</p>
          </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <div class="price-value">
                            <span class="currency">$</span>
                            <span class="amount">1995.95</span>
                            <span class="duration">/5 jours</span>
                        </div>
                        <h3 class="title">Optin</h3>
                    </div>
                    <ul class="pricing-content">
                        <li>Analyse des besoins</li>
                        <li>gestion de l'agenda(  planifier et organiser)</li>
                        <li>Capture d’information</li>
                        <li>Gerer et Catégorisé les leads</li>
                        <li>Création de page de contenu</li>
                        <li>Création d’une page de vente</li>
                        <li>Création d’un bon de commande</li>
                        <li>Mise en place du upsell, downsell et orderbump</li>
                        <li>Création de votre espace membre</li>
                        <li>Assistance tecnique pendant 5 jours</li>
                        <li>Optimisation SEO et Design & visuels attractifs</li>
                        <li>Intégration d’images et images</li>
                        <li>Intégration du pixel Facebook</li>
                        <li>Gestion des appels  et des rendez-vous</li>
                        <li>Gestion des clients et du CRM</li>
                        <li>Rebooking et Suivi</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Je m'abonne</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable pink">
                    <div class="pricingTable-header">
                        <div class="price-value">
                            <span class="currency">$</span>
                            <span class="amount">4995.95</span>
                            <span class="duration">/14jours</span>
                        </div>
                        <h3 class="title">Upsell</h3>
                    </div>
                    <ul class="pricing-content">
                        <li>Analyse des besoins</li>
                        <li>gestion de l'agenda(  planifier et organiser)</li>
                        <li>Capture d’information</li>
                        <li>Gerer et Catégorisé les leads</li>
                        <li>Création de page de contenu</li>
                        <li>Création d’une page de vente</li>
                        <li>Création d’un bon de commande</li>
                        <li>Mise en place du upsell, downsell et orderbump</li>
                        <li>Création de votre espace membre</li>
                        <li>Assistance tecnique pendant 5 jours</li>
                        <li>Optimisation SEO et Design & visuels attractifs</li>
                        <li>Intégration d’images et images</li>
                        <li>Intégration du pixel Facebook</li>
                        <li>Gestion des appels  et des rendez-vous</li>
                        <li>Gestion des clients et du CRM</li>
                        <li>Rebooking et Suivi</li>
                        <li>Création de plusieurs mockups/visuels pour représenter votre offre</li>
                        <li>Page Upsell</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Je m'abonne</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable blue">
                    <div class="pricingTable-header">
                        <div class="price-value">
                            <span class="currency">$</span>
                            <span class="amount">7995.95</span>
                            <span class="duration">/5 semaines</span>
                        </div>
                        <h3 class="title">Premium</h3>
                    </div>
                    <ul class="pricing-content">
                        <li>Analyse des besoins</li>
                        <li>gestion de l'agenda(  planifier et organiser)</li>
                        <li>Capture d’information</li>
                        <li>Gerer et Catégorisé les leads</li>
                        <li>Création de page de contenu</li>
                        <li>Création d’une page de vente</li>
                        <li>Création d’un bon de commande</li>
                        <li>Mise en place du upsell, downsell et orderbump</li>
                        <li>Création de votre espace membre</li>
                        <li>Assistance tecnique pendant 5 jours</li>
                        <li>Optimisation SEO et Design & visuels attractifs</li>
                        <li>Intégration d’images et images</li>
                        <li>Intégration du pixel Facebook</li>
                        <li>Gestion des appels  et des rendez-vous</li>
                        <li>Gestion des clients et du CRM</li>
                        <li>Rebooking et Suivi</li>
                        <li>Création de plusieurs mockups/visuels pour représenter votre offre</li>
                        <li>Page Upsell</li>
                        <li>Création de pop-up opt-in (de sortie) et Page de remerciement</li>
                        <li>Formulaire de paiement optimisé et Créations de visuels</li>
                        <li>Intégration des outils de tracking Google et Facebook</li>
                        <li>Espace membre pour vos formations ou cours en ligne</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Je m'abonne</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-6 wow fadeInRight" data-wow-delay="0.6s">
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