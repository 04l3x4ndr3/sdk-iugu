<?php

namespace O4l3x4ndr3\SdkIugu\Types;

class PlanFeature
{
    private ?string $name;
    private ?string $identifier;
    private ?int $value;

    /**
     * @param string|null $name
     * @param string|null $identifier
     * @param int|null $value
     */
    public function __construct(?string $name, ?string $identifier, ?int $value)
    {
        $this->name = $name;
        $this->identifier = $identifier;
        $this->value = $value;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): PlanFeature
    {
        $this->name = $name;
        return $this;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): PlanFeature
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(?int $value): PlanFeature
    {
        $this->value = $value;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}