<?php
$host = 'localhost';
$db = 'webregistration';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM popularfood";
$stmt = $conn->query($query);
$foodItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($foodItems as $foodItem) {
    #$image = $foodItem['image_path'];
    #echo $image;
    echo '<div class="p-card">';
    echo '<img src="' . $foodItem['image_path'] . '" style="height: 400px;" alt="Net Error" />';
    echo '<h4>' . $foodItem['foodname'] . '</h4>';
    echo '<div class="review">';
    for ($i = 0; $i < $foodItem['rating']; $i++) {
        echo '<i class="fas fa-star"></i>';
    }
    echo '</div>';
    echo '<p class="price">' . $foodItem['price'] . '/-RS</p>';
    echo '<a href="order.php?order=' . urlencode($foodItem['foodname']) . '"> <input type="button" value="buy" /> </a>';
    echo '</div>';
}

$conn = null;
?>
