
<?php require 'views/header.php';?>

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
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
          <th>Time</th>
          <th>Status</th>
        </tr>
        <tr>
          <td>Jill</td>
          <td>Smith</td>
          <td>50</td>
          <td>19.20.2050</td>
          <td> <button type="submit" name="button" style="color:red;">Delete</button> </td>
        </tr>
      </table>

    </div>

    <div id="newblog">
      <h2>Add New Blog: </h2>
      <hr>
      <form class="">
        <label for="">Title:</label>
        <input type="text" name="title" value="">
        <label for="">Short Information</label>
        <input type="text" name="short_inf" value="">
        <label for="">Category</label>
        <input type="text" name="category" value="">
        <label for="">Header Image</label>
        <input type="text" name="head_img" value="">

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
