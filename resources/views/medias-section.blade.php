<section id="medias">
    <style>
        :root{
    --color1: #E81F55;
    --color2: #F37697;
}

.pricingTable{
    color: #fff;
    background: repeating-linear-gradient(15deg,#f5f5f5, #f5f5f5 20px,#fff 20px,#fff 30px);
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    padding: 0 0 30px;
    border-radius: 30px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
}
.pricingTable .pricingTable-header{
    background: linear-gradient(45deg,var(--color1) 50%,var(--color2) 50%);
    padding: 18px;
    border-radius: 30px 30px 0 0;
}
.pricingTable .title{
    font-size: 42px;
    font-weight: 600;
    text-transform: uppercase;
    text-shadow: 0 0 10px rgba(0,0,0,0.3);
    margin: 0;
}
.pricingTable .price-value{
    background: linear-gradient(131deg,var(--color2) 50%,var(--color1) 50%);
    text-shadow: 0 0 10px rgba(0,0,0,0.3);
    padding: 10px;
    margin: 0 0 30px;
}
.pricingTable .price-value .amount{
    font-size: 55px;
    line-height: 70px;
}
.pricingTable .price-value .amount-sm{
    font-size: 30px;
    vertical-align: top;
}
.pricingTable .pricing-content{
    padding: 0;
    margin: 0 0 30px;
    list-style: none;
}
.pricingTable .pricing-content li{
    color: #666;
    font-size: 17px;
    font-weight: 500;
    line-height: 30px;
    padding: 5px 10px;
    border-bottom: 2px solid #DFDFE0;
    margin: 0 0 5px;
}
.pricingTable .pricing-content li:last-child{ margin: 0; }
.pricingTable .pricingTable-signup a{
    color:#fff;
    background: var(--color1);
    font-size: 20px;
    font-weight: 600;
    text-transform: capitalize;
    padding: 4px 24px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    display: inline-block;
    transition: all 0.3s ease-in-out;
}
.pricingTable .pricingTable-signup a:hover{ text-shadow: 8px 8px 3px rgba(0,0,0,0.5); }
.pricingTable.blue{
    --color1: #10A1B4;
    --color2: #62C2CE;
}
.pricingTable.green{
    --color1: #9ACB3C;
    --color2: #BCDE80;
}
@media only screen and (max-width: 990px){
    .pricingTable{ margin: 0 0 40px; }
}
    </style>
    <div class="demo">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Gesion des médias sociaux</h3>
                <p class="section-description">Consultez nos services et produits</p>
              </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Standard</h3>
                        </div>
                        <div class="price-value">
                            <span class="amount">$790</span>
                            <span class="amount-sm">.00/mois</span>
                        </div>
                        <ul class="pricing-content">
                            <li>Stratégie de marketing des médias sociaux - Inclus</li>
                            <li>Analyse concurrentielle des médias sociaux - Inclus</li>
                            <li>Analyse de la réputation de la marque - Inclus</li>
                            <li>Audit + Recommandations - Inclus</li>
                            <li>Surveillance quotidienne des actifs sociaux - Inclus</li>
                            <li>Configuration et optimisation du réseau</li>
                            <li>48 heures ouvrables ou moins de temps de réponse client - Inclus</li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a href="#">Je m'abonne</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable blue">
                        <div class="pricingTable-header">
                            <h3 class="title">Pro</h3>
                        </div>
                        <div class="price-value">
                            <span class="amount">$1990</span>
                            <span class="amount-sm">.00/mois</span>
                        </div>
                        <ul class="pricing-content">
                            <li>Stratégie de marketing des médias sociaux - Inclus</li>
                            <li>Analyse concurrentielle des médias sociaux - Inclus</li>
                            <li>Analyse de la réputation de la marque - Inclus</li>
                            <li>Audit + Recommandations - Inclus</li>
                            <li>Surveillance quotidienne des actifs sociaux - Inclus</li>
                            <li>Configuration et optimisation du réseau</li>
                            <li>48 heures ouvrables ou moins de temps de réponse client - Inclus</li>
                            <li>Rapports et analyses mensuels standard</li>
                            <li>Accès aux documents marketing avec SharePoint</li>
                            <li>Conception/optimisation des photos de couverture et des photos de profil </li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a href="#">Je m'abonne</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable green">
                        <div class="pricingTable-header">
                            <h3 class="title">Premium</h3>
                        </div>
                        <div class="price-value">
                            <span class="amount">$3290</span>
                            <span class="amount-sm">.00/mois</span>
                        </div>
                        <ul class="pricing-content">
                            <li>Stratégie de marketing des médias sociaux - Inclus</li>
                            <li>Analyse concurrentielle des médias sociaux - Inclus</li>
                            <li>Analyse de la réputation de la marque - Inclus</li>
                            <li>Audit + Recommandations - Inclus</li>
                            <li>Surveillance quotidienne des actifs sociaux - Inclus</li>
                            <li>Configuration et optimisation du réseau</li>
                            <li>48 heures ouvrables ou moins de temps de réponse client - Inclus</li>
                            <li>Rapports et analyses mensuels standard</li>
                            <li>Accès aux documents marketing avec SharePoint</li>
                            <li>Conception/optimisation des photos de couverture et des photos de profil </li>
                            <li>Accès au calendrier éditorial Immonivo et aux outils de publication de contenu</li>
                            <li>Intégration des oAccès aux outils de concours de médias sociaux Immonivo utils de tracking Google et Facebook</li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a href="#">Je m'abonne</a>
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
    <hr>
    
</section>
