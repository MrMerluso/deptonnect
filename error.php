<?php if(count($error)>0): ?>
    <?php foreach ($error as $e): ?>
        <p><?php echo $e; ?></p>
    <?php endforeach ?> 
<?php endif ?>