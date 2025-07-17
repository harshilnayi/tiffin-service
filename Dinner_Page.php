<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dinner Delights</title>
<style>
/*Our Delicious Menu button*/
.container:hover, .home .home-desc input:hover{
  background-color: #f8c10d;

}

  body {
    font-family: 'Times New Roman', Times, serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  header {
    background-color: #4285f4;
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
    background-color: #4285f4;
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
    <!--Main contain-->
  <header>
    <h1>Experience a Delightful Dinner</h1>
  </header>
<!--section 1-->
  <section>
    <div class="container">
      <img src="images\d1.jpg" alt="Gujarati Food">
      <div class="info">
        <h2>Gujarati Food</h2>
        <p>Gujarati food is a diverse and flavorful cuisine known for its balance of sweet, spicy, and tangy flavors, featuring dishes like dhokla, khamn, and kadhi.</p>
        <a href="order.php?order=Gujarati food"> <input type="button" value="199/-Rs" style="height: 30px;" width="20px"/> </a>
    </div>
    </div>
  </section>

<!--section 2-->
  <section style="background-color: #f9f9f9;">
    <div class="container">
      <div class="info">
        <h2>Vegetarian Pasta</h2>
        <p>Flavorful pasta tossed with fresh vegetables and herbs in a creamy sauce.</p>
        <a href="order.php?order=Vegetarian pasts"> <input type="button" value="199/-Rs" style="height: 30px;" width="20px"/> </a>
      </div>
      <img src="images\d2.jpg" alt="Vegetarian Pasta">
    </div>
  </section>

<!--section 3-->
  <section>
    <div class="container">
      <img src="images\d3.jpg" alt="Masala Dhosa">
      <div class="info">
        <h2>Masala Dosa</h2>
        <p>Masala Dosa is a popular South Indian dish consisting of a thin, crispy rice crepe filled with a spiced potato mixture, often served with chutneys and sambar.</p>
        <a href="order.php?order=Masala dosa"> <input type="button" value="199/-Rs" style="height: 30px;" width="20px"/> </a>
    </div>
    </div>
  </section>

<!--section 4-->
<section style="background-color: #f9f9f9;">
    <div class="container">
      <div class="info">
        <h2>iidli</h2>
        <p>Idli is a traditional South Indian steamed rice cake, known for its fluffy texture and served with chutney and sambar.</p>
        <a href="order.php?order=iidli"> <input type="button" value="199/-Rs" style="height: 30px;" width="20px"/> </a>
      </div>
      <img src="images\d4.jpg" alt="iidli">
    </div>
  </section>

  <footer>
    <p>Enjoy a delicious dinner and have a wonderful evening!</p>
  </footer>
</body>
</html>
