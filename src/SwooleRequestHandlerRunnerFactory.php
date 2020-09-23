<?php

/**
 * @see       https://github.com/mezzio/mezzio-swoole for the canonical source repository
 * @copyright https://github.com/mezzio/mezzio-swoole/blob/master/COPYRIGHT.md
 * @license   https://github.com/mezzio/mezzio-swoole/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Mezzio\Swoole;

use Psr\Container\ContainerInterface;
use Swoole\Http\Server as SwooleHttpServer;

class SwooleRequestHandlerRunnerFactory
{
    public function __invoke(ContainerInterface $container): SwooleRequestHandlerRunner
    {
        return new SwooleRequestHandlerRunner(
            $container->get(SwooleHttpServer::class),
            $container->get(Event\EventDispatcherInterface::class)
        );
    }
}
