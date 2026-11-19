<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\Event;

class EventWithItems extends Event
{
    use ItemsTrait;
}
