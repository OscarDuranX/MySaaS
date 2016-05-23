var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

io.on('connection', function (socket){
    socket.on('hello',function(){
        console.log('Hello World!');
    });

    socket.on('by',function(){
        console.log('By World!');
    });

    socket.on('off',function(){
        console.log('Off World!');
    });

});

http.listen('3000', function(){
   console.log('Listening on port 3000');
});


// Client
// io.emit('Hello');
