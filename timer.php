<?php include('header.php'); ?>

<head>
    <title>Timer</title>
</head>
<?php $_SESSION["page"] = "timer"; ?>
<div class="direc">>Timer Page</div>

<div class="contant">
    <div class="boxTimer">
        <?php
            if (!isset($_SESSION['username'])){?>
        <div id="loginError">You need to login first</div>
            <?php }
            else {?>
        <?php if (isset($_SESSION['message'])){?>
        <div class="<?php echo $_SESSION['bad']?>"><?php echo $_SESSION['message'] ?></div>
        <?php } ?>


        
        <form action="saveData.php" method="post">

            <label for="tname">Name of the task:</label>
            <input type="text" name="taskName" id="tname" placeholder="Name the task"/> <div id="fillError">Give the task a name</div> <br />
            <label for="nOfx">Number of X's: (It should input the char x only)</label>
            <input type="text" name="xCount" id="nOfx" placeholder="..." /><br />


            <input type="checkbox" name="done" value="on" id="don"><label for="don">Done?</label><br />
            <label for="recor">Thoughts and Ideas recorder:</label> <br>


            <textarea name="recorder" rows="10" cols="70" placeholder="Record your ideas here" id="recor"></textarea> <br />

            <input type="submit" value="Save">
        </form>

        <?php }
        ?>
    </div>
</div>

<?php
include('footer.php');
?>
