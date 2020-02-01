$(document).ready(function() {
    $('#header_link').click(function(){
        $('html,body').animate({scrollTop:0}, 'slow');
        return false;
    });
});