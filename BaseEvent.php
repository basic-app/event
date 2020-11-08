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
use CodeIgniter\Events\Events;

abstract class BaseEvent implements EventInterface
{

    use LoggerAwareTrait {
        setLogger as setLoggerTrait;
    }    

    public function __construct(?LoggerInterface $logger = null)
    {
        if (!$logger)
        {
            $logger = new NullLogger;
        }

        $this->setLogger($logger);
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->setLoggerTrait($logger);

        return $this;
    }

    public function trigger(string $name, ...$params)
    {
        return Events::trigger($name, ...$params);
    }

}