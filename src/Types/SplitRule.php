<?php

namespace O4l3x4ndr3\SdkIugu\Types;

class SplitRule
{
    private ?string $recipient_account_id; //
    private ?int $cents;
    private ?float $percent;
    private ?bool $permit_aggregated; //
    private ?int $bank_slip_cents;
    private ?float $bank_slip_percent;
    private ?int $credit_card_cents;
    private ?float $credit_card_percent;
    private ?int $pix_cents;
    private ?float $pix_percent;
    private ?int $credit_card_1x_cents;
    private ?int $credit_card_2x_cents;
    private ?int $credit_card_3x_cents;
    private ?int $credit_card_4x_cents;
    private ?int $credit_card_5x_cents;
    private ?int $credit_card_6x_cents;
    private ?int $credit_card_7x_cents;
    private ?int $credit_card_8x_cents;
    private ?int $credit_card_9x_cents;
    private ?int $credit_card_10x_cents;
    private ?int $credit_card_11x_cents;
    private ?int $credit_card_12x_cents;
    private ?float $credit_card_1x_percent;
    private ?float $credit_card_2x_percent;
    private ?float $credit_card_3x_percent;
    private ?float $credit_card_4x_percent;
    private ?float $credit_card_5x_percent;
    private ?float $credit_card_6x_percent;
    private ?float $credit_card_7x_percent;
    private ?float $credit_card_8x_percent;
    private ?float $credit_card_9x_percent;
    private ?float $credit_card_10x_percent;
    private ?float $credit_card_11x_percent;
    private ?float $credit_card_12x_percent;

    /**
     * @param string|null $recipient_account_id
     * @param int|null $cents
     * @param float|null $percent
     * @param bool|null $permit_aggregated
     */
    public function __construct(?string $recipient_account_id, ?int $cents, ?float $percent, ?bool $permit_aggregated)
    {
        $this->recipient_account_id = $recipient_account_id;
        $this->cents = $cents;
        $this->percent = $percent;
        $this->permit_aggregated = $permit_aggregated;
        $this->bank_slip_cents = null;
        $this->bank_slip_percent = null;
        $this->credit_card_cents = null;
        $this->credit_card_percent = null;
        $this->pix_cents = null;
        $this->pix_percent = null;
        $this->credit_card_1x_cents = null;
        $this->credit_card_2x_cents = null;
        $this->credit_card_3x_cents = null;
        $this->credit_card_4x_cents = null;
        $this->credit_card_5x_cents = null;
        $this->credit_card_6x_cents = null;
        $this->credit_card_7x_cents = null;
        $this->credit_card_8x_cents = null;
        $this->credit_card_9x_cents = null;
        $this->credit_card_10x_cents = null;
        $this->credit_card_11x_cents = null;
        $this->credit_card_12x_cents = null;
        $this->credit_card_1x_percent = null;
        $this->credit_card_2x_percent = null;
        $this->credit_card_3x_percent = null;
        $this->credit_card_4x_percent = null;
        $this->credit_card_5x_percent = null;
        $this->credit_card_6x_percent = null;
        $this->credit_card_7x_percent = null;
        $this->credit_card_8x_percent = null;
        $this->credit_card_9x_percent = null;
        $this->credit_card_10x_percent = null;
        $this->credit_card_11x_percent = null;
        $this->credit_card_12x_percent = null;
    }

    public function getRecipientAccountId(): ?string
    {
        return $this->recipient_account_id;
    }

    public function setRecipientAccountId(?string $recipient_account_id): SplitRule
    {
        $this->recipient_account_id = $recipient_account_id;
        return $this;
    }

    public function getCents(): ?int
    {
        return $this->cents;
    }

    public function setCents(?int $cents): SplitRule
    {
        $this->cents = $cents;
        return $this;
    }

    public function getPercent(): ?float
    {
        return $this->percent;
    }

    public function setPercent(?float $percent): SplitRule
    {
        $this->percent = $percent;
        return $this;
    }

    public function getPermitAggregated(): ?bool
    {
        return $this->permit_aggregated;
    }

    public function setPermitAggregated(?bool $permit_aggregated): SplitRule
    {
        $this->permit_aggregated = $permit_aggregated;
        return $this;
    }

