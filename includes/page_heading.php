<div class="row">
    <div class="greeting">
        <h1 class="greeting_text"><?php echo $page_head;?></h1>
    </div>
</div>

<?php
if(isset($_SESSION['update']) && $_SESSION['update']==true){
?>

<div class="alert alert-success" id="ring">
    <?php echo $_SESSION['update_name'];?> Profile updated successfully
</div>
<script>
    setTimeout(()=>{
        // $('#ring').css("display","none");
        <?php unset($_SESSION['update']);?>
    },5000);
</script>

<?php } ?>

<?php
if(isset($_SESSION['create']) && $_SESSION['create']==true){
    ?>

    <div class="alert alert-success" id="ring">
        <?php echo $_SESSION['create_name'];?> has been created
    </div>
    <script>
        setTimeout(()=>{
            // $('#ring').css("display","none");
            <?php unset($_SESSION['create']);?>
        },5000);
    </script>

<?php } ?>

<div class="row">
    <div class="breadcums">
        <a href="#">Home / </a>
        <a href="#">Dashboard / </a>
        <span><?php echo $page;?></span>
    </div>
</div>