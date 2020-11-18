<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koaj</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

  <header>

    <h1>Koaj</h1>
    <hr>
  
  </header>
  
  <main>

    <?php 
        
        $productos=array(
          "producto1"=>array("camisa",19000,"nasa","https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3510546-1000-1000/7702511000427.jpg?v=637273105646430000"),
          "producto2"=>array("gorra",50000,"plana","https://www.zenu.com.co/wp-content/uploads/2019/07/salchicha-viena-tradicional-zenu-1200x1200.png"),
          "producto3"=>array("tennis",59000,"blancos","https://jumbocolombiafood.vteximg.com.br/arquivos/ids/158589-1000-1000/7702059505026-1.jpg?v=636082723719600000"),
          "producto4"=>array("camiseta",7000,"cuello redondo","https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3501457-1000-1000/7702116000020.jpg?v=637244720108270000"),
      );
    ?>

    <div class="container">

      <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($productos as $producto): ?>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="<?php echo($producto[3]) ?>" class="card-img-top img-fluid" alt="imagen">
              <div class="card-body">
                <h2 class="card-title text-center"><?php echo($producto[0]) ?></h2>
                <h4 class="card-title">Precio: $<?php echo($producto[1]) ?></h4>
                <h4 class="card-title text-danger">Marca:<?php echo($producto[2]) ?></h4>
                
              </div>
            </div>
        </div>
        <?php endforeach?>
      </div>
    
    </div>


   
  </main>
  <footer>
  
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>