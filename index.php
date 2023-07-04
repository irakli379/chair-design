<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css" />
    <title>Lisbon Chair Shop</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="header-text-box">
          <h1>We design and build better chairs, for a better life</h1>
          <p class="header-text">
            In a small shop in the heart of Lisbon, we spend our days
            relentlessly perfecting the chair. The result is a perfect blend of
            beauty and comfort, that will have a lasting impact on your health.
          </p>
          <a class="btn btn--big" href="#">Shop chairs</a>
        </div>
        <img src="hero.jpg" alt="Photo" />
      </header>

      <section>
        <h2>What makes our chairs special</h2>

        <div class="grid-3-cols">
         <?php


         require "./chairs.php"



         ?>
         
        </div>
      </section>

      <section class="testimonial-section">
        <div class="grid-3-cols">
          <img src="customers.jpg" alt="People sitting on chairs" />
          <div class="testimonial-box">
            <h2>"We couldn't live without these chairs anymore"</h2>
            <blockquote class="testimonial-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
              repellat at, nesciunt quia cum minima ipsum culpa totam sapiente
              recusandae earum debitis doloribus in quasi voluptatibus!
            </blockquote>
            <p class="testimonial-author">&mdash; Mary and Sarah Johnson</p>
          </div>
        </div>
      </section>

      <section>
        <h2>Our bestselling chairs</h2>
        <div class="grid-3-cols">
          <figure class="chair">
            <img src="chair-1.jpg" alt="Chair" />
            <div class="chair-box">
              <h3>The Laid Back</h3>
              <ul class="chair-details">


                <?php

                require "./chairBoxOne.php"

                ?>


              </ul>
              <div class="chair-price">
                <strong>250€</strong>
                <a href="#" class="btn btn--small">Add to cart</a>
              </div>
            </div>
          </figure>

          <figure class="chair">
            <img src="chair-2.jpg" alt="Chair" />
            <div class="chair-box">
              <h3>The Worker Bee</h3>
              <ul class="chair-details">


                <?php

                require "./chairBoxTwo.php"

                ?>


              </ul>
              <div class="chair-price">
                <strong>525€</strong>
                <a href="#" class="btn btn--small">Add to cart</a>
              </div>
            </div>
          </figure>

          <figure class="chair">
            <img src="chair-3.jpg" alt="Chair" />
            <div class="chair-box">
              <h3>The Chair 4/2</h3>
              <ul class="chair-details">


                <?php

                require "./chairBoxThree.php"

                ?>


              </ul>
              <div class="chair-price">
                <strong>1450€</strong>
                <a href="#" class="btn btn--small">Add to cart</a>
              </div>
            </div>
          </figure>
        </div>
      </section>

      <footer>
        Copyright &copy; 2027 by Jonas Schmedtmann. Part of "Build Responsive
        Real-World Websites with HTML and CSS" online course. Use for learning
        purposes only.
      </footer>
    </div>
  </body>
</html>
