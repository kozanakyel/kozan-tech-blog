

<?php
include 'conn.php';

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
echo  $title = $_POST["title"];
echo   $short_inf = $_POST["short_inf"];
  echo $category = $_POST["category"];
  echo $head_img = $_POST["head_img"];
  echo $author = $_POST["author"];
  echo $blog_content = $_POST["blog_content"];



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
    header("Location:index.php?status=insert_blog");
    exit;
  }else {
    header("Location:index.php?status=failed_insert_blog");
    exit;
  }
}
?>
