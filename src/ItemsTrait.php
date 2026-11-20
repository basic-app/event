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

    public function sortItems(): void
    {
        uasort($this->items, fn($a, $b) => ($a['sort'] ?? 0) <=> ($b['sort'] ?? 0));
    }

    public function addItems(array $items): static
    {
        $this->items = array_merge(
            $this->items,
            $items
        );

        return $this;
    }

    public function prependItems(array $items): static
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
