<?php
namespace Interop\Lenient\Messaging;

interface Message
{
    public function getHeaders();
    public function getPayload();
}
