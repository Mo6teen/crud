<?php include "db.php";?>
<?php include "functions.php";?> 
<?php include "includes/header.php";?>
<?php deleteRows();?>

<body>
<div class="container">
<div class="col-xs-6">
<h1 class="text-center">Delete</h1>
<form action="login_delete.php" method="post">
<div class="form-group">
    <label for="username">Username:</label>
    <input type="text" name="username" class="form-control" placeholder="Enter Username">
</div>
<div class="form-group">
<label for="password">Password:</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password">  
</div>
<div class="form-group">
    <select name="id" id="">

    <?php
   showAllData();
    ?> 

</select>
</div>
    <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
</form>
</div>
<?php include "includes/footer.php";?>