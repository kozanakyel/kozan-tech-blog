<?php
session_start();
session_destroy();
header("Location:goat_phoneix.php?status=exit");
 ?>
