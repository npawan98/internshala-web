<?php 
session_start();
session_unset();
session_destroy();
header("location:/final/index.php");
?>


	<div align="center" style="font-size: 18px;">
<p>
<a href="index.php"><button class="btn btn-primary">Start Shopping</button> <br></a> or<br> <button data-toggle="modal" data-target="#pz" class="btn btn-primary">Login</button>
</p>
</div>

<?php require 'login_modal.php'; ?>
