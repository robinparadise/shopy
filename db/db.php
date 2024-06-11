<?php
include 'config.php';

function getProducts() {
  $conn = connectDB();
  $sql = "SELECT * FROM products";
  $result = mysqli_query($conn, $sql);
  return $result;
}

function getFirstProduct() {
  $conn = connectDB();
  $sql = "SELECT * FROM products LIMIT 1";
  $result = mysqli_query($conn, $sql);
  return mysqli_fetch_assoc($result);
}


