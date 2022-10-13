<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Inventory Records</h1>
         <h5>“We want to turn our inventory faster than our people.”</h5>
      </div>
    </div>
      <div style="position:fixed; color: black ;bottom:5px; left:570px;border: 2px solid #fc7b5b">
        <h4>Created by:</h4>
                 <h5> Ritwik Raj,
                      Nilesh Srivastava,
                      Jessy Joyner,
                      Sahana J</h5>
        
      </div>
     </div>
</div>
<?php include_once('layouts/footer.php'); ?>
