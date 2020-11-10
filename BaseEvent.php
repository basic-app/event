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
use CodeIgniter\HTTP\RedirectResponse;

abstract class BaseEvent
{

    use TriggerTrait;
    
    use LoggerAwareTrait {setLogger as setLoggerTrait;}

    protected $_result;

    public function __construct()
    {
        $this->setLogger(new NullLogger);
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->setLoggerTrait($logger);

        return $this;
    }

    public function getResult()
    {
        return $this->_result;
    }

    public function getRedirect()
    {
        $result = $this->getResult();

        if ($result instanceof RedirectResponse)
        {
            return $result;
        }

        return null;
    }

    public function setResult($result)
    {
        $this->_result = $result;

        return $this;
    }

}