<div class="contact">
  <form action="process.php" method="post">
    <h2>Contact Me</h2>
   <label for="c_name">Name</label>
   <input required type="text"name="c_name" placeholder="Your name..">
   <label for="c_email">Email</label>
   <input required type="email" name="c_email" placeholder="Your email..">
   <label for="subject">Message: </label>
   <textarea required id="subject" name="c_msg" placeholder="Write Message.." style="height:200px"></textarea>

   <input type="submit" name="msg_submit" value="Send Message">

   </form>
</div>
