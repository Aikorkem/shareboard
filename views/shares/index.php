<!-- This is Shares INDEX -->
<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a class = "btn btn-success btn-share" href="<?php echo ROOT_PATH;?>shares/add">Share</a>
    <?php endif;?>
    <?php foreach($viewmodel as $item) : ?>
        <div class = "well share">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
            <hr>
            <p><?php echo $item['body']; ?></p>
            <br>
            <a class = "btn btn-default btn-dark" href="<?php echo $item['link']?>" target = "_blank" >Go to Website</a>
        </div>
    <?php endforeach; ?>
</div>