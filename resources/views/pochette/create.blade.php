
        <form action="{{ route('pochette.store') }}" method="POST">
            @csrf
            <p>
                <label for="quantity" class="form-label">Quantité</label>
        <select name="quantity" class="form-select">
            <option value="25 - 80,00">25 à 80,00$</option>
            <option value="50 - 70,00">50 à 70,00$</option>
            <option value="100 - 145,00">100 à 145,00$</option>
            <option value="150 - 245,00">150 à 245,00$</option>
            <option value="250 - 370,00">250 à 370,00$</option>
            <option value="500 - 615,00">500 à 615,00$</option>
            <option value="1000 - 865,00">1000 à 865,00$</option>
          </select>
            </p>
            <p>
            <label for="rabats" class="form-label">Nombre de rabats</label>
            <select class="form-select" name="rabats">
            <option value="1 blanc non imprimé - 0,00">1 blanc non imprimé - 0,00$</option>
            <option value="2 blancs non imprimés - 30,00">2 blancs non imprimés - 30,00$</option>
          </select>
            </p>
            <p>
                <label for="inside_printe" class="form-label">Impression à l'intérieur</label>
        <select class="form-select" name="inside_printe">
            <option value="Sans impression intérieure - 0,00">Sans impression intérieure - 0,00$</option>
            <option value="Avec impression intérieure - 20,00">Avec impression intérieure - 20,00$</option>
        </select>
            </p>
            <p>
                <label for="choice_carton" class="form-label">Choix de carton</label>
                <select class="form-select" name="choice_carton">
                    <option value="12pts C2C - 5,00">12pts C2C - 5,00$</option>
                    <option value="14pts C2C - 15,00">14pts C2C - 15,00$</option>
                </select>
            </p>
            <p>
                <label for="infography" class="form-label">Infographie</label>
                <select class="form-select" name="infography">
                    <option value="Base-Logo + coordonnées - 50,00">Base-Logo + coordonnées - 50,00$</option>
                    <option value="Standard - 155,00">Standard - 155,00$</option>
                    <option value="Je fournis mon fichier - 0,00">Je fournis mon fichier - 0,00$</option>
                </select>
            </p>
            <p>
                <label for="advertising" class="form-label">Voulez-vous de la publicité sur votre pochette?</label>
                <select class="form-select" name="advertising">
                    <option value="oui - 0.00">oui</option>
                    <option value="non - 0.00">non</option>
                </select>
            </p>
            <p>
                <label for="livraison" class="form-label">Ramassage sur place ou livraison standard</label>
                <select class="form-select" name="livraison">
                    <option value="Ramassage sur place - 0.00">Ramassage sur place - 0,00$</option>
                    <option value="Livraison standard - 17,00">Livraison standard - 17,00$</option>
                </select>
            </p>
            <p>
                <label for="product_price" class="form-label">Prix du produit</label>
                <select class="form-select" name="product_price">
                    <option value="198.99">Prix du produit - 198,99$</option>
                </select>
            </p>
            <p>
                <button class="btn btn-success mt-2" type="submit">Valider</button>
            </p>
        </form>