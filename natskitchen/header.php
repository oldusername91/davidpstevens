  <div class='container-fluid'>
   <div class='row'>
       <div class='col-sm-11 cartBar'></div><div class='col-sm-1 cartBar'><a href=''><i class ='fa fa-shopping-cart fa-2x' id='cartIcon'></i></a></div>
   </div>
    <div class='row'>
        <div class='col-sm-12 header'>
                <nav class='navbar' id='headNavbar'>
                    <div class='row'>
                        <ul>
                            <div class='col-sm-1'></div>
                            <div class='col-sm-2 navva growable'><li><a href='index.php'><img class='logoImg' src="img/logo_round.gif"></img></a></li></div>
                            <div class='col-sm-2 navva navt'><li><a class='menuHead' href='about.php'>About</a></li></div>
                            <div class='col-sm-2 navva'><li><img class='logoImg' src="img/logo_square.gif"></img></li></div>
                            <div class='col-sm-2 navva navt'><li><a class='menuHead'>Contact</a></li></div>
                            <div class='col-sm-2 navva navt growable' id='orderBtn'><li ><a >Order Online</a></li></div>
                            <div class='col-sm-1'></div>
                        </ul>
                    </div>
                </nav>
        </div>
    </div>
    <!-- inview.js by Remy Sharp, 'bindable 'inview' event for detecting when an element is scrolled into view' http://download.remysharp.com/jquery.inview.js accessed 11-4-16-->
    <script src='js/inview.js'></script>
    
    <?php include_once('stickyMenu.php');?>
    <script>
       $(document).ready(function(){
           $('#stickyMenu').hide();
        });
    </script>
    <div class='row'>
        <div class='col-sm-12' id='horizontalLine'></div>
    </div>