<?php require 'views/header.php';?>

  <div class="main-body">
    <div class="categories">
      <form class="form-category" method="">
        <input type="submit" name="Science" value="Science" />
        <input type="submit" name="Programming" value="Programmig" />
        <input type="submit" name="Biology" value="Biology" />
        <input type="submit" name="Math" value="Math" />
        <input type="submit" name="Math" value="Math" />
        <input type="submit" name="Math" value="Math" />
      </form>
      <hr>
    </div>
    <!--Card for articles -->
    <h2>Latest 4 Articles</h2>
    <div class="container">
      <div class="container-card">
        <div class="img-container-card">
          <img src="image.png">
        </div>
        <div class="content-container-card">
          <h2 class="h2-card">Gaming</h2>
          <h1 class="h1-card">Future Of Gaming Industry</h1>
          <p>Loremid dictum odio ultricies.</p>
          <input type="submit" value="Read More" />
          <p class="p-card"><br /></p>
        </div>
      </div>

      <div class="container-card">
        <div class="img-container-card">
          <img src="image.png">
        </div>
        <div class="content-container-card">
          <h2 class="h2-card">Gaming</h2>
          <h1 class="h1-card">Future Of Gaming Industry</h1>
          <p>Lorem ipsum dolor sit amet,  id dictum odio ultricies.</p>
          <input type="submit" value="Read More" />
          <p class="p-card"><br /></p>
        </div>
      </div>

      <div class="container-card">
        <div class="img-container-card">
          <img src="image.png">
        </div>
        <div class="content-container-card">
          <h2 class="h2-card">Gaming</h2>
          <h1 class="h1-card">Future Of Gaming Industry</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu odio ante.
            Curabitur efficitur ante a ex sagittis, at lobortis quam egestas. Phasellus tempor lorem risus, ut malesuada turpis placerat eget.
            Nunc eleifend diam blandit sapien congue, id dictum odio ultricies.</p>
          <input type="submit" value="Read More" />
          <p class="p-card"><br /></p>
        </div>
      </div>

      <div class="container-card">
        <div class="img-container-card">
          <img src="image.png">
        </div>
        <div class="content-container-card">
          <h2 class="h2-card">Gaming</h2>
          <h1 class="h1-card">Future Of Gaming Industry</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu odio ante.
            Curabitur efficitur ante a ex sagittis, at lobortis quam egestas. Phasellus tempor lorem risus, ut malesuada turpis placerat eget.
            Nunc eleifend diam blandit sapien congue, id dictum odio ultricies.</p>
          <input type="submit" value="Read More" />
          <p class="p-card"><br /></p>
        </div>
      </div>
    </div>


    <!--Contact me-->
    <?php require 'views/contact.php';?>


  </div>


  <?php require 'views/footer.php';?>
