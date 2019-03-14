<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Paginator;

use Hyperf\Contract\LengthAwarePaginatorInterface;
use Hyperf\Contract\PaginatorInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                PaginatorInterface::class => Paginator::class,
                LengthAwarePaginatorInterface::class => LengthAwarePaginator::class,
            ],
            'commands' => [
            ],
            'scan' => [
                'paths' => [
                ],
            ],
        ];
    }
}
