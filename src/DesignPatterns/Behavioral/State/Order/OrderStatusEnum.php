<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\State\Order;

enum OrderStatusEnum: string
{
    case NEW = 'new';

    case IN_PREPARATION = 'inPreparation';
    case SHIPPED = 'shipped';

    case CANCELLED = 'cancelled';
}
