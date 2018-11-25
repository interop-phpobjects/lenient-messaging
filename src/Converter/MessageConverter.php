<?php
namespace Interop\Lenient\Messaging\Converter;

use Interop\Lenient\Messaging\Message;

interface MessageConverter
{
    public function toMessage($body, array $headers);
    public function fromMessage(/*Message*/ $message, $targetClass=null);
} 
