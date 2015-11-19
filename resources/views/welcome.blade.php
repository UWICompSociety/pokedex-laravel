<!DOCTYPE html>
<html>
    <head>
        <title>CS App</title>
    </head>
    <body>
        <h1>New Users</h1>

        <ul>
            <li v-for="user in users">@{{ user }}</li>
        </ul>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.7/socket.io.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.min.js"></script>
        <script>
            var socket = io("http://192.168.0.100:3000");  

            new Vue({
                el: 'body',

                data: {
                    users: []
                },

                ready: function() {
                    // socket.on('test-channel:UserSignedUp', function(data){
                    socket.on('test-channel:App\\Events\\UserSignedUp', function(data){
                        // console.log(data);
                        this.users.push(data.username);
                        console.log(this.users);

                    }.bind(this));
                }
            });
        </script>
    </body>
</html>
