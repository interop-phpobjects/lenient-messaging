<?php
namespace Interop\Lenient\Messaging\Core;

interface DestinationResolver
{
    /**
     * @param  string $destinationName
     *　@return D $destination
     */
    public function resolveDestination($destinationName);
}
