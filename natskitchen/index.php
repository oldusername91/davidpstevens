<?php
require_once('head.php');
?>
<body>
<?php include_once('header.php');
?>
    <script>
    $(document).ready(function(){
    $('.bxslider').bxSlider();
});
    </script>
<div class='row'>
    <div class='col-sm-9' id='indexWrapper'>
        <ul class='bxslider'>
            <li><img src="img/chiaseedtext.jpg"/></li>
            <li><img src='img/frittataLarge.jpg'/></li>
            <li><img src='img/pancakeLarge.jpg'/></li>
        </ul>
    </div>
    <div class='col-sm-3 sidebar'>
        <?php require_once('sidebar.php');?>
    </div>
</div>
<?php include_once('footer.php');?>
    <script src='js/menu-reactive.js'></script>
</body>