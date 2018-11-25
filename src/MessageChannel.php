<?php
namespace Interop\Lenient\Messaging;

interface MessageChannel
{
    public function send(/*Message */$message, $timeout=null);
    public function close();
}
