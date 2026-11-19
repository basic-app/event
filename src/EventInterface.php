<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\Event;

interface EventInterface
{
    public function __construct(array $data = []);

    public static function trigger(array $params = []): EventInterface;

    public static function on($callback);
}
