
<?php require 'views/header.php';?>

 <div class="admin-body">
  <div class="side-bar">
    <div class="item-admin">
      <a href="admin.php">Messages</a><br>
    </div>
    <div class="item-admin">
      <a href="#newblog">Add New Blog</a><br>
    </div>
    <div class="item-admin">
      <a href="#allblog">All Blogs</a><br>
    </div>
    <div class="item-admin">
      <a href="#updatecv">Resume</a><br>
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
          <th>Status</th>
        </tr>
        <tr>
          <td>Jill</td>
          <td>Smith</td>
          <td>50</td>
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
        <label for="">Categry</label>
        <input type="text" name="category" value="">
        <label for="">Header Image</label>
        <input type="text" name="head_img" value="">

      </form>


    </div>

    <div id="updatecv">
      <h2>Resume: </h2>
      <hr>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum inventore in odio, vel soluta velit molestias saepe dicta! Culpa quo, minima animi! Temporibus fugit dolorum, recusandae sunt eius voluptatem animi ratione aperiam reprehenderit totam, nulla cupiditate reiciendis ex accusamus, minima placeat pariatur dolores perspiciatis? Blanditiis dicta, eos sint, adipisci id impedit ducimus aut odio pariatur reprehenderit, facere excepturi labore quaerat debitis odit eligendi hic rerum eius nihil ut distinctio illo? Quam nemo voluptatibus eum autem, illum enim voluptas quis repellendus cumque, nulla adipisci ducimus. Fugit blanditiis voluptates alias iusto, quidem distinctio, ad vel odio magni. Inventore reiciendis cupiditate soluta nobis omnis modi iusto itaque autem? Sit molestiae, architecto. Fugit necessitatibus mollitia facere voluptatum assumenda doloremque voluptas officia, aut voluptates alias ad natus, eos ea quis sint molestiae cum qui, voluptatibus nam itaque, facilis. Modi excepturi accusantium deleniti quod aut reiciendis voluptatibus totam assumenda iure? Sed sint, praesentium molestiae maiores laudantium.
    </div>

    <div id="allblog">
      <h2>Resume: </h2>
      <hr>


    </div>

  </div>
</div>


<?php require 'views/footer.php';?>
