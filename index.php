<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

test conflict
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>

        <script>

            var connection = new WebSocket('ws://127.0.0.1:55555/echoServer');
            // When the connection is open, send some data to the server
            connection.onopen = function () {
//  connection.send('Ping'); // Send the message 'Ping' to the server
                console.log('connection open');
                connection.send("hi from client");
            };

// Log errors
            connection.onerror = function (error) {
                console.log('WebSocket Error ');
                console.log(error);
            };

// Log messages from the server
            connection.onmessage = function (e) {
                console.log('message : ');
                console.log(e.data);
            };

            connection.onclose = function () {
                console.log('connection closed');
            }
        </script>
    </body>
</html>
