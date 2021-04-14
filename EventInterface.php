<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Event;

interface EventInterface
{

    public static function eventName() : string;

    public static function on($callback);

    public static function trigger(...$params) : EventInterface;

}