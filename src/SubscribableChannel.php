<?php
namespace Interop\Lenient\Messaging;

interface SubscribableChannel extends MessageChannel
{
    public function subscribe(/*MessageHandler*/ $handler);
    public function unsubscribe(/*MessageHandler*/ $handler);
}
