<?php

namespace App\Enums;

enum OrderStatusEnum: string
{
    case PENDING = 'PENDING';
    case CANCELLED = 'CANCELLED';
    case COMPLETED = 'COMPLETED';
    case DELIVERED = 'DELIVERED';
}
