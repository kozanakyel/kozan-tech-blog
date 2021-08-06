
<?php require 'views/header.php';?>
<?php
  $messages = $conn->prepare("SELECT * FROM contact_msg");
  $messages->execute();
  $fetch_msg= $messages->fetchAll();
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

    <div id="newblog">
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

    <div id="allblog">
      <h2>Blog Archive: </h2>
      <hr>
      <table>
        <tr>
          <th>Title</th>
          <th>Category</th>
          <th>Time</th>
          <th>Status</th>
        </tr>
        <tr>
          <td>Jill</td>
          <td>Smith</td>
          <td>50</td>
          <td> <input type="submit" name="button" style="background: blue;" value="Update"></input>
          <input type="submit" name="button" style="background: red;" value="Delete"></input> </td>
        </tr>
      </table>

    </div>

  </div>
</div>


<?php require 'views/footer.php';?>
