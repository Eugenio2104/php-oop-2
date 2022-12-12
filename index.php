<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L’e-commerce vende **prodotti** per animali.
- I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

require __DIR__ . '/models/Category.php';
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/Toy.php';
require __DIR__ . '/models/Accessory.php';


$products = [
  new Food(new Category('Cat', '<i class="fa-solid fa-cat"></i>'), 'whiskas pranzetti', 'whiskas', 10, true, 'https://m.media-amazon.com/images/I/71CSgd7hkML._AC_SY450_PIbundle-12,TopRight,0,0_SH20_.jpg', 'vegetables', 2, 'adult'),

  new Toy(new Category('Dog', '<i class="fa-solid fa-dog"></i>'), 'Osso giocattolo', 'pet & pet', 5, false, 'https://m.media-amazon.com/images/I/71Of7YEuSJL._AC_SY355_.jpg', '20cm', 'orange', 'plastic'),

  new Accessory(new Category('Dog', '<i class="fa-solid fa-dog"></i>'), 'Guinzaglio', 'Alldog', 20, true, 'https://www.toscani.store/wp-content/uploads/2020/08/guinzaglio-cane-150cm-nero-dark-toscani-store.jpeg', true)

];

var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>

</body>

</html>