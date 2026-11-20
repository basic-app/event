<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\Event;

interface EventWithItemsInterface extends EventInterface
{
    public function sortItems(): void;

    public function getItems(): array;

    public function addItems(array $items): static;

    public function prependItems(array $items): static;
}
