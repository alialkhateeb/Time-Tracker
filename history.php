<?php
include('header.php');
require_once 'Dao.php';
require_once 'Render.php';
$dao = new Dao();
?>

<head>
    <title>History</title>
</head>

<div class="direc">>History Page</div>
<div class="contant">
    <div class="historyTable">

        <?php if (!isset($_SESSION["username"])){?>
            <div id="loginError">You need to login first</div>
        <?php } ?>

        <?php
            if (isset($_SESSION["username"])){

            ?>

                <?php
                $table = $dao->getTask($_SESSION["username"]);

                Render::renderTable($table);
                ?>

            <?php } ?>

    </div>

</div>

<?php
include('footer.php');
?>
