<?php
namespace Interop\Lenient\Messaging;

interface MessageHandler
{
    /**
     * Handle the given message.
     * @param message the message to be handled
     */
    public function handleMessage(/*Message*/ $message);
}
