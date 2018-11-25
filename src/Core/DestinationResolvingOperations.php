<?php
namespace Interop\Lenient\Messaging\Core;

interface DestinationResolvingOperations
{
    public function setDestinationResolver(/*DestinationResolver*/ $destinationResolver);
    public function getDestinationResolver();
}
