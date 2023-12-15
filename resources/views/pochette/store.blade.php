<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <!-- Favicons -->
 <link href="regna/img/favicon.png" rel="icon">
 <link href="regna/img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

 <!-- Bootstrap CSS File -->
 <link href="regna/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 <!-- Libraries CSS Files -->
 <link href="regna/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link href="regna/lib/animate/animate.min.css" rel="stylesheet">

 <!-- Main Stylesheet File -->
 <link href="regna/css/style.css" rel="stylesheet">
</head>
<body>

    <div class="col-lg-8 col-md-6 wow fadeInDown mx-auto" data-wow-delay="0.4s">
        <h1>Votre commande</h1>
    <div
            class="table-responsive"
        >
            <table
                class="table table-dark"
            >
                <thead>
                    <tr>
                        <th scope="col">Désignation</th>
                        <th scope="col">Options</th>
                        <th scope="col">Prix</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr class="">
                        <td scope="row">Quantité</td>
                        <td>{{$quantity_choix}}</td>
                        <td>{{$quantity_prix}}$ </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Nombre de rabats</td>
                        <td>{{$rabats_choix}}</td>
                        <td>{{$rabats_prix}}$ </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Impression intérieure</td>
                        <td>{{$inside_printe_choix}}</td>
                        <td>{{$inside_printe_prix}}$ </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Choix de carton</td>
                        <td>{{$choice_carton_choix}}</td>
                        <td>{{$choice_carton_prix}}$ </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Infographie</td>
                        <td>{{$infography_choix}}</td>
                        <td>{{$infography_prix}}$ </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Publicité sur la pochette</td>
                        <td>{{$advertising_choix}}</td>
                        <td>{{$advertising_prix}}$ </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Ramassage sur place ou livraison standard</td>
                        <td>{{$livraison_choix}}</td>
                        <td>{{$livraison_prix}}$</td>
                    </tr>
                    <tr class="table-primary">
                        <td scope="row">Total des choix</td>
                        <td colspan="2"><strong>{{$total_choices}}$</strong></td>
                       
                    </tr>
                    <tr class="table-info">
                        <td scope="row">Prix du produit</td>
                        <td colspan="2">{{$product_price}}$</td>
                    </tr>
                    <tr class="table-warning wow fadeInRight m-5" data-wow-delay="2s">
                        <td scope="row">Total produit</td>
                        <td colspan="2"><strong>{{$total}}$</strong></td>                        
                    </tr>
                </tbody>
            </table>        
  </div> 
  <div class="row">
    <div class="col-lg-4 wow fadeInDown" data-wow-delay="0.4s">
        <button class="btn btn-outline-dark btn-lg">Acheter maintenant</button>
    </div>   
    <div class="col-lg-4 wow fadeInDown" data-wow-delay="2s">
        <button class="btn btn-outline-success btn-lg">Ajouter au panier</button>
    </div>   
    <div class="col-lg-4 wow fadeInDown" data-wow-delay="2s">
        <button class="btn btn-outline-warning btn-lg"><a href="{{ route('services') }}">Retour aux services</a></button>
    </div>   
</div>

</div>
</body>
</html>

        

