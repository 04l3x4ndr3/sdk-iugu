<?php

namespace O4l3x4ndr3\SdkIugu\Types;

class Invoice
{
    private ?string $email;
    private ?string $cc_emails;
    private ?string $due_date;
    private ?bool $ensure_workday_due_date;
    private ?string $expires_in;
    private ?string $bank_slip_extra_due;
    private ?array $items;
    private ?array $payable_with;
    private ?Payer $payer;
    private ?array $splits;
    private ?string $customer_id;
    private ?string $subscription_id;
    private ?string $return_url;
    private ?string $expired_url;
    private ?string $notification_url;
    private ?bool $ignore_canceled_email;
    private ?bool $fines;
    private ?int $late_payment_fine;
    private ?int $late_payment_fine_cents;
    private ?bool $per_day_interest;
    private ?int $per_day_interest_value;
    private ?int $per_day_interest_cents;
    private ?int $discount_cents;
    private ?bool $ignore_due_email;
    private ?int $credits;
    private ?array $custom_variables;
    private ?bool $early_payment_discount;
    private ?array $early_payment_discount_cents;
    private ?string $order_id;
    private ?string $external_reference;
    private ?int $max_installments_value;
    private ?string $soft_descriptor_light;
    private ?string $pix_qr_code_expires_at;
    private ?string $pix_remittance_info;
    private ?array $pix_additional_info;
    private ?string $password;

    /**
     * @param string|null $due_date
     * @param string|null $email
     * @param array|null $items
     */
    public function __construct(?string $due_date = null, ?string $email = null, ?array $items = null)
    {
        $this->due_date = $due_date;
        $this->email = $email;
        $this->items = $items;
        $this->cc_emails = null;
        $this->ensure_workday_due_date = null;
        $this->expires_in = null;
        $this->bank_slip_extra_due = null;
        $this->payable_with = null;
        $this->payer = null;
        $this->splits = null;
        $this->customer_id = null;
        $this->subscription_id = null;
        $this->return_url = null;
        $this->expired_url = null;
        $this->notification_url = null;
        $this->ignore_canceled_email = null;
        $this->fines = null;
        $this->late_payment_fine = null;
        $this->late_payment_fine_cents = null;
        $this->per_day_interest = null;
        $this->per_day_interest_value = null;
        $this->per_day_interest_cents = null;
        $this->discount_cents = null;
        $this->ignore_due_email = null;
        $this->credits = null;
        $this->custom_variables = null;
        $this->early_payment_discount = null;
        $this->early_payment_discount_cents = null;
        $this->order_id = null;
        $this->external_reference = null;
        $this->max_installments_value = null;
        $this->soft_descriptor_light = null;
        $this->pix_qr_code_expires_at = null;
        $this->pix_remittance_info = null;
        $this->pix_additional_info = null;
        $this->password = null;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): Invoice
    {
        $this->email = $email;
        return $this;
    }

    public function getCcEmails(): ?string
    {
        return $this->cc_emails;
    }

    public function setCcEmails(?string $cc_emails): Invoice
    {
        $this->cc_emails = $cc_emails;
        return $this;
    }

    public function getDueDate(): ?string
    {
        return $this->due_date;
    }

    public function setDueDate(?string $due_date): Invoice
    {
        $this->due_date = $due_date;
        return $this;
    }

    public function hasEnsureWorkdayDueDate(): ?bool
    {
        return $this->ensure_workday_due_date;
    }

    public function setEnsureWorkdayDueDate(?bool $ensure_workday_due_date): Invoice
    {
        $this->ensure_workday_due_date = $ensure_workday_due_date;
        return $this;
    }

    public function getExpiresIn(): ?string
    {
        return $this->expires_in;
    }

    public function setExpiresIn(?string $expires_in): Invoice
    {
        $this->expires_in = $expires_in;
        return $this;
    }

    public function getBankSlipExtraDue(): ?string
    {
        return $this->bank_slip_extra_due;
    }

    public function setBankSlipExtraDue(?string $bank_slip_extra_due): Invoice
    {
        $this->bank_slip_extra_due = $bank_slip_extra_due;
        return $this;
    }

    public function getItems(): ?InvoiceItem
    {
        return $this->items;
    }

    public function addItems(InvoiceItem $items): Invoice
    {
        $this->items[] = $items;
        return $this;
    }

    public function getPayableWith(): ?array
    {
        return $this->payable_with;
    }

    public function setPayableWith(?array $payable_with): Invoice
    {
        $this->payable_with = $payable_with;
        return $this;
    }

    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    public function setPayer(?Payer $payer): Invoice
    {
        $this->payer = $payer;
        return $this;
    }

    public function getSplits(): ?SplitRule
    {
        return $this->splits;
    }

    public function addSplits(SplitRule $splits): Invoice
    {
        $this->splits[] = $splits;
        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customer_id;
    }

    public function setCustomerId(?string $customer_id): Invoice
    {
        $this->customer_id = $customer_id;
        return $this;
    }

    public function getSubscriptionId(): ?string
    {
        return $this->subscription_id;
    }

    public function setSubscriptionId(?string $subscription_id): Invoice
    {
        $this->subscription_id = $subscription_id;
        return $this;
    }

    public function getReturnUrl(): ?string
    {
        return $this->return_url;
    }

    public function setReturnUrl(?string $return_url): Invoice
    {
        $this->return_url = $return_url;
        return $this;
    }

    public function getExpiredUrl(): ?string
    {
        return $this->expired_url;
    }

    public function setExpiredUrl(?string $expired_url): Invoice
    {
        $this->expired_url = $expired_url;
        return $this;
    }

    public function getNotificationUrl(): ?string
    {
        return $this->notification_url;
    }

