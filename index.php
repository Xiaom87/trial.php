<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
   <link rel="stylesheet" href="css/style.css">
   <title>php</title>
</head>
<body>
<?php require "blocks/header.php" ?>

<section class="home">
   <div class="container text-center">
      <div class="row">
         <h3 class="mt-5">Наши статьи</h3>
         <?php
            
            for($i = 0; $i < 5; $i++):
         ?>
         <div class="card mt-5 mb-5" style="width: 15rem;">
          <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail mt-2" alt="...">
         <div class="card-body">
         <h5 class="card-title">Сайт c PHP</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <a href="#" class="btn btn-primary">Подробнее</a>
      </div>
      </div>
      <?php endfor; ?>
      </div>
      </div>
</section>




<?php require "blocks/footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>