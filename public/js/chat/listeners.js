socket.on('new online user', function (username) {
    if (!login) return false;
    $('.chat-users').append('<div class="user user-' + username + '">' +
    '<div class="avatar">' +
    '<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">' +
    '<div class="status online"></div>' +
    '</div>' +
    '<div class="name">' + username + '</div>' +
    '<div class="mood">Info</div>' +
    '</div>');
});

socket.on('users online', function (users) {
    users.forEach(function (username, i, users) {
        $('.chat-users').append('<div class="user user-' + username + '">' +
            '<div class="avatar">' +
            '<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">' +
            '<div class="status online"></div>' +
            '</div>' +
            '<div class="name ">' + username + '</div>' +
            '<div class="mood">Info</div>' +
            '</div>');
    });
});

socket.on('new message all', function (msg, username) {
    $('.answer-add').before('<div class="answer left ">'+
        '<div class="avatar">'+
        '<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name"><div class="status online">'+
        '</div>'+
        '</div>'+
        '<div class="name ">'+username+'</div>'+
    '<div class="text">'+msg+'</div>'+
    '<div class="time">5 min ago</div>'+
    '</div>');
});

socket.on('new message single', function (msg, username) {
    $('.answer-add').before('<div class="answer right">'+
        '<div class="avatar">'+
        '<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name"><div class="status online">'+
        '</div>'+
        '</div>'+
        '<div class="name">'+username+'</div>'+
        '<div class="text">'+msg+'</div>'+
        '<div class="time">5 min ago</div>'+
        '</div>');
});


socket.on('disconnect user', function (username) {
    $(".user-"+username).remove();
});