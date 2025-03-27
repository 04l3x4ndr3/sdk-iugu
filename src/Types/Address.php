<?php

namespace O4l3x4ndr3\SdkIugu\Types;

class Address
{
    private ?string $zip_code;
    private ?string $street;
    private ?string $number;
    private ?string $district;
    private ?string $city;
    private ?string $state;
    private ?string $country;
    private ?string $complement;

    /**
     * @param string|null $zip_code
     * @param string|null $street
     * @param string|null $number
     * @param string|null $district
     * @param string|null $city
     * @param string|null $state
     * @param string|null $country
     * @param string|null $complement
     */
    public function __construct(?string $zip_code = null, ?string $street = null, ?string $number = null, ?string $district = null, ?string $city = null, ?string $state = null, ?string $country = null, ?string $complement = null)
    {
        $this->zip_code = $zip_code;
        $this->street = $street;
        $this->number = $number;
        $this->district = $district;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->complement = $complement;
    }

    public function getZipCode(): ?string
    {
        return $this->zip_code;
    }

    public function setZipCode(?string $zip_code): Address
    {
        $this->zip_code = $zip_code;
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): Address
    {
        $this->number = $number;
        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): Address
    {
        $this->district = $district;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): Address
    {
        $this->state = $state;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setComplement(?string $complement): Address
    {
        $this->complement = $complement;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}