<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Event;

use CodeIgniter\Events\Events;

abstract class BaseEvent
{

    public function __construct()
    {
    }

    public static function className()
    {
        return get_called_class();
    }

    public static function on($callback)
    {
        return Events::on(static::className(), $callback);
    }

    public static function trigger(...$params)
    {
        $className = static::className();

        $event = new $className(...$params);

        return Events::trigger($className, $event);
    }

}