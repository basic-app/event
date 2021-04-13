<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Event;

use Webmozart\Assert\Assert;
use CodeIgniter\Events\Events;

abstract class BaseEvent
{

    public function __construct(array $params = [])
    {
        foreach($params as $key => $value)
        {
            Assert::propertyExists($this, $key);

            $this->$key = $value;
        }
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
        return Events::trigger(static::className(), ...$params);
    }

}