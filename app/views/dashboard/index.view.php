<?php
    
?>

<?php require __DIR__ .    '/../partials/header.php'; ?>

<?php require __DIR__ .    '/../partials/nav.php'; ?>
    
<div class="container">
    <div class="row">
     <?php require __DIR__ .    '/../partials/sidebar.php'; ?>
        <div class="col-md-9">
         <div class="panel-heading" style="background-color:#EEE8AA">
            Calendar 
            <?= isset($_SESSION['user_id']) ?  $_SESSION['name'] : ''; ?>
            
            </div>

            <div class="panel panel-warning">
                <div class="panel-body">
                    <div id="calendar"></div>
                </div>
            </div>

        </div>
   </div>
</div>

</body>
</html>