<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <section id="welcome">
    <div class="welcome-menu">
      <div class="logo">
        <img src="/img/savage-pics/savage-logo.gif">
      </div>
      <div class="menu">
        <div class="menu-title">
          Menu
        </div>
        <ul class="links">
          <li>
            <a href="#">Menu</a>
          </li>
          <li>
            <a href="#">Waitlist</a>
          </li>
          <li>
            <a href="#">Offers</a>
          </li>
          <li>
            <a href="#">Giftcards</a>
          </li>
        </ul>
      </div>
      <div class="social-icons">
        <a href="#">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      <div class="location">
        <div class="address">
          115 Laredo Dr,<br>
          Avondale Estates, GA 30002
        </div>
        <div class="phone-number">
          <a href="tel:(404) 299-5799">(404) 299-5799</a>
        </div>
        <div class="address">
          484 Moreland Ave NE,<br>
          Atlanta, GA 30307
        </div>
        <div class="phone-number">
          <a href="tel:(404)523-0500">(404) 523-0500</a>
        </div>
      </div>
    </div>
    <div class="welcome-jumbo">
      <div class="status">NEW</div>
      <h1>Savage Pizza</h1>
      <img src="/img/savage-pics/photo0jpg.png" class="store_front">
    </div>
  </section>
  <section id="information">
    <div class="restaurant-image">
      <img src="img/savage-pics/IMG_cashregister.png">
    </div>
    <div class="info">
      <h2>We Started From The Bottom In 1987</h2>
      <div class="paragraphs">
        <p>A True Story:<br />


Once there was this poet/sculptor whose work was so significant, so beyond his time and full of honesty and inspiration that he was dubbed the Savage Messiah.<br />

Savage Messiah – a hero who truly evokes the spirit of our own hearts.
<br/>

</p>
<p>
  So when we decided to plunge into the pizza business in 1990, it just seemed appropriate that it be called Savage Pizza. Like its namesake, what grew out of this business is a reputation for honesty and inspiration. Honesty of ingredients – fresh, from-scratch every day – that inspire sauces and culinary creations that have made Savage Pizza one of the most successful and popular neighborhood businesses in the Little Five Points/Virginia-Highlands area.

<br/>

<br />

  Now Savage Pizza is also available in the Avondale Estates and Decatur area!
</p>
      </div>
      <a href="#" class="about-link">
        <span>Learn more about restaurants</span>
        <div class="circle-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
      </a>
    </div>
  </section>
  <section id="food-preview">
    <h2>We have everything you need to kill your hunger</h2>
    <div class="button-rounded">View Our Menu</div>
    <div class="container">
      <div class="left-btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="right-btn">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="food-slider">
        <div class="sliding-system">
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                PIZZA SPECIALTIES
              </div>
              <p class="food-description">
                The following recommended Savage Pizza Combos are tried and true favorites from our kitchen. Substitutions are extra.


              </p>
              <div class="food-image">
                <img src="img/savage-pics/kissclipart-pizza-marinara-png-c.png">
              </div>
            </div>

          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                BUILD YOUR OWN
              </div>
              <p class="food-description">
                red tomato sauce * garlic tomato sauce * garlic white sauce * salsa fresca with cilantro * red wine marinara * spicy red pepper sauce (additional charge)* Fox Bros. Barbeque Sauce (additional charge)
              </p>
              <div class="food-image">
                <img src="img/savage-pics/calzoni-png-7.png">
              </div>
            </div>

          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Sauces & Crust
              </div>
              <p class="food-description">
                Our crust is a thin, New York-style crust, available in traditional or honey wheat.  10” (small) gluten-free crust 2.00 extra.
              </p>
              <div class="food-image">
                <img src="img/savage-pics/pizza_ranch.png">
              </div>
            </div>

          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Lasagna
              </div>
              <!-- (Dine-in only) -->
              <p class="food-description">
                Fresh lasagna noodles layered with a special red wine tomato sauce with a touch of serrano peppers, spinach and ricotta cheese and topped with lots of parmesan and mozzarella.  Served with garlic bread and salad with your choice of dressing.
              </p>
              <div class="food-image">
                <img src="img/savage-pics/lasagna-png-transpar.png">
              </div>
            </div>

          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                SUBS
              </div>
              <p class="food-description">
                Your choice of regular or whole wheat roll. All Subs served with choice of Regular, Salt & Vinegar, or BBQ Chips.
              </p>
              <div class="food-image">
                <img
                  src="img/savage-pics/meatball1.png">
              </div>
            </div>
          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Beers
              </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                architecto
                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                repellendus natus nihil?
              </p>
              <div class="food-image">
                <img
                  src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
              </div>
            </div>
          </div>
          <div class="slide">
            <div class="background"></div>
            <div class="content">
              <div class="food-title">
                Drinks
              </div>
              <p class="food-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                architecto
                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                repellendus natus nihil?
              </p>
              <div class="food-image">
                <img
                  src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
    </body>
</html>
