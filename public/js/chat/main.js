var socket = io('http://localhost:8181');

var login = false;

$('.login').click(function() {
    $('.login-field').hide();
    $('.loader').show();
    setTimeout("$('.main').show()", 2000);
    setTimeout("$('.loader').hide()", 2000);
    login = true;
    socket.emit('new user', $(".username-login").val());
});

$('.send-msg').click(function() {
    socket.emit('new message', $('.message').val());
});

$(".message").keyup(function(e){
    var code = e.which; // recommended to use e.which, it's normalized across browsers
    if(code==13)e.preventDefault();
    if(code==32||code==13||code==188||code==186){
        $('.send-msg').click();
    } // missing closing if brace
});