<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\Event;

trait ItemsTrait
{
    public array $items = [];

    public function addItems(array $items): EventInterface
    {
        $this->items = array_merge(
            $this->items,
            $items
        );

        return $this;
    }

    public function prependItems(array $items): EventInterface
    {
        $this->items = array_merge(
            $items,
            $this->items
        );

        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
