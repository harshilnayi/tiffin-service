<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Breakfast Page</title>
<style>
  body {
    font-family: 'Times New Roman', Times, serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  header {
    background-color: #ffcc00;
    text-align: center;
    padding: 2rem 0;
  }

  header h1 {
    margin: 0;
    font-size: 2.5rem;
    color: #333;
  }

  section {
    padding: 3rem;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .info {
    padding-left: 2rem;
  }

  h2 {
    font-size: 1.8rem;
    margin-top: 0;
  }

  p {
    font-size: 1.2rem;
    color: #555;
  }

  footer {
    background-color: #ffcc00;
    text-align: center;
    padding: 1rem 0;
  }

  footer p {
    margin: 0;
    color: #333;
  }
</style>
</head>
<body>
  <header>
    <h1>Start Your Day with a Delicious Breakfast</h1>
  </header>
<!--main contain-->

<!--section 1-->
  <section>
    <div class="container">
      <img src="images\b1.jpg" alt="Tea">
      <div class="info">
        <h2>Tea and Khari</h2>
        <p>Tea is a soothing beverage made from Camellia sinensis leaves, while khari is a flaky and crispy Indian puff pastry enjoyed as a savory snack.</p>
        <a href="order.php?order=Tea and khari"> <input type="button" value="100/-Rs" style="height: 30px;" width="20px"/> </a>
      </div>
    </div>
  </section>

<!--section 2-->
  <section style="background-color: #f9f9f9;">
    <div class="container">
      <div class="info">
        <h2>Gujarati Thepla</h2>
        <p>Gujarati thepla is a spiced flatbread made from whole wheat flour, enjoyed for its portability and flavorful taste.</p>
        <a href="order.php?order=Gujarati Thepla"> <input type="button" value="100/-Rs" style="height: 30px;" width="20px"/> </a>
      </div>
      <img src="images\b4.jpg" alt="Gujarati Thepla">
    </div>
  </section>

<!--section 3-->
  <section>
    <div class="container">
      <img src="images\b3.jpg" alt="Patra">
      <div class="info">
        <h2>Patra</h2>
        <p>Patra is a traditional Indian snack made from colocasia leaves coated with spiced gram flour paste, rolled, steamed, and sliced.</p>
        <a href="order.php?order=Patra"> <input type="button" value="100/-Rs" style="height: 30px;" width="20px"/> </a>
      </div>
    </div>
  </section>

<!--section 4-->
  <section style="background-color: #f9f9f9;">
    <div class="container">
      <div class="info">
        <h2>Jalebi Fafda</h2>
        <p>Jalebi is a sweet Indian dessert made by deep-frying pretzel-shaped batter and soaking it in sugar syrup, while fafda is a crispy Gujarati snack typically made from gram flour and spices.</p>
        <a href="order.php?order=Jalebi Fafda"> <input type="button" value="100/-Rs" style="height: 30px;" width="20px"/> </a>
    </div>
      <img src="images\b2.jpg" alt="Jalebi And Fafda">
    </div>
  </section>

  

  <footer>
    <p>Enjoy your breakfast and have a great day!</p>
  </footer>
</body>
</html>
