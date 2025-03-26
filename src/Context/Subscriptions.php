<?php

namespace O4l3x4ndr3\SdkIugu\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkIugu\Helpers\HTTPClient;
use O4l3x4ndr3\SdkIugu\Configuration;
use O4l3x4ndr3\SdkIugu\Types\Subscription;

class Subscriptions extends HTTPClient
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @url https://dev.iugu.com/reference/criar-assinatura
     * @param Subscription $subscription Objeto contendo os dados da assinatura a ser criada.
     * @return object Objeto de resposta da API contendo os detalhes da assinatura criada.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function create(Subscription $subscription): object
    {
        $endpoint = "/subscriptions";
        $data = $subscription->toArray();
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * @url https://dev.iugu.com/reference/alterar-assinatura
     * @param string $id O identificador único da assinatura a ser editada.
     * @param Subscription $subscription Objeto contendo os dados atualizados da assinatura.
     * @return object Objeto de resposta contendo os detalhes atualizados da assinatura.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function edit(string $id, Subscription $subscription): object
    {
        $endpoint = "/subscriptions/$id";
        $data = $subscription->toArray();
        return $this->call('PUT', $endpoint, $data);
    }

    /**
     * @url https://dev.iugu.com/reference/remover-assinatura
     * @param string $id O identificador único da assinatura a ser removida.
     * @return object Objeto de resposta da API contendo informações sobre a remoção.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function remove(string $id): object
    {
        $endpoint = "/subscriptions/$id";
        return $this->call('DELETE', $endpoint);
    }

    /**
     * @url https://dev.iugu.com/reference/buscar-assinatura
     * @param string $id O identificador único da assinatura a ser buscada.
     * @return object Objeto de resposta da API contendo os dados da assinatura.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function getById(string $id): object
    {
        $endpoint = "/subscriptions/$id";
        return $this->call('GET', $endpoint);
    }

    /**
     * @url https://dev.iugu.com/reference/listar-assinaturas
     * @param int|null $limit O número máximo de assinaturas a serem retornadas.
     * @param int|null $start O índice inicial da pesquisa.
     * @param string|null $created_at_from Data de início da criação das assinaturas (formato ISO8601).
     * @param string|null $created_at_to Data final da criação das assinaturas (formato ISO8601).
     * @param string|null $query Texto para busca por assinaturas.
     * @param string|null $updated_since Apenas retornará assinaturas atualizadas após esta data (formato ISO8601).
     * @param int|null $customer_id Identificador do cliente associado às assinaturas.
     * @param string|null $status_filter Filtro de status das assinaturas (ex: "active").
     * @param string|null $plan_identifier Identificador do plano das assinaturas.
     * @return object Objeto contendo a lista de assinaturas.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function list(?int    $limit = null,
                         ?int    $start = null,
                         ?string $created_at_from = null,
                         ?string $created_at_to = null,
                         ?string $query = null,
                         ?string $updated_since = null,
                         ?int    $customer_id = null,
                         ?string $status_filter = null,
                         ?string $plan_identifier = null,
    ): object
    {
        $qr = http_build_query(array_filter([
            "limit" => $limit,
            "start" => $start,
            "created_at_from" => $created_at_from,
            "created_at_to" => $created_at_to,
            "query" => $query,
            "dated_since" => $updated_since,
            "customer_id" => $customer_id,
            "status_filter" => $status_filter,
            "plan_identifier" => $plan_identifier,
        ]));
        $endpoint = "/subscriptions" . ($qr ? "?" . $qr : "");
        return $this->call('GET', $endpoint);
    }

    /**
     * @url https://dev.iugu.com/reference/ativar-assinatura
     * @param string $id O identificador único da assinatura a ser ativada.
     * @return object Objeto de resposta da API contendo informações sobre a ativação.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function activate(string $id): object
    {
        $endpoint = "/subscriptions/$id/activate";
        return $this->call('POST', $endpoint);
    }

    /**
     * @url https://dev.iugu.com/reference/suspender-assinatura
     * @param string $id O identificador único da assinatura a ser suspensa.
     * @return object Objeto de resposta da API contendo informações sobre a suspensão.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function suspend(string $id): object
    {
        $endpoint = "/subscriptions/$id/suspend";
        return $this->call('POST', $endpoint);
    }

    /**
     * @url https://dev.iugu.com/reference/alterar-o-plano
     * @param string $id O identificador único da assinatura a ser alterada.
     * @param string $plan_identifier O identificador único do plano desejado.
     * @param array|null $payable_with Métodos de pagamento aplicáveis ao novo plano.
     * @return object Objeto contendo os detalhes da mudança de plano.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function change_plan(string $id, string $plan_identifier, ?array $payable_with = null): object
    {
        $endpoint = "/subscriptions/$id/change_plan/$plan_identifier";
        $data = [
            'payable_with' => $payable_with,
        ];
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * @url https://dev.iugu.com/reference/simulacao-de-troca-de-plano
     * @param string $id O identificador único da assinatura para simulação.
     * @param string $plan_identifier O identificador único do plano para simulação.
     * @return object Objeto contendo os impactos financeiros da alteração de plano.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function change_plan_simulation(string $id, string $plan_identifier): object
    {
        $endpoint = "/subscriptions/$id/change_plan_simulation/$plan_identifier";
        return $this->call('GET', $endpoint);
    }

    /**
     * @url https://dev.iugu.com/reference/adicionar-creditos
     * @param string $id O identificador único da assinatura.
     * @param int $quantity A quantidade de créditos a ser adicionada.
     * @return object Objeto contendo informações da adição de créditos.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function add_credits(string $id, int $quantity): object
    {
        $endpoint = "/subscriptions/$id/add_credits";
        $data = [
            'quantity' => $quantity
        ];
        return $this->call('PUT', $endpoint, $data);
    }

    /**
     * @url https://dev.iugu.com/reference/remover-creditos
     * @param string $id O identificador único da assinatura.
     * @param int $quantity A quantidade de créditos a ser removida.
     * @return object Objeto de resposta contendo os detalhes após a remoção dos créditos.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function remove_credits(string $id, int $quantity): object
    {
        $endpoint = "/subscriptions/$id/remove_credits";
        $data = [
            'quantity' => $quantity
        ];
        return $this->call('PUT', $endpoint, $data);
    }
}