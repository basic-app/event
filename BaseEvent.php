<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Event;

use Psr\Log\LoggerAwareTrait;
use Psr\Log\NullLogger;

abstract class BaseEvent implements EventInterface
{

    use LoggerAwareTrait;

    public function __construct()
    {
        $this->setLogger(new NullLogger);
    }

}