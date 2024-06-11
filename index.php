<?php include 'db/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Shopy</title>
  <?php include 'components/head.php'; ?>
</head>

<body>
  <?php $page = 'index' ?>

  <div class="container-sm text-center mt-4">
    <h1><span class="success">Shoe</span> store</h1>
    <p>Check out the latest products 👠</p>
  </div>

  <?php $product = getFirstProduct(); ?>
  <div class="container-sm text-center mt-4">
    <!-- TODO: muestra el primer producto -->
  </div>

  <?php include 'components/scripts.php'; ?>
</body>

</html>