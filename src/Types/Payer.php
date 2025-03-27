<?php

namespace O4l3x4ndr3\SdkIugu\Types;

class Payer
{
    private ?string $cpf_cnpj;
    private ?string $name;
    private ?string $email;
    private ?string $phone_prefix;
    private ?string $phone;
    private ?Address $address;

    /**
     * @param string|null $cpf_cnpj
     * @param string|null $name
     * @param string|null $email
     * @param string|null $phone_prefix
     * @param string|null $phone
     * @param Address|null $address
     */
    public function __construct(?string $cpf_cnpj = null, ?string $name = null, ?string $email = null, ?string $phone_prefix = null, ?string $phone = null, Address $address = null)
    {
        $this->cpf_cnpj = $cpf_cnpj;
        $this->name = $name;
        $this->email = $email;
        $this->phone_prefix = $phone_prefix;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpf_cnpj;
    }

    public function setCpfCnpj(?string $cpf_cnpj): Payer
    {
        $this->cpf_cnpj = $cpf_cnpj;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Payer
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): Payer
    {
        $this->email = $email;
        return $this;
    }

    public function getPhonePrefix(): ?string
    {
        return $this->phone_prefix;
    }

    public function setPhonePrefix(?string $phone_prefix): Payer
    {
        $this->phone_prefix = $phone_prefix;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): Payer
    {
        $this->phone = $phone;
        return $this;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): Payer
    {
        $this->address = $address;
        return $this;
    }

    public function toArray(): array
    {
        $arr = get_object_vars($this);
        if (isset($this->address)) {
            $arr['address'] = $this->address->toArray();
        }
        return $arr;
    }

}