<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Event;

use Psr\Log\LoggerAwareTrait;
use Psr\Log\NullLogger;
use Psr\Log\LoggerInterface;

abstract class BaseEvent
{

    use TriggerTrait;
    
    use LoggerAwareTrait {setLogger as setLoggerTrait;}

    public function __construct()
    {
        $this->setLogger(new NullLogger);
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->setLoggerTrait($logger);

        return $this;
    }

}