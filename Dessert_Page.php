<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sweet Treats</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  header {
    background-color: #e91e63;
    text-align: center;
    padding: 2rem 0;
  }

  header h1 {
    margin: 0;
    font-size: 2.5rem;
    color: #fff;
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
    background-color: #e91e63;
    text-align: center;
    padding: 1rem 0;
  }

  footer p {
    margin: 0;
    color: #fff;
  }
</style>
</head>
<body>
    <!--main contain-->
  <header>
    <h1>Indulge in Sweet Delights</h1>
  </header>

<!--section 1-->
  <section>
    <div class="container">
      <img src="images\s1.jpg" alt="Chocolate Cake" style="height: 350px; width: 350px;">
      <div class="info">
        <h2>Chocolate Cake</h2>
        <p>Decadent chocolate cake layered with rich ganache, perfect for any celebration.</p>
        <a href="order.php?order=Chocolate Cake"> <input type="button" value="100/-Rs" style="height: 30px;" width="20px"/> </a>
      </div>
    </div>
  </section>

<!--section 2-->
  <section style="background-color: #f9f9f9;">
    <div class="container">
      <div class="info">
        <h2>Gulab jamun</h2>
        <p>Gulab Jamun is a delectable Indian dessert made from deep-fried milk-based dough balls soaked in fragrant sugar syrup.</p>
        <a href="order.php?order=Gulab jamun"> <input type="button" value="100/-Rs" style="height: 30px;" width="20px"/> </a>
      </div>
      <img src="images\s2.jpg" alt="gulab jamun" >
    </div>
  </section>

<!--section 3-->
  <section>
    <div class="container">
      <img src="images\s3.jpg" alt=" rasgulla">
      <div class="info">
        <h2> Rasgulla</h2>
        <p>Rasgulla is a spongy and syrup-soaked Indian dessert made from chhena (cottage cheese) dough, known for its delightful sweetness.</p>
        <a href="order.php?order=Rusgulla"> <input type="button" value="100/-Rs" style="height: 30px;" width="20px"/> </a>
      </div>
    </div>
  </section>

  <!--section 4-->
  <section style="background-color: #f9f9f9;">
    <div class="container">
      <div class="info">
        <h2>Kaju Katli</h2>
        <p>Kaju Katli is a popular Indian sweet made from cashews, often presented as thin diamond-shaped slices.</p>
        <a href="order.php?order=Kaju katli"> <input type="button" value="100/-Rs" style="height: 30px;" width="20px"/> </a>
      </div>
      <img src="images\s4.jpg" alt="kaju katli">
    </div>
  </section>

  <footer>
    <p>Savor the sweetness and enjoy your dessert!</p>
  </footer>
</body>
</html>
