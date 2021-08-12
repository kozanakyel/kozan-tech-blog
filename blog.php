<?php require 'views/header.php';?>
<head>
  <style media="screen">

  </style>
</head>

<div class="main-body">
  <?php
  //GO BLOG PAGE
  $title= "";
  $category = "";
  $short_desc = "";
  $content = "";
  $author = "";
  $time = "";
    if (isset($_POST["go_blog"])) {
        $blog_task = $conn->prepare("SELECT * FROM blog
                  WHERE id = ?");
        $blog_task->execute(array(
          $_POST["blog_id"]
        ));
        $blg_fetch = $blog_task->fetch(PDO::FETCH_ASSOC);
        $title = $blg_fetch["title"];
        $category = $blg_fetch["category"];
        $short_desc = $blg_fetch["short_desc"];
        $content = $blg_fetch["content"];
        $author = $blg_fetch["author"];
        $time = $blg_fetch["time"];

    } ?>
  <div class="blog">
    <h2 class="h2-card" style="transform:uppercase;"><?php echo $category; ?></h2>
    <h1 style="text-transform: uppercase; color:goldenrod"><?php echo $title; ?></h1>
    <h3 style="text-transform: uppercase;"><?php echo $short_desc; ?></h3>
    <p><?php echo $content; ?></p>

    <p style="font-size:16px; color:goldenrod; ">author:
      <p style="color:goldenrod; font-weight:bold; text-transform:uppercase;"><?php echo $author; ?></p>
    </p>
    <p style="font-size:10px;"><?php echo $time; ?></p>
  </div>
<!--Contact me-->
<?php require 'views/contact.php';?>


</div>


  <?php require 'views/footer.php';?>
