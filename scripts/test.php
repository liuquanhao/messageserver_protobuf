<?php

require_once 'MessageStruct.php';
require_once 'Message.php';
require_once 'Command.php';
require_once 'State.php';
require_once 'Google/Protobuf/Any.php';

$messageStruct = new MessageStruct();
$messageStruct->setType(1);
$messageStruct->setFrom(111);
$messageStruct->setTo(222);
$message = new Message();
$message->setContentType(0);
$message->setContent('hello你好');
$any = new Google\Protobuf\Any();
$messageStruct->setData($any->setValue($message->serializeToString()));
//$message = new Message();
//$message->setContentType(1);
//$message->setContent('http://test.com/1.jpg');
//$any = new Google\Protobuf\Any();
//$messageStruct->setMessage($any->setValue($message->serializeToString()));
//$command = new Command();
//$command->setCommand('exit');
//$messageStruct->appendMessages($command);
//$state = new State();
//$state->setCode(0);
//$state->setDescription("退出");
//$messageStruct->appendMessages($state);
$messageStruct->dump();
$data = $messageStruct->getData()->getValue();
$msgTmp = new Message();
$msgTmp->parseFromString($data);
$msgTmp->dump();
