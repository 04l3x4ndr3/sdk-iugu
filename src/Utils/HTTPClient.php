<?php

namespace O4l3x4ndr3\SdkIugu\Utils;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkIugu\Configuration;

class HTTPClient
{
    protected Configuration $config;
    private ?array $header;
    private ?string $token;
    private string $requestBody = '';
    private string $http_errors;

    /**
     * @param Configuration|null $config
     */
    public function __construct(?Configuration $config = null)
    {
        $this->http_errors = false;
        $this->config = $config ?? new Configuration();
        $this->token = $this->config->getApiToken();
        $this->header = array_merge($this->config->getHttpHeader(), [
            "User-Agent" => "SDK-IUGU/1.0",
            "Accept" => "Application/json",
        ]);
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array|null $data
     * @param array $extraHeaders
     * @param string|null $context
     * @return object
     * @throws GuzzleException
     */
    public function call(string $method, string $endpoint, ?array $data = null, ?string $context = 'v1'): object
    {
        $client = new Client();
        $url = $this->config->getUrl($context) . $endpoint;
        $options = array_filter([
            'headers' => $this->header,
            'http_errors' => $this->http_errors,
            'query' => [
                'api_token' => $this->token,
            ],
            'json' => $data
        ]);

        $this->requestBody = json_encode($data);

        $res = $client->request($method, $url, $options);

        return json_decode($res->getBody());
    }

    public function setHttpErrors(string $http_errors): HTTPClient
    {
        $this->http_errors = $http_errors;
        return $this;
    }

    public function getRequestBody(): string
    {
        return $this->requestBody;
    }
}
