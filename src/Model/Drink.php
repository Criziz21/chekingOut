<?php

namespace App\Model;

class Drink
{
        public function __construct(private int $id,
            private string $name,
            private string $type,
            private int $cost,
            private string $taste, )
    {
        
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCost(): int
    {
        return $this->cost;
    }

    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getTaste(): string
    {
        return $this->taste;
    }

    public function setTaste(int $taste): self
    {
        $this->taste = $taste;

        return $this;
    }
}
