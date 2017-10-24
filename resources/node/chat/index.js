
var io = require('socket.io').listen(8181);


var users_online = [];

io.sockets.on('connection', function (socket) {

    socket.on ('new user', function (username) {
        socket.username = username;

        users_online[username] = username;
        
        users = [];

        for (user in users_online) {
            users.push(user);
        }
        socket.broadcast.emit('new online user' , username);
        socket.emit('users online',users);

    });

    socket.on('new message', function(msg) {
        socket.broadcast.emit('new message all', msg, socket.username);
        socket.emit('new message single', msg, socket.username);
    });

    socket.on('disconnect', function() {
        socket.broadcast.emit('disconnect user', socket.username);
        delete users_online[socket.username];
    });

});