    public function getBankSlipCents(): ?int
    {
        return $this->bank_slip_cents;
    }

    public function setBankSlipCents(?int $bank_slip_cents): SplitRule
    {
        $this->bank_slip_cents = $bank_slip_cents;
        return $this;
    }

    public function getBankSlipPercent(): ?float
    {
        return $this->bank_slip_percent;
    }

    public function setBankSlipPercent(?float $bank_slip_percent): SplitRule
    {
        $this->bank_slip_percent = $bank_slip_percent;
        return $this;
    }

    public function getCreditCardCents(): ?int
    {
        return $this->credit_card_cents;
    }

    public function setCreditCardCents(?int $credit_card_cents): SplitRule
    {
        $this->credit_card_cents = $credit_card_cents;
        return $this;
    }

    public function getCreditCardPercent(): ?float
    {
        return $this->credit_card_percent;
    }

    public function setCreditCardPercent(?float $credit_card_percent): SplitRule
    {
        $this->credit_card_percent = $credit_card_percent;
        return $this;
    }

    public function getPixCents(): ?int
    {
        return $this->pix_cents;
    }

    public function setPixCents(?int $pix_cents): SplitRule
    {
        $this->pix_cents = $pix_cents;
        return $this;
    }

    public function getPixPercent(): ?float
    {
        return $this->pix_percent;
    }

    public function setPixPercent(?float $pix_percent): SplitRule
    {
        $this->pix_percent = $pix_percent;
        return $this;
    }

    public function getCreditCard1xCents(): ?int
    {
        return $this->credit_card_1x_cents;
    }

    public function setCreditCard1xCents(?int $credit_card_1x_cents): SplitRule
    {
        $this->credit_card_1x_cents = $credit_card_1x_cents;
        return $this;
    }

    public function getCreditCard2xCents(): ?int
    {
        return $this->credit_card_2x_cents;
    }

    public function setCreditCard2xCents(?int $credit_card_2x_cents): SplitRule
    {
        $this->credit_card_2x_cents = $credit_card_2x_cents;
        return $this;
    }

    public function getCreditCard3xCents(): ?int
    {
        return $this->credit_card_3x_cents;
    }

    public function setCreditCard3xCents(?int $credit_card_3x_cents): SplitRule
    {
        $this->credit_card_3x_cents = $credit_card_3x_cents;
        return $this;
    }

    public function getCreditCard4xCents(): ?int
    {
        return $this->credit_card_4x_cents;
    }

    public function setCreditCard4xCents(?int $credit_card_4x_cents): SplitRule
    {
        $this->credit_card_4x_cents = $credit_card_4x_cents;
        return $this;
    }

    public function getCreditCard5xCents(): ?int
    {
        return $this->credit_card_5x_cents;
    }

    public function setCreditCard5xCents(?int $credit_card_5x_cents): SplitRule
    {
        $this->credit_card_5x_cents = $credit_card_5x_cents;
        return $this;
    }

    public function getCreditCard6xCents(): ?int
    {
        return $this->credit_card_6x_cents;
    }

    public function setCreditCard6xCents(?int $credit_card_6x_cents): SplitRule
    {
        $this->credit_card_6x_cents = $credit_card_6x_cents;
        return $this;
    }

    public function getCreditCard7xCents(): ?int
    {
        return $this->credit_card_7x_cents;
    }

    public function setCreditCard7xCents(?int $credit_card_7x_cents): SplitRule
    {
        $this->credit_card_7x_cents = $credit_card_7x_cents;
        return $this;
    }

    public function getCreditCard8xCents(): ?int
    {
        return $this->credit_card_8x_cents;
    }

    public function setCreditCard8xCents(?int $credit_card_8x_cents): SplitRule
    {
        $this->credit_card_8x_cents = $credit_card_8x_cents;
        return $this;
    }

    public function getCreditCard9xCents(): ?int
    {
        return $this->credit_card_9x_cents;
    }

    public function setCreditCard9xCents(?int $credit_card_9x_cents): SplitRule
    {
        $this->credit_card_9x_cents = $credit_card_9x_cents;
        return $this;
    }

    public function getCreditCard10xCents(): ?int
    {
        return $this->credit_card_10x_cents;
    }

