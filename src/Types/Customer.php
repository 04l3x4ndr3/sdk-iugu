<?php

namespace O4l3x4ndr3\SdkIugu\Types;

class Customer
{
    private ?string $email;
    private ?string $name;
    private ?string $notes;
    private ?int $phone;
    private ?int $phone_prefix;
    private ?string $cpf_cnpj;
    private ?string $cc_emails;
    private ?string $zip_code;
    private ?string $number;
    private ?string $street;
    private ?string $city;
    private ?string $state;
    private ?string $district;
    private ?string $complement;
    private ?array $custom_variables;

    /**
     * @param string|null $email
     * @param string|null $name
     */
    public function __construct(?string $email, ?string $name)
    {
        $this->email = $email;
        $this->name = $name;
        $this->notes = null;
        $this->phone = null;
        $this->phone_prefix = null;
        $this->cpf_cnpj = null;
        $this->cc_emails = null;
        $this->zip_code = null;
        $this->number = null;
        $this->street = null;
        $this->city = null;
        $this->state = null;
        $this->district = null;
        $this->complement = null;
        $this->custom_variables = null;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): Customer
    {
        $this->email = $email;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Customer
    {
        $this->name = $name;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): Customer
    {
        $this->notes = $notes;
        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(?int $phone): Customer
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPhonePrefix(): ?int
    {
        return $this->phone_prefix;
    }

    public function setPhonePrefix(?int $phone_prefix): Customer
    {
        $this->phone_prefix = $phone_prefix;
        return $this;
    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpf_cnpj;
    }

    public function setCpfCnpj(?string $cpf_cnpj): Customer
    {
        $this->cpf_cnpj = $cpf_cnpj;
        return $this;
    }

    public function getCcEmails(): ?string
    {
        return $this->cc_emails;
    }

    public function setCcEmails(?string $cc_emails): Customer
    {
        $this->cc_emails = $cc_emails;
        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zip_code;
    }

    public function setZipCode(?string $zip_code): Customer
    {
        $this->zip_code = $zip_code;
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): Customer
    {
        $this->number = $number;
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): Customer
    {
        $this->street = $street;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): Customer
    {
        $this->city = $city;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): Customer
    {
        $this->state = $state;
        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): Customer
    {
        $this->district = $district;
        return $this;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setComplement(?string $complement): Customer
    {
        $this->complement = $complement;
        return $this;
    }

    public function getCustomVariables(): ?array
    {
        return $this->custom_variables;
    }

    public function addCustomVariables(array $custom_variables): Customer
    {
        $this->custom_variables[] = $custom_variables;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}