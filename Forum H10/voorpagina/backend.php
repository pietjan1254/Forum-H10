<link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
<?php include('../Register/functions.php');?>

<?php
if(isset($_SESSION['user'])){
?>

<style>
    .textheader ul{
       display: none; 
    }
    .user{
        color: white;
        transform: translateY(+110%);
        float: right;
        padding-right: 300px;
    }
    .user svg{
        font-family: 'Tangerine', serif;
        width: 30px;
        color: white;
    }
</style>

    <div class="user"><H1>hallo <?= $_SESSION['user']?><i class="fa-solid fa-user"></i></H1> </div>
    
<?php
} else {
?>
<div class="headerrechts">
    <p class="da">nog niks</p>
    </div>
<?php
}
?>