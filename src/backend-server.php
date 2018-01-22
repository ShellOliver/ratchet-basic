<?php
//require dirname(__DIR__) . '/vendor/autoload.php';
//use ZMQContext;

//some stuff on the backend
//insert some data and...

// $entryData = array(
//         'category' => $_POST['category']
//       , 'title'    => $_POST['title']
//       , 'article'  => $_POST['article']
//       , 'when'     => time()
//     );

$entryData = array(
      'category' => 'kittensCategory',
      'title'    => 'PmBook',
      'article'  => '5',
      'when'     => time()
    );

$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://127.0.0.1:81");

$socket->send(json_encode($entryData));
echo 'sent';

// echo $_POST['category'];


