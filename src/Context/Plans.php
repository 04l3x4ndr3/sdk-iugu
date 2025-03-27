<?php

namespace O4l3x4ndr3\SdkIugu\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkIugu\Configuration;
use O4l3x4ndr3\SdkIugu\Utils\HTTPClient;
use O4l3x4ndr3\SdkIugu\Types\Plan;

class Plans extends HTTPClient
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @url https://dev.iugu.com/reference/criar-plano
     * @param Plan $plan
     * @return object
     * @throws GuzzleException
     */
    public function create(Plan $plan): object
    {
        $endpoint = "/plans";
        $data = array_filter($plan->toArray());
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * @url https://dev.iugu.com/reference/alterar-plano
     * @param string $id
     * @param Plan $plan
     * @return object
     * @throws GuzzleException
     */
    public function edit(string $id, Plan $plan): object
    {
        $endpoint = "/plans/$id";
        $data = array_filter($plan->toArray());
        return $this->call('PUT', $endpoint, $data);
    }

    /**
     * @url https://dev.iugu.com/reference/remover-plano
     * @param string $id
     * @return object
     * @throws GuzzleException
     */
    public function remove(string $id): object
    {
        $endpoint = "/plans/$id";
        return $this->call('DELETE', $endpoint);
    }

    /**
     * @url https://dev.iugu.com/reference/buscar-plano
     * @param string $id
     * @return object
     * @throws GuzzleException
     */
    public function getById(string $id): object
    {
        $endpoint = "/plans/$id";
        return $this->call('GET', $endpoint);
    }

    /**
     * @url https://dev.iugu.com/reference/buscar-plano-pelo-identificador
     * @param string $identifier
     * @return object
     * @throws GuzzleException
     */
    public function getByIdentifier(string $identifier): object
    {
        $endpoint = "/plans/identifier/$identifier";
        return $this->call('GET', $endpoint);
    }

    /**
     * @url https://dev.iugu.com/reference/listar-plano
     * @param int|null $limit
     * @param int|null $start
     * @param string|null $query
     * @param string|null $updated_since
     * @return object
     * @throws GuzzleException
     */
    public function list(?int $limit = null, ?int $start = null, ?string $query = null, ?string $updated_since = null): object
    {
        $qr = http_build_query(array_filter(["limit" => $limit, "start" => $start, "query" => $query, "dated_since" => $updated_since]));
        $endpoint = "/plans" . ($qr ? "?" . $qr : "");
        return $this->call('GET', $endpoint);
    }
}
