<?php require 'views/header.php';?>

<div class="main-body">

  <div class="description">

    <h1>Description: </h1>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum quae, rerum sapiente, ad similique tenetur, quaerat at, repellendus accusantium voluptatibus. Sit rem maiores facere mollitia veniam. Est a veniam explicabo aut optio incidunt unde nam inventore, tenetur eaque. Voluptatem, deserunt quo obcaecati perspiciatis sed odit hic ratione, cumque magni. Dolores vitae non placeat fugiat sapiente possimus, quisquam dolore eius aliquid natus, nobis ut, tempore porro sed. Earum velit, culpa inventore impedit, ipsam illo doloremque vero nobis? Ratione eaque rem incidunt tempora, explicabo autem hic aliquid. Autem officiis recusandae sequi libero officia voluptatem praesentium sunt a quaerat assumenda esse eaque amet ratione quia eos vero quis atque nisi nemo, eligendi quo sit, repellendus cumque. Cupiditate assumenda ut, consequuntur maxime. Dolorem delectus autem, perferendis quod quasi laborum odio ex distinctio facilis, repellendus ipsam magni voluptas porro. Reiciendis fugit nihil odio pariatur quae odit, unde. Repellendus nulla ratione, sequi maxime fugiat harum id ipsam qui iste recusandae ex eveniet nam sit aspernatur cum aut rerum tempora modi. Ducimus iste necessitatibus, sequi ipsa debitis eaque veritatis et velit possimus in molestias consequatur aliquid minima modi molestiae, vel iure. Vitae quibusdam, modi veritatis cum distinctio quo debitis sequi iste minima saepe ipsum quia nihil nisi, voluptate ut. Magnam nulla assumenda, veniam corporis enim aut temporibus deserunt iusto dolore! Dolore facere blanditiis maxime? Dolores esse repellat neque aliquam eos accusantium id nisi. Pariatur ut velit atque mollitia earum vero expedita omnis, harum minima in eius dolores inventore officiis fugit facere. Perspiciatis commodi, quas delectus repellat!</p>
  </div>
  <hr>

  <div class="education-img" >
    <div class="img-resume">
      <img src="profile1.png" style="max-width:250px; max-height:250px;">
    </div>

   <div class="education">
    <h1>University</h1>
    <h2></h2>
    <h2>Grade:</h2> <h2>3.56</h2>
   </div>
  </div>
  <hr>

  <div class="skills">
    <li>python: <i class="fab fa-python fa-2x"></i></li>
    <li>java</li>
    <li>matlab</li>
  </div>
  <hr>

  <div class="projects">
    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt odit illo, ipsa, libero alias impedit temporibus deleniti sit dolores sequi, officiis rem quis! Vitae est distinctio culpa explicabo consectetur, beatae nemo debitis nostrum, asperiores nam fuga similique reprehenderit qui. Laudantium.<a href="https://murmuring-harbor-71083.herokuapp.com/">go project</a> </li>
    <li>Blog site: <a href="https://murmuring-harbor-71083.herokuapp.com/"></a> </li>
  </div>
  <hr>

  <div class="hobby">
    <li>football</li>
    <li>crypto</li>
  </div>
  <hr>


<!--Contact me-->
  <div class="contact">
    <h2>Contact Me!</h2>
    <form action="">

     <label for="c_name">Name</label>
     <input type="text" id="fname" name="c_name" placeholder="Your name..">
     <label for="c_email">Email</label>
     <input type="email" id="c_email" name="c_email" placeholder="Your email..">
     <label for="subject">Message: </label>
     <textarea id="subject" name="message" placeholder="Write Message.." style="height:200px"></textarea>

     <input type="submit" value="Send Message">

     </form>
  </div>


</div>


  <?php require 'views/footer.php';?>
