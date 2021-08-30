<?php require 'views/header.php';?>
<?php
  $blogs = $conn->prepare("SELECT * FROM blog
                          ORDER BY time DESC");
  $blogs->execute();
  $fetch_blg= $blogs->fetchAll();

  $cat_array = array();
  foreach ($fetch_blg as $blg) {
      array_push($cat_array, $blg["category"]);
  }
  $cat_array = array_unique($cat_array);
 ?>

  <div class="main-body">
    <div class="categories">
      <canvas id="canvas" width="50" height="50"></canvas>
      <form class="form-category" action="index.php" method="post">

        <?php foreach ($cat_array as $cat) { ?>
          <input type="submit" name="cat" value="<?php echo ucfirst($cat); ?>" />
      <?php } ?>
      </form>
      <hr>

      <?php
      $new_blogs = array();
      if (isset($_POST["cat"])) {
        foreach ($fetch_blg as $blg) {
          if (strtolower($_POST["cat"]) == strtolower($blg["category"])) {
            array_push($new_blogs, $blg);
          }
        }
        $fetch_blg = $new_blogs;

      }
       ?>
    </div>
    <!--Card for articles -->
    <h2>Latest Articles</h2>
    <div class="container">
      <div class="list-wrapper">
        <?php foreach ($fetch_blg as $blg) { ?>
          <form class="" action="blog.php" method="post">
            <div class="container-card">
              <div class="img-container-card">
                <img src="<?php echo $blg["header_img"] ?>">
              </div>
              <div class="content-container-card">
                <h2 class="h2-card"><?php echo $blg["category"] ?></h2>
                <h1 class="h1-card"><?php echo $blg["title"] ?></h1>
                <p><?php echo $blg["short_desc"] ?></p>
                <input type="hidden" name="blog_id" value="<?php echo $blg["id"] ?>">
                <input type="submit" name="go_blog" value="Read More" />
                <p class="p-card">author: <?php echo $blg["author"] ?><br /></p>
              </div>
            </div>
          </form>
      <?php  } ?>
      </div>

    </div>
    <div id="pagination-container">

    </div>

    <!--Contact me-->
    <?php require 'views/contact.php';?>


  </div>


  <?php require 'views/footer.php';?>
