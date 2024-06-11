<?php
function connectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopy";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {      
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database if it doesn't exist
    try {
      $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
      if (mysqli_query($conn, $sql)) {
          // echo "Database created successfully<br>";
      } else {
          echo "Error creating database: " . mysqli_error($conn) . "<br>";
      }
    } catch (Exception $e) {
      echo "Error creating database: " . $e->getMessage() . "<br>";
    }

    // Connect to the database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    try {
      // Create table if it doesn't exist
      $sql = "CREATE TABLE IF NOT EXISTS `products` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `category` varchar(255) NOT NULL,
          `title` varchar(255) NOT NULL,
          `description` text NOT NULL,
          `image_url` varchar(255) NOT NULL,
          PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
      if (mysqli_query($conn, $sql)) {
          // echo "Table created successfully<br>";
      } else {
          echo "Error creating table: " . mysqli_error($conn) . "<br>";
      }
    } catch (Exception $e) {
      echo "Error creating table: " . $e->getMessage() . "<br>";
    }

    try {
      // DROP table `users`
      $sql = "DROP TABLE IF EXISTS `users`";
      if (mysqli_query($conn, $sql)) {
          // echo "Table dropped successfully<br>";
      } else {
          echo "Error dropping table: " . mysqli_error($conn) . "<br>";
      }
    } catch (Exception $e) {
      echo "Error dropping table: " . $e->getMessage() . "<br>";
    }
    try {
      // Create table if it doesn't exist
      $sql = "CREATE TABLE IF NOT EXISTS `users` (
          `id` INT AUTO_INCREMENT PRIMARY KEY,
          `name` VARCHAR(50) NOT NULL,
          `email` VARCHAR(100) NOT NULL,
          `bio` text
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
      if (mysqli_query($conn, $sql)) {
          // echo "Table created successfully<br>";
      } else {
          echo "Error creating table: " . mysqli_error($conn) . "<br>";
      }
    } catch (Exception $e) {
      echo "Error creating table: " . $e->getMessage() . "<br>";
    }

    return $conn;
}

