<!-- This is login -->

<h3 class = "panel-title">
    User Login
</h3>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <div class = "form-group">
        <label>Email</label>
        <input type="email" name="email" class = "form-control">
    </div>
    <div class = "form-group">
        <label>Password</label>
        <input type="password" name="password" class = "form-control">
    </div>
    <input id = "buttons" class = "btn btn-primary buttons" name = "submit" type="submit" value="Submit">
</form>
