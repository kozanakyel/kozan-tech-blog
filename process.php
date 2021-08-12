

<?php
ob_start();
session_start();
include 'conn.php';

//login dragon
if (isset($_POST["go_dragon"])) {
  $dragon = md5($_POST["password"]);

  $user_task = $conn->prepare("SELECT * FROM user
                WHERE password= ?");
  $user_task->execute(array(
    $dragon
  ));
  echo $affected=$user_task->rowCount();
  $user_fetch = $user_task->fetch(PDO::FETCH_ASSOC);
  if ($affected == 1) {
      $_SESSION["dragon_user"] = $user_fetch["email"];
      header("Location:admin.php?status=success_login");
      exit;
  }else {
    header("Location:goat_phoneix.php?status=failed_login");
    exit;
  }
}

//contact messages insert
if (isset($_POST['msg_submit'])) {
  $cname = $_POST['c_name'];
  $cemail = $_POST['c_email'];
  $cmsg = $_POST['c_msg'];
  echo $cmsg, $cname, $cemail;

  $contact_task = $conn->prepare("INSERT INTO contact_msg SET
            name = ?,
            email = ?,
            msg = ?");
  $insert_msg = $contact_task->execute(array(
    $cname, $cemail, $cmsg
  ));
  if ($insert_msg) {
    header("Location:index.php?status=msg_success");
    exit;
  }else {
    header("Location:index.php?status=msg_failed");
    exit;
  }
}

//Chsen message DELETE
if (isset($_POST["chosen_msg_delete"])) {
  $deleted_msg = $_POST["id_msg"];

  $dlt_msg = $conn->prepare("DELETE FROM contact_msg
                  WHERE contact_id = ?");
  $dlt = $dlt_msg->execute(array($deleted_msg));
  if ($dlt) {
    header("Location:admin.php?status=delete_msg");
    exit;
  }else {
    header("Location:admin.php?status=failed_delete_msg");
    exit;
  }
}

//Chsen message READ
if (isset($_POST["chosen_msg_read"])) {
  $read_msg_id = $_POST["id_msg"];

  $read_msg = $conn->prepare("UPDATE contact_msg SET status=1
                  WHERE contact_id = ?");
  $read = $read_msg->execute(array($read_msg_id));
  if ($read) {
    header("Location:admin.php?status=read_msg");
    exit;
  }else {
    header("Location:admin.php?status=failed_read_msg");
    exit;
  }
}

//Add a New Blogs
if (isset($_POST["addblog"])) {
  $title = $_POST["title"];
  $short_inf = $_POST["short_inf"];
  $category = $_POST["category"];
  $head_img = $_POST["head_img"];
  $author = $_POST["author"];
  $blog_content = $_POST["blog_content"];

  $blog_task = $conn->prepare("INSERT INTO blog SET
            title = ?,
            short_desc = ?,
            header_img = ?,
            category=?,
            content=?,
            author=?");
  $insert_blog = $blog_task->execute(array(
    $title, $short_inf, $head_img, $category, $blog_content, $author
  ));
  if ($insert_blog) {
    header("Location:admin.php?status=insert_blog");
    exit;
  }else {
    header("Location:admin.php?status=failed_insert_blog");
    exit;
  }
}

//update_p_blog
if (isset($_POST["updateblog"])) {
  echo $_POST["uid"];
  $update_b = $conn->prepare("UPDATE blog SET
                title=?,
                short_desc=?,
                header_img=?,
                category=?,
                author=?,
                content=?
                WHERE id=?");
  $update_blog = $update_b->execute(array(
    $_POST["utitle"], $_POST["ushort_inf"],$_POST["uhead_img"],$_POST["ucategory"],$_POST["uauthor"],$_POST["blog_content_update"],$_POST["uid"]
  ));
  if ($update_blog) {
    header("Location:admin.php?status=update_blog");
    exit;
  }else {
    header("Location:admin.php?status=failed_update_blog");
    exit;
  }
}

?>