function populateData() {
    // Connect to the database
    $conn = connectDB();

    // Clean the products table
    try {
        $sql_clean = "DELETE FROM products";
        if (mysqli_query($conn, $sql_clean)) {
            // echo "Table cleaned successfully<br>";
        } else {
            echo "Error cleaning table: " . mysqli_error($conn) . "<br>";
        }
    } catch (Exception $e) {
        echo "Error cleaning table: " . $e->getMessage() . "<br>";
    }

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis, purus ac sodales luctus, libero libero luctus libero, non luctus. Shoes apophenia jeans sunglasses kanji boy human fetishism face forwards singularity sensory fluidity corrupted Chiba artisanal numinous monofilament. Tanto drone geodesic faded sentient military-grade 3D-printed jeans order-flow nano-cartel wonton soup Tokyo systema gang smart-pre. Dissident nodality pre-corrupted office woman disposable otaku car sub-orbital footage man into euro-pop long-chain hydrocarbons hacker. Computer pre-man singularity franchise-space corrupted sprawl sign math-Legba carbon nodality monofilament human receding long-chain hydrocarbons. Stimulate market gang Kowloon computer tube DIY. Military-grade dead range-rover advert denim Kowloon neural table hacker BASE jump monofilament free-market into woman. Spook tube order-flow woman sign warehouse urban city sentient Shibuya dissident drugs San Francisco advert tiger-team-space.";

    // Sample data array
    $sample_data = array(
        array("Casual", 1, "Top 10 Casual Shoes of 2023", "Discover the most stylish casual shoes of the year! " . $lorem, "https://via.assets.so/shoe.png?id=101&w=500"),
        array("Running", 2, "Best Running Shoes for Athletes", "Check out the latest running shoes that every runner should have! " . $lorem, "https://via.assets.so/shoe.png?id=102&w=500"),
        array("Formal", 3, "Top Formal Shoes for 2023", "Find out which formal shoes are dominating the market this year! " . $lorem, "https://via.assets.so/shoe.png?id=103&w=500"),
        array("Boots", 4, "Stylish Boots for Every Season", "Stay fashionable with these essential boots for every season! " . $lorem, "https://via.assets.so/shoe.png?id=104&w=500"),
        array("Sneakers", 5, "Top 10 Trendy Sneakers", "Boost your style with these top sneaker picks! " . $lorem, "https://via.assets.so/shoe.png?id=105&w=500"),
        array("Casual", 6, "Comfortable and Stylish Casual Shoes", "Explore how casual shoes are becoming a staple in fashion! " . $lorem, "https://via.assets.so/shoe.png?id=106&w=500"),
        array("Running", 7, "Review: Latest Running Shoes", "Read our review of the newest running shoes in the market! " . $lorem, "https://via.assets.so/shoe.png?id=107&w=500"),
        array("Formal", 8, "Must-Have Formal Shoes for 2023", "Learn about the must-have formal shoes for this year! " . $lorem, "https://via.assets.so/shoe.png?id=108&w=500"),
        array("Boots", 9, "Durable Boots for Outdoor Activities", "Get insights into the most durable boots for outdoor activities! " . $lorem, "https://via.assets.so/shoe.png?id=101&w=500"),
        array("Sneakers", 10, "New Trends in Sneakers", "Discover the latest trends in sneaker fashion! " . $lorem, "https://via.assets.so/shoe.png?id=109&w=500"),
        array("Casual", 11, "Casual Shoes for Every Occasion", "Make your outfit complete with these versatile casual shoes! " . $lorem, "https://via.assets.so/shoe.png?id=101&w=500"),
        array("Running", 12, "Top Running Shoes for 2023", "Find the perfect running shoes for your needs! " . $lorem, "https://via.assets.so/shoe.png?id=110&w=500"),
        array("Formal", 13, "Latest in Formal Shoe Design", "Stay updated with the latest in formal shoe design! " . $lorem, "https://via.assets.so/shoe.png?id=111&w=500"),
        array("Boots", 14, "Winter Boots: Best Picks", "Learn how to choose the best winter boots! " . $lorem, "https://via.assets.so/shoe.png?id=112&w=500"),
        array("Sneakers", 15, "High-Performance Sneakers", "Understand the benefits and features of high-performance sneakers! " . $lorem, "https://via.assets.so/shoe.png?id=113&w=500"),
        array("Casual", 16, "Casual Shoes: Comfort and Style", "Explore the balance of comfort and style in casual shoes! " . $lorem, "https://via.assets.so/shoe.png?id=101&w=500"),
        array("Running", 17, "Smart Running Shoes: A Guide", "Upgrade your running experience with these smart running shoes! " . $lorem, "https://via.assets.so/shoe.png?id=114&w=500"),
        array("Formal", 18, "Formal Shoes for Business Professionals", "Check out the top formal shoes for business professionals! " . $lorem, "https://via.assets.so/shoe.png?id=101&w=500"),
        array("Boots", 19, "Best Hiking Boots", "Learn about the best hiking boots for your adventures! " . $lorem, "https://via.assets.so/shoe.png?id=115&w=500"),
        array("Sneakers", 20, "Eco-Friendly Sneakers", "Discover the future trends of eco-friendly sneakers! " . $lorem, "https://via.assets.so/shoe.png?id=116&w=500"),
        array("Casual", 21, "Casual Shoes for Everyday Wear", "Discover how casual shoes are perfect for everyday wear! " . $lorem, "https://via.assets.so/shoe.png?id=117&w=500"),
        array("Running", 22, "Innovative Running Shoes", "Explore the best and most innovative running shoes available today! " . $lorem, "https://via.assets.so/shoe.png?id=118&w=500")
    );

    // Insert sample data into the products table
    foreach ($sample_data as $post) {
        $category = mysqli_real_escape_string($conn, $post[0]);
        $title = mysqli_real_escape_string($conn, $post[2]);
        $description = mysqli_real_escape_string($conn, $post[3]);
        $image_url = mysqli_real_escape_string($conn, $post[4]);

        try {
            $sql_insert = "INSERT INTO products (category, title, description, image_url) VALUES ('$category', '$title', '$description', '$image_url')";
            if (mysqli_query($conn, $sql_insert)) {
                // echo "Record inserted successfully<br>";
            } else {
                echo "Error inserting record: " . mysqli_error($conn) . "<br>";
            }
        } catch (Exception $e) {
            echo "Error inserting record: " . $e->getMessage() . "<br>";
        }
    
    }

    // Insert a user with fake data
    $sql = "INSERT INTO `users` (`id`, `name`, `email`, `bio`) VALUES
        (1, 'John Doe', 'john.doe@example.com', 'This is a sample bio for John Doe.')";

    if (mysqli_query($conn, $sql)) {
        // echo "User inserted successfully<br>";
    } else {
        echo "Error inserting user: " . mysqli_error($conn) . "<br>";
    }

    // Close connection
    mysqli_close($conn);
}

// Populate data
populateData();
?>