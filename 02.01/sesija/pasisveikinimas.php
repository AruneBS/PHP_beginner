<?php

session_start();



?>
<?php if (isset($_SESSION['vardas'])) : ?>
    <div>Sveiki, <?php echo $_SESSION['vardas']; ?>
     <?php echo $_SESSION['pavarde'] ;  ?></div>
<?php endif; ?>