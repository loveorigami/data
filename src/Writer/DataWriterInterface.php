<?php

declare(strict_types=1);

namespace Yiisoft\Data\Writer;

interface DataWriterInterface
{
    public function write(iterable $items): void;
}
