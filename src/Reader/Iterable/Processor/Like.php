<?php

declare(strict_types=1);

namespace Yiisoft\Data\Reader\Iterable\Processor;

use Yiisoft\Data\Reader\Filter\FilterProcessorInterface;

class Like implements IterableProcessorInterface, FilterProcessorInterface
{
    public function getOperator(): string
    {
        return \Yiisoft\Data\Reader\Filter\Like::getOperator();
    }

    public function match(array $item, array $arguments, array $filterProcessors): bool
    {
        if (count($arguments) !== 2) {
            throw new \InvalidArgumentException('$arguments should contain exactly two elements');
        }
        [$field, $value] = $arguments;
        return stripos($item[$field], (string)$value) !== false;
    }
}
