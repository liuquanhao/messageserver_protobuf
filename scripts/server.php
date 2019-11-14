<?php

require_once 'Packet.php';
require_once 'Message.php';
require_once 'MessageValue.php';
require_once 'Command.php';
require_once 'State.php';
require_once 'Sender.php';

$serv = new Swoole\WebSocket\Server('0.0.0.0', 9501, SWOOLE_BASE);
$serv->on('message', function($serv, $frame) {
    $packet = new Packet();
    $packet->parseFromString($frame->data);
    var_dump($packet->getSender(), $packet->getReceiveUsers(), $packet->getReceiveGroups(), $packet->getType(), $packet->getTimestamp(), $packet->getAuthKey());
    $message = new Message();
    $message->parseFromString($packet->getData());
    var_dump($message);
    $serv->push($frame->fd, $packet->serializeToString(), WEBSOCKET_OPCODE_BINARY);
});
$serv->start();
