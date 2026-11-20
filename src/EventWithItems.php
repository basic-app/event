<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\Event;

class EventWithItems extends Event implements EventWithItemsInterface
{
    use ItemsTrait;

    public static function trigger(array $params = []): static
    {
        $event = parent::trigger($params);

        $event->sortItems();

        return $event;
    }
}
