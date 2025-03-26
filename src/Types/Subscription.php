<?php

namespace O4l3x4ndr3\SdkIugu\Types;

class Subscription
{
    private ?string $plan_identifier;
    private ?string $customer_id;
    private ?string $expires_at;
    private ?array $splits;
    private ?bool $only_on_charge_success;
    private ?bool $ignore_due_email;
    private ?array $payable_with;
    private ?bool $credits_based;
    private ?int $price_cents;
    private ?int $credits_cycle;
    private ?int $credits_min;
    private ?array $subitems;
    private ?array $custom_variables;
    private ?bool $two_step;
    private ?bool $suspend_on_invoice_expired;
    private ?bool $only_charge_on_due_date;
    private ?string $soft_descriptor_light;
    private ?string $return_ur;

    /**
     * @param string|null $customer_id
     */
    public function __construct(?string $customer_id)
    {
        $this->customer_id = $customer_id;
        $this->plan_identifier = null;
        $this->expires_at = null;
        $this->splits = null;
        $this->only_on_charge_success = null;
        $this->ignore_due_email = null;
        $this->payable_with = null;
        $this->credits_based = null;
        $this->price_cents = null;
        $this->credits_cycle = null;
        $this->credits_min = null;
        $this->subitems = null;
        $this->custom_variables = null;
        $this->two_step = null;
        $this->suspend_on_invoice_expired = null;
        $this->only_charge_on_due_date = null;
        $this->soft_descriptor_light = null;
        $this->return_ur = null;
    }

    public function getPlanIdentifier(): ?string
    {
        return $this->plan_identifier;
    }

    public function setPlanIdentifier(?string $plan_identifier): Subscription
    {
        $this->plan_identifier = $plan_identifier;
        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customer_id;
    }

    public function setCustomerId(?string $customer_id): Subscription
    {
        $this->customer_id = $customer_id;
        return $this;
    }

    public function getSplits(): ?array
    {
        return $this->splits;
    }

    public function addSplits(SplitRule $splits): Subscription
    {
        $this->splits[] = $splits->toArray();
        return $this;
    }

    public function getExpiresAt(): ?string
    {
        return $this->expires_at;
    }

    public function setExpiresAt(?string $expires_at): Subscription
    {
        $this->expires_at = $expires_at;
        return $this;
    }

    public function getOnlyOnChargeSuccess(): ?bool
    {
        return $this->only_on_charge_success;
    }

    public function setOnlyOnChargeSuccess(?bool $only_on_charge_success): Subscription
    {
        $this->only_on_charge_success = $only_on_charge_success;
        return $this;
    }

    public function getIgnoreDueEmail(): ?bool
    {
        return $this->ignore_due_email;
    }

    public function setIgnoreDueEmail(?bool $ignore_due_email): Subscription
    {
        $this->ignore_due_email = $ignore_due_email;
        return $this;
    }

    public function getPayableWith(): ?array
    {
        return $this->payable_with;
    }

    public function setPayableWith(?array $payable_with): Subscription
    {
        $this->payable_with = $payable_with;
        return $this;
    }

    public function getCreditsBased(): ?bool
    {
        return $this->credits_based;
    }

    public function setCreditsBased(?bool $credits_based): Subscription
    {
        $this->credits_based = $credits_based;
        return $this;
    }

    public function getPriceCents(): ?int
    {
        return $this->price_cents;
    }

    public function setPriceCents(?int $price_cents): Subscription
    {
        $this->price_cents = $price_cents;
        return $this;
    }

    public function getCreditsCycle(): ?int
    {
        return $this->credits_cycle;
    }

    public function setCreditsCycle(?int $credits_cycle): Subscription
    {
        $this->credits_cycle = $credits_cycle;
        return $this;
    }

    public function getCreditsMin(): ?int
    {
        return $this->credits_min;
    }

    public function setCreditsMin(?int $credits_min): Subscription
    {
        $this->credits_min = $credits_min;
        return $this;
    }

    public function getSubitems(): ?array
    {
        return $this->subitems;
    }

    public function addSubitems(SubscriptionSubitem $subitems): Subscription
    {
        $this->subitems[] = $subitems->toArray();
        return $this;
    }

    public function getCustomVariables(): ?array
    {
        return $this->custom_variables;
    }

    public function setCustomVariables(?array $custom_variables): Subscription
    {
        $this->custom_variables = $custom_variables;
        return $this;
    }

    public function getTwoStep(): ?bool
    {
        return $this->two_step;
    }

    public function setTwoStep(?bool $two_step): Subscription
    {
        $this->two_step = $two_step;
        return $this;
    }

    public function getSuspendOnInvoiceExpired(): ?bool
    {
        return $this->suspend_on_invoice_expired;
    }

    public function setSuspendOnInvoiceExpired(?bool $suspend_on_invoice_expired): Subscription
    {
        $this->suspend_on_invoice_expired = $suspend_on_invoice_expired;
        return $this;
    }

    public function getOnlyChargeOnDueDate(): ?bool
    {
        return $this->only_charge_on_due_date;
    }

    public function setOnlyChargeOnDueDate(?bool $only_charge_on_due_date): Subscription
    {
        $this->only_charge_on_due_date = $only_charge_on_due_date;
        return $this;
    }

    public function getSoftDescriptorLight(): ?string
    {
        return $this->soft_descriptor_light;
    }

    public function setSoftDescriptorLight(?string $soft_descriptor_light): Subscription
    {
        $this->soft_descriptor_light = $soft_descriptor_light;
        return $this;
    }

    public function getReturnUr(): ?string
    {
        return $this->return_ur;
    }

    public function setReturnUr(?string $return_ur): Subscription
    {
        $this->return_ur = $return_ur;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}