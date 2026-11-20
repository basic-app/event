<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\Event;

use CodeIgniter\Events\Events;

abstract class Event implements EventInterface
{
    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public static function trigger(array $params = []): static
    {
        $class = get_called_class();

        $event = new $class($params);

        Events::trigger($class, $event);

        return $event;
    }

    public static function on($callback)
    {
        $class = get_called_class();

        Events::on($class, $callback);
    }
}
