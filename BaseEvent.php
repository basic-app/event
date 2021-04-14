<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Event;

use CodeIgniter\Events\Events;

abstract class BaseEvent implements EventInterface
{

    public function __construct()
    {
    }

    public static function eventName() : string
    {
        return get_called_class();
    }

    public static function on($callback)
    {
        return Events::on(static::eventName(), $callback);
    }

    public static function trigger(...$params) : EventInterface
    {
        $className = static::eventName();

        $event = new $className(...$params);

        Events::trigger($className, $event);
    
        return $event;
    }

}