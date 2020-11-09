<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Event;

use Closure;
use CodeIgniter\Events\Events;

trait TriggerTrait
{

    public function trigger($event, ...$params)
    {
        if ($event instanceof Closure)
        {
            return $event($this, ...$params);
        }

        if (is_callable($event))
        {
            return call_user_func($this, ...$params);
        }

        return Events::trigger($event, $this, ...$params);
    }

}