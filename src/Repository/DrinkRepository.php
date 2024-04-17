<?php

namespace App\Repository;

use App\Model\Drink;
use Psr\Log\LoggerInterface;

class DrinkRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info('Drinks collection retrieved!');

        return [
            new Drink(1, 'Gorrila', 'energy drink', '450', 'lowmid'),
            new Drink(2, 'Drive me', 'energy drink', '300', 'good'),
        ];
    }
}
