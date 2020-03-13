@extends('layouts.landing')

@section('title')
{{$settings["general"]->site_title}} America's Best Pizza
@endsection



@section('content')
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
@endsection








{{-- 
@extends('layouts.landing')





@section('content')
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
@endsection
 --}}
