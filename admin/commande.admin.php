<?php
require_once '../includes/init.inc.php';
 require_once 'header.admin.php';
 ?>


<div class="container" style="margin-top: 130px;" >
  <h1 class="text-center">Les commandes</h1><br>
  <?php 
  tous_commandes();
 
  ?>
</div>

<?php
 require_once 'footer.admin.php'; ?>