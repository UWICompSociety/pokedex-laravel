// creates the servr
var server = require('http').Server();

// creates the socket for duplex connections
var io = require('socket.io')(server);

// redis connections
var Redis = require('ioredis');
var redis = new Redis();

// subscribes to everything on this channel
redis.subscribe('test-channel');

// when any type of message comes in on this channel
redis.on('message', function(channel, message) {
	console.log(channel, message);
	
	message = JSON.parse(message);

	// console.log('Message Received');
	// console.log(message.data.username);

	io.emit(channel + ':' + message.event, message.data); // test-channel:UserSignedUp
});

server.listen(3000);