    <div class='row'>
        <div class='col-sm-12' id='line'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-12 navbar' id='innerFooter'>
            <div class='row'>
                <div class='col-sm-12'>
                    
                            <div class='row'>
                                <div class='col-sm-3'></div>
                                    <ul class='col-sm-6'>
                                            <div class='row'>
                                            <div class='col-sm-4 navva navt'><li><a>About</a></li></div>
                                            <div class='col-sm-4 navva'><li><a href='index.php'><img class='logoImg' src='img/logo_round.gif'></a></li></div>
                                            <div class='col-sm-4 navva navt'><li><a>Find Us</a></li></div>
                                        </div>
                                    </ul>
                                <div class='col-sm-3'></div>
                            </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JS for sticky menu -->
<script>
$('#headNavbar').bind('inview', function (event, visible) {
    if (visible) {
        $('#stickyMenu').hide();
      $(this).show;
    } else {
      $('#stickyMenu').show(250);
    }
  });

</script>