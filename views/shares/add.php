<!-- This is add -->
<h3>Share Something</h3>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    
    <label>Share Title</label>
    <input type="text" name="title" class = "form-control">

    <label>Body</label>
    <textarea name="body" class = "form-control" id=""></textarea>

    <label>Link</label>
    <input type="text" name="link" class = "form-control">
    <div class = "buttons">
        <input class = "btn btn-primary" name = "submit" type="submit" value="Submit">
        <a class = "btn btn-danger" href="<?php echo ROOT_PATH;?>shares">Cancel</a>
    </div>
</form>
    

