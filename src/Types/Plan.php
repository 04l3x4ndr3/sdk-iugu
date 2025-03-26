<?php

namespace O4l3x4ndr3\SdkIugu\Types;

class Plan
{
    private ?string $name;
    private ?string $identifier;
    private ?string $interval_type;
    private ?string $interval;
    private ?int $value_cents;
    private ?array $payable_with;
    private ?array $features;
    private ?int $billing_days;
    private ?int $max_cycles;
    private ?int $invoice_max_installments;

    /**
     * @param string|null $name
     * @param string|null $identifier
     * @param string|null $interval_type
     * @param string|null $interval
     * @param int|null $value_cents
     * @param array|null $payable_with
     */
    public function __construct(?string $name = null, ?string $identifier = null, ?string $interval_type = null, ?string $interval = null, ?int $value_cents = null, ?array $payable_with = null)
    {
        $this->name = $name;
        $this->identifier = $identifier;
        $this->interval_type = $interval_type;
        $this->interval = $interval;
        $this->value_cents = $value_cents;
        $this->payable_with = $payable_with;
        $this->features = null;
        $this->billing_days = null;
        $this->max_cycles = null;
        $this->invoice_max_installments = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Plan
    {
        $this->name = $name;
        return $this;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): Plan
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function getIntervalType(): ?string
    {
        return $this->interval_type;
    }

    public function setIntervalType(?string $interval_type): Plan
    {
        $this->interval_type = $interval_type;
        return $this;
    }

    public function getInterval(): ?string
    {
        return $this->interval;
    }

    public function setInterval(?string $interval): Plan
    {
        $this->interval = $interval;
        return $this;
    }

    public function getValueCents(): ?string
    {
        return $this->value_cents;
    }

    public function setValueCents(?int $value_cents): Plan
    {
        $this->value_cents = $value_cents;
        return $this;
    }

    public function getPayableWith(): ?array
    {
        return $this->payable_with;
    }

    public function setPayableWith(?array $payable_with): Plan
    {
        $this->payable_with = $payable_with;
        return $this;
    }

    public function getFeatures(): ?array
    {
        return $this->features;
    }

    public function addFeatures(PlanFeature $feature): Plan
    {
        $this->features[] = $feature->toArray();
        return $this;
    }

    public function getBillingDays(): ?int
    {
        return $this->billing_days;
    }

    public function setBillingDays(?int $billing_days): Plan
    {
        $this->billing_days = $billing_days;
        return $this;
    }

    public function getMaxCycles(): ?int
    {
        return $this->max_cycles;
    }

    public function setMaxCycles(?int $max_cycles): Plan
    {
        $this->max_cycles = $max_cycles;
        return $this;
    }

    public function getInvoiceMaxInstallments(): ?int
    {
        return $this->invoice_max_installments;
    }

    public function setInvoiceMaxInstallments(?int $invoice_max_installments): Plan
    {
        $this->invoice_max_installments = $invoice_max_installments;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}