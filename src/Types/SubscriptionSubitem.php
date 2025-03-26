<?php

namespace O4l3x4ndr3\SdkIugu\Types;

class SubscriptionSubitem
{
    private ?string $description;
    private ?int $price_cents;
    private ?int $quantity;
    private ?bool $recurrent;

    /**
     * @param string $description
     * @param int $price_cents
     * @param int $quantity
     * @param bool|null $recurrent
     */
    public function __construct(string $description, int $price_cents, int $quantity = 1, ?bool $recurrent = false)
    {
        $this->description = $description;
        $this->price_cents = $price_cents;
        $this->quantity = $quantity;
        $this->recurrent = $recurrent;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): SubscriptionSubitem
    {
        $this->description = $description;
        return $this;
    }

    public function getPriceCents(): ?int
    {
        return $this->price_cents;
    }

    public function setPriceCents(?int $price_cents): SubscriptionSubitem
    {
        $this->price_cents = $price_cents;
        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): SubscriptionSubitem
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getRecurrent(): ?bool
    {
        return $this->recurrent;
    }

    public function setRecurrent(?bool $recurrent): SubscriptionSubitem
    {
        $this->recurrent = $recurrent;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}