    public function setCreditCard10xCents(?int $credit_card_10x_cents): SplitRule
    {
        $this->credit_card_10x_cents = $credit_card_10x_cents;
        return $this;
    }

    public function getCreditCard11xCents(): ?int
    {
        return $this->credit_card_11x_cents;
    }

    public function setCreditCard11xCents(?int $credit_card_11x_cents): SplitRule
    {
        $this->credit_card_11x_cents = $credit_card_11x_cents;
        return $this;
    }

    public function getCreditCard12xCents(): ?int
    {
        return $this->credit_card_12x_cents;
    }

    public function setCreditCard12xCents(?int $credit_card_12x_cents): SplitRule
    {
        $this->credit_card_12x_cents = $credit_card_12x_cents;
        return $this;
    }

    public function getCreditCard1xPercent(): ?float
    {
        return $this->credit_card_1x_percent;
    }

    public function setCreditCard1xPercent(?float $credit_card_1x_percent): SplitRule
    {
        $this->credit_card_1x_percent = $credit_card_1x_percent;
        return $this;
    }

    public function getCreditCard2xPercent(): ?float
    {
        return $this->credit_card_2x_percent;
    }

    public function setCreditCard2xPercent(?float $credit_card_2x_percent): SplitRule
    {
        $this->credit_card_2x_percent = $credit_card_2x_percent;
        return $this;
    }

    public function getCreditCard3xPercent(): ?float
    {
        return $this->credit_card_3x_percent;
    }

    public function setCreditCard3xPercent(?float $credit_card_3x_percent): SplitRule
    {
        $this->credit_card_3x_percent = $credit_card_3x_percent;
        return $this;
    }

    public function getCreditCard4xPercent(): ?float
    {
        return $this->credit_card_4x_percent;
    }

    public function setCreditCard4xPercent(?float $credit_card_4x_percent): SplitRule
    {
        $this->credit_card_4x_percent = $credit_card_4x_percent;
        return $this;
    }

    public function getCreditCard5xPercent(): ?float
    {
        return $this->credit_card_5x_percent;
    }

    public function setCreditCard5xPercent(?float $credit_card_5x_percent): SplitRule
    {
        $this->credit_card_5x_percent = $credit_card_5x_percent;
        return $this;
    }

    public function getCreditCard6xPercent(): ?float
    {
        return $this->credit_card_6x_percent;
    }

    public function setCreditCard6xPercent(?float $credit_card_6x_percent): SplitRule
    {
        $this->credit_card_6x_percent = $credit_card_6x_percent;
        return $this;
    }

    public function getCreditCard7xPercent(): ?float
    {
        return $this->credit_card_7x_percent;
    }

    public function setCreditCard7xPercent(?float $credit_card_7x_percent): SplitRule
    {
        $this->credit_card_7x_percent = $credit_card_7x_percent;
        return $this;
    }

    public function getCreditCard8xPercent(): ?float
    {
        return $this->credit_card_8x_percent;
    }

    public function setCreditCard8xPercent(?float $credit_card_8x_percent): SplitRule
    {
        $this->credit_card_8x_percent = $credit_card_8x_percent;
        return $this;
    }

    public function getCreditCard9xPercent(): ?float
    {
        return $this->credit_card_9x_percent;
    }

    public function setCreditCard9xPercent(?float $credit_card_9x_percent): SplitRule
    {
        $this->credit_card_9x_percent = $credit_card_9x_percent;
        return $this;
    }

    public function getCreditCard10xPercent(): ?float
    {
        return $this->credit_card_10x_percent;
    }

    public function setCreditCard10xPercent(?float $credit_card_10x_percent): SplitRule
    {
        $this->credit_card_10x_percent = $credit_card_10x_percent;
        return $this;
    }

    public function getCreditCard11xPercent(): ?float
    {
        return $this->credit_card_11x_percent;
    }

    public function setCreditCard11xPercent(?float $credit_card_11x_percent): SplitRule
    {
        $this->credit_card_11x_percent = $credit_card_11x_percent;
        return $this;
    }

    public function getCreditCard12xPercent(): ?float
    {
        return $this->credit_card_12x_percent;
    }

    public function setCreditCard12xPercent(?float $credit_card_12x_percent): SplitRule
    {
        $this->credit_card_12x_percent = $credit_card_12x_percent;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}