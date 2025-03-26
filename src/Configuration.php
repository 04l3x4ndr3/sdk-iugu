<?php
/**
 * Copyright (c) 2025.
 * @authorAlexandre G R Alves
 * Author GitHub: https://github.com/04l3x4ndr3
 * Project GitHub:  https://github.com/04l3x4ndr3/sdk-iugu
 */

namespace O4l3x4ndr3\SdkIugu;

class Configuration
{
    private array $URL_CONTEXT = [
        "v1" => 'https://api.iugu.com/v1',
    ];

    private ?string $environment;
    private ?string $apiToken;
    private ?array $httpHeader;

    public function __construct(?string $api_token = null)
    {
        $this->apiToken = $api_token ?? $_SERVER['IUGU_API_TOKEN'];
        $this->httpHeader = [];
    }

    /**
     * @return string
     */
    public function getApiToken(): string
    {
        return $this->apiToken;
    }

    /**
     * @param string $apiToken
     * @return void
     */
    public function setApiToken(string $apiToken): Configuration
    {
        $this->apiToken = $apiToken;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getHttpHeader(): ?array
    {
        return $this->httpHeader;
    }

    /**
     * @param array $httpHeader
     */
    public function setHttpHeader(array $httpHeader): Configuration
    {
        $this->httpHeader = $httpHeader;
        return $this;
    }

    /**
     * @param string $context
     *
     * @return string
     */
    public function getUrl(?string $context = 'default'): string
    {
        return $this->URL_CONTEXT[$context ?? 'default'];
    }
}
