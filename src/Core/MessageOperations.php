<?php
namespace Interop\Lenient\Messaging\Core;

use Interop\Lenient\Messaging\Message;

interface MessageOperations
{
    public function receive($destination=null);
    public function receiveAndConvert($destination=null,$targetClass=null);
    public function send($destination, /*Message*/ $message);
    public function convertAndSend($destination, $payload, array $headers=null, $postProcessor=null);
    public function sendAndReceive($destination, /*Message*/ $requestMessage);
    public function convertSendAndReceive($destination, $request, array $headers=null,
                    $targetClass=null, $postProcessor=null);
}