    public function setNotificationUrl(?string $notification_url): Invoice
    {
        $this->notification_url = $notification_url;
        return $this;
    }

    public function isIgnoreCanceledEmail(): ?bool
    {
        return $this->ignore_canceled_email;
    }

    public function setIgnoreCanceledEmail(?bool $ignore_canceled_email): Invoice
    {
        $this->ignore_canceled_email = $ignore_canceled_email;
        return $this;
    }

    public function hasFines(): ?bool
    {
        return $this->fines;
    }

    public function setFines(?bool $fines): Invoice
    {
        $this->fines = $fines;
        return $this;
    }

    public function getLatePaymentFine(): ?int
    {
        return $this->late_payment_fine;
    }

    public function setLatePaymentFine(?int $late_payment_fine): Invoice
    {
        $this->late_payment_fine = $late_payment_fine;
        return $this;
    }

    public function getLatePaymentFineCents(): ?int
    {
        return $this->late_payment_fine_cents;
    }

    public function setLatePaymentFineCents(?int $late_payment_fine_cents): Invoice
    {
        $this->late_payment_fine_cents = $late_payment_fine_cents;
        return $this;
    }

    public function hasPerDayInterest(): ?bool
    {
        return $this->per_day_interest;
    }

    public function setPerDayInterest(?bool $per_day_interest): Invoice
    {
        $this->per_day_interest = $per_day_interest;
        return $this;
    }

    public function getPerDayInterestValue(): ?int
    {
        return $this->per_day_interest_value;
    }

    public function setPerDayInterestValue(?int $per_day_interest_value): Invoice
    {
        $this->per_day_interest_value = $per_day_interest_value;
        return $this;
    }

    public function getPerDayInterestCents(): ?int
    {
        return $this->per_day_interest_cents;
    }

    public function setPerDayInterestCents(?int $per_day_interest_cents): Invoice
    {
        $this->per_day_interest_cents = $per_day_interest_cents;
        return $this;
    }

    public function getDiscountCents(): ?int
    {
        return $this->discount_cents;
    }

    public function setDiscountCents(?int $discount_cents): Invoice
    {
        $this->discount_cents = $discount_cents;
        return $this;
    }

    public function isIgnoreDueEmail(): ?bool
    {
        return $this->ignore_due_email;
    }

    public function setIgnoreDueEmail(?bool $ignore_due_email): Invoice
    {
        $this->ignore_due_email = $ignore_due_email;
        return $this;
    }

    public function getCredits(): ?int
    {
        return $this->credits;
    }

    public function setCredits(?int $credits): Invoice
    {
        $this->credits = $credits;
        return $this;
    }

    public function getCustomVariables(): ?array
    {
        return $this->custom_variables;
    }

    public function setCustomVariables(?array $custom_variables): Invoice
    {
        $this->custom_variables = $custom_variables;
        return $this;
    }

    public function hasEarlyPaymentDiscount(): ?bool
    {
        return $this->early_payment_discount;
    }

    public function setEarlyPaymentDiscount(?bool $early_payment_discount): Invoice
    {
        $this->early_payment_discount = $early_payment_discount;
        return $this;
    }

    public function getEarlyPaymentDiscountCents(): ?array
    {
        return $this->early_payment_discount_cents;
    }

    public function setEarlyPaymentDiscountCents(?array $early_payment_discount_cents): Invoice
    {
        $this->early_payment_discount_cents = $early_payment_discount_cents;
        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->order_id;
    }

    public function setOrderId(?string $order_id): Invoice
    {
        $this->order_id = $order_id;
        return $this;
    }

    public function getExternalReference(): ?string
    {
        return $this->external_reference;
    }

    public function setExternalReference(?string $external_reference): Invoice
    {
        $this->external_reference = $external_reference;
        return $this;
    }

    public function getMaxInstallmentsValue(): ?int
    {
        return $this->max_installments_value;
    }

    public function setMaxInstallmentsValue(?int $max_installments_value): Invoice
    {
        $this->max_installments_value = $max_installments_value;
        return $this;
    }

    public function getSoftDescriptorLight(): ?string
    {
        return $this->soft_descriptor_light;
    }

    public function setSoftDescriptorLight(?string $soft_descriptor_light): Invoice
    {
        $this->soft_descriptor_light = $soft_descriptor_light;
        return $this;
    }

    public function getPixQrCodeExpiresAt(): ?string
    {
        return $this->pix_qr_code_expires_at;
    }

    public function setPixQrCodeExpiresAt(?string $pix_qr_code_expires_at): Invoice
    {
        $this->pix_qr_code_expires_at = $pix_qr_code_expires_at;
        return $this;
    }

    public function getPixRemittanceInfo(): ?string
    {
        return $this->pix_remittance_info;
    }

    public function setPixRemittanceInfo(?string $pix_remittance_info): Invoice
    {
        $this->pix_remittance_info = $pix_remittance_info;
        return $this;
    }

    public function getPixAdditionalInfo(): ?array
    {
        return $this->pix_additional_info;
    }

    public function setPixAdditionalInfo(?array $pix_additional_info): Invoice
    {
        $this->pix_additional_info = $pix_additional_info;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): Invoice
    {
        $this->password = $password;
        return $this;
    }

    public function toArray(): array
    {
        $arr = get_object_vars($this);

        if (isset($arr['payer'])) {
            $arr['payer'] = $arr['payer']->toArray();
        }

        if (isset($arr['splits'])) {
            foreach ($arr['splits'] as $key => $item) {
                $arr['splits'][$key] = $item->toArray();
            }
        }

        if (isset($arr['items'])) {
            foreach ($arr['items'] as $key => $item) {
                $arr['items'][$key] = $item->toArray();
            }
        }

        return $arr;
    }
}