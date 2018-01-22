<script src="../public/autobahn.js"></script>
<script>
    var conn = new ab.Session('ws://127.0.0.1:82',
        function() {
            conn.subscribe('kittensCategory', function(topic, data) {
                // This is where you would add the new article to the DOM (beyond the scope of this tutorial)
                console.log('New article published to category "' + topic + '" : ' + data.title);
            });
        },
        function() {
            console.warn('WebSocket connection closed');
        },
        {'skipSubprotocolCheck': true}
    );
</script>