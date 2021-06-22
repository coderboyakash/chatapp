const express = require('express');

const app = express();

const server = require('http').createServer(app);

const io = require('socket.io')(server, {
    cors: { origin : '*'}
});

io.on('connection', (socket) => {
    console.log('connected');
    socket.on('sendChatToServer', (message, id, name) => {
        socket.broadcast.emit('sendChatToClient', message, id, name)
    })

    socket.on('disconnect', (socket) => {
        // 
    })
});

server.listen(3000, () => {
    // 
})