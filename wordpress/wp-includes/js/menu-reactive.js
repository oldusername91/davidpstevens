var navItems;
var stickyItems;
stickyItems = $('.stickyLink');
navItems = $('.menuHead');
navItems.mouseover(function () {
$(this).css('border-bottom','3px solid white');
});
navItems.mouseout(function () {
$(this).css('border-bottom','none');
});
stickyItems.mouseover(function () {
$(this).css('color','#EA2533');
});
stickyItems.mouseout(function () {
$(this).css('color','blue');
});
$('#orderBtn').mouseover(function () {
$(this).addClass('grow'); 
});
$('.growable').mouseout(function() {
    $('.growable').removeClass('grow');  
 });