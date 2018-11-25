<?php
namespace Interop\Lenient\Messaging;

interface PollableChannel extends MessageChannel
{
    public function receive($timeout=null);
}
