<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Event;

abstract class BaseEvent
{

    use TriggerTrait;

    public function __construct()
    {
    }

}