
<?php require 'views/header.php';?>
<?php
  $user_task = $conn->prepare("SELECT * FROM user
              WHERE email= ?");
  $user_task->execute(array(
    $_SESSION["dragon_user"]
  ));
  $affected = $user_task->rowCount();
  $user_fetch = $user_task->fetch(PDO::FETCH_ASSOC);

  if ($affected == 0) {
    header("Location:goat_phoneix.php?status=unauth");
    exit;
  }

  $messages = $conn->prepare("SELECT * FROM contact_msg
                            ORDER BY time_msg DESC");
  $messages->execute();
  $fetch_msg= $messages->fetchAll();

  $blogs = $conn->prepare("SELECT * FROM blog");
  $blogs->execute();
  $fetch_blg= $blogs->fetchAll();
?>

<head>
  <script src="resources/ckeditor/ckeditor.js"></script>
</head>

 <div class="admin-body">
  <div class="side-bar">
    <div class="item-admin">
      <a href="#messages">Messages</a><br>
    </div>
    <div class="item-admin">
      <a href="#newblog">Add New Blog</a><br>
    </div>
    <div class="item-admin">
      <a href="#allblog">All Blogs</a><br>
    </div>

  </div>
  <div class="page-content">
    <div id="messages">
      <h2>Messages: </h2>
      <hr>
      <table>
        <tr>
          <th>Msg Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
          <th>Time</th>
          <th>Status</th>
        </tr>
        <?php foreach ($fetch_msg as $msg) {?>

            <form class="" action="process.php" method="post">
              <tr>
                <td> <input type="hidden" name="id_msg" value="<?php echo $msg["contact_id"]; ?>"><?php echo $msg["contact_id"]; ?> </td>
                <td><?php echo $msg["name"]; ?></td>
                <td><?php echo $msg["email"]; ?></td>
                <td><?php echo $msg["msg"]; ?></td>
                <td><?php echo $msg["time_msg"]; ?></td>
                <td> <button type="submit" name="chosen_msg_delete" style="color:red;">Delete</button>
                <button type="submit" name="chosen_msg_read" style="color:goldenrod;">Read</button></td>
              </tr>
            </form>

        <?php } ?>


      </table>

    </div>

    <div id="newblog" class="blog-list">
      <h2>Add New Blog: </h2>
      <hr>
      <form class="" action="process.php" method="post">
        <label for="">Title:</label>
        <input required type="text" name="title" value="">
        <label for="">Short Information</label>
        <input required type="text" name="short_inf" value="">
        <label for="">Category</label>
        <input required type="text" name="category" value="">
        <label for="">Header Image</label>
        <input required type="text" name="head_img" value="">
        <label for="">Author</label>
        <input required type="text" name="author" value="">
        <textarea name="blog_content"></textarea>
                <script>
                        CKEDITOR.replace( 'blog_content' );
                </script>

        <input type="submit" name="addblog">

      </form>
    </div>

    <div id="allblog" >
      <h2>Blog Archive: </h2>
      <hr>
      <table>
        <tr>
          <th>Blog Id</th>
          <th>Title</th>
          <th>Category</th>
          <th>Time</th>
          <th>Status</th>
        </tr>

        <?php foreach ($fetch_blg as $blg) { ?>
          <form class="" action="admin.php" method="post">
            <tr>
              <td><input type="hidden" name="id" value="<?php echo $blg["id"]; ?>"><?php echo $blg["id"]; ?></td>
              <td><?php echo $blg["title"]; ?></td>
              <td><?php echo $blg["category"]; ?></td>
              <td><?php echo $blg["time"]; ?></td>
              <td> <input type="submit" name="update_p_blog" style="background: blue;" value="Update"></input>
              <input type="submit" name="delete_blog" style="background: red;" value="Delete"></input> </td>
            </tr>
          </form>
        <?php } ?>

        <?php
        if (isset($_POST["delete_blog"])) {
          $deleted_blg = $_POST["id"];

          $dlt_blg = $conn->prepare("DELETE FROM blog
                          WHERE id = ?");
          $dlt = $dlt_blg->execute(array($deleted_blg));
          if ($dlt) {
            header("Location:admin.php?status=delete_blg");
            exit;
          }else {
            header("Location:admin.php?status=failed_delete_blg");
            exit;
          }
        }
         ?>
      </table>
      <?php
      $display = "display:none";
      if (isset($_POST["update_p_blog"])) {
        $display = "";
        $id_u = $_POST["id"];
        echo $id_u;
        $id_blg = $conn->prepare("SELECT * FROM blog
                            WHERE id= ?");
        $id_blg->execute(array(
          $id_u
        ));
        $blg_fetch = $id_blg->fetch(PDO::FETCH_ASSOC);
      }?>

      <div class="blog-list" style="<?php echo $display; ?>">
        <h2>Update Blog: </h2>
        <hr>
        <form class="" action="process.php" method="post">
          <input type="hidden" name="uid" value="<?php echo $blg_fetch["id"]; ?>">
          <label for="">Title:</label>
          <input required type="text" name="utitle" value="<?php echo $blg_fetch["title"]; ?>">
          <label for="">Short Information</label>
          <input required type="text" name="ushort_inf" value="<?php echo $blg_fetch["short_desc"]; ?>">
          <label for="">Category</label>
          <input required type="text" name="ucategory" value="<?php echo $blg_fetch["category"]; ?>">
          <label for="">Header Image</label>
          <input required type="text" name="uhead_img" value="<?php echo $blg_fetch["header_img"]; ?>">
          <label for="">Author</label>
          <input required type="text" name="uauthor" value="<?php echo $blg_fetch["author"]; ?>">
          <textarea name="blog_content_update"><?php echo $blg_fetch["content"]; ?></textarea>
                  <script>
                          CKEDITOR.replace( 'blog_content_update' );
                  </script>

          <input type="submit" name="updateblog">
        </form>
        <?php

         ?>
      </div>

    </div>

  </div>
</div>


<?php require 'views/footer.php';?>
