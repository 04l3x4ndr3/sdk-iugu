<?php

namespace O4l3x4ndr3\SdkIugu\Types;

class InvoiceItem
{
    private ?string $description;
    private ?int $quantity;
    private ?int $price_cents;
    private ?bool $_destroy;

    /**
     * @param string|null $description
     * @param int|null $quantity
     * @param int|null $price_cents
     * @param bool|null $_destroy
     */
    public function __construct(?string $description = null, ?int $quantity = null, ?int $price_cents = null, ?bool $_destroy = false)
    {
        $this->description = $description;
        $this->quantity = $quantity;
        $this->price_cents = $price_cents;
        $this->_destroy = $_destroy;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): InvoiceItem
    {
        $this->description = $description;
        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): InvoiceItem
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getPriceCents(): ?int
    {
        return $this->price_cents;
    }

    public function setPriceCents(?int $price_cents): InvoiceItem
    {
        $this->price_cents = $price_cents;
        return $this;
    }

    public function isDestroy(): ?bool
    {
        return $this->_destroy;
    }

    public function setDestroy(?bool $destroy): InvoiceItem
    {
        $this->_destroy = $destroy;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}