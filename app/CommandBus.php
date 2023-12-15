<?php

namespace App;

use Illuminate\Support\Facades\App;
use ReflectionClass;

class CommandBus
{
    public function handle($command)
    {
        $handler = $this->resolveHandler($command);

        return $handler($command);
    }

    private function resolveHandler($command)
    {
        $reflection = new ReflectionClass($command);
        $handlerName = str_replace('Command', 'Handler', $reflection->getShortName());
        $handlerName = str_replace($reflection->getShortName(), $handlerName, $reflection->getName());

        $handler = App::make($handlerName);

        return $handler;
    }
}
