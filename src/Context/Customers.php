<?php

namespace O4l3x4ndr3\SdkIugu\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkIugu\Configuration;
use O4l3x4ndr3\SdkIugu\Utils\HTTPClient;
use O4l3x4ndr3\SdkIugu\Types\Customer;

class Customers extends HTTPClient
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * Cria um novo cliente na API.
     *
     * @url https://dev.iugu.com/reference/criar-cliente
     *
     * @param Customer $customer Objeto contendo os dados do cliente a ser criado.
     * @return object Objeto de resposta da API contendo os detalhes do cliente criado.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function create(Customer $customer): object
    {
        $endpoint = "/customers";
        $data = $customer->toArray();
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * Edita os dados de um cliente existente.
     *
     * @url https://dev.iugu.com/reference/alterar-cliente
     *
     * @param string $id Identificador único do cliente a ser editado.
     * @param Customer $customer Objeto contendo os dados atualizados do cliente.
     * @return object Objeto de resposta da API contendo os detalhes do cliente atualizado.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function edit(string $id, Customer $customer): object
    {
        $endpoint = "/customers/$id";
        $data = $customer->toArray();
        return $this->call('PUT', $endpoint, $data);
    }

    /**
     * Remove um cliente pelo identificador.
     *
     * @url https://dev.iugu.com/reference/remover-cliente
     *
     * @param string $id Identificador único do cliente a ser removido.
     * @return object Objeto de resposta da API confirmando a remoção do cliente.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function remove(string $id): object
    {
        $endpoint = "/customers/$id";
        return $this->call('DELETE', $endpoint);
    }

    /**
     * Busca os detalhes de um cliente pelo identificador.
     *
     * @url https://dev.iugu.com/reference/buscar-cliente
     *
     * @param string $id Identificador único do cliente a ser buscado.
     * @return object Objeto de resposta da API contendo os dados do cliente.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function getById(string $id): object
    {
        $endpoint = "/customers/$id";
        return $this->call('GET', $endpoint);
    }

    /**
     * Lista clientes com base em filtros opcionais.
     *
     * @url https://dev.iugu.com/reference/listar-cliente
     *
     * @param int|null $limit Quantidade máxima de clientes a ser retornada.
     * @param int|null $start Índice inicial da listagem.
     * @param string|null $created_at_from Data de início para criação dos clientes no formato YYYY-MM-DD.
     * @param string|null $created_at_to Data de término para criação dos clientes no formato YYYY-MM-DD.
     * @param string|null $query Termo de busca para filtrar clientes.
     * @param string|null $updated_since Data de atualização no formato YYYY-MM-DD para trazer somente clientes atualizados posteriormente a esta data.
     * @return object Objeto de resposta da API contendo a lista de clientes.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function list(?int    $limit = null,
                         ?int    $start = null,
                         ?string $created_at_from = null,
                         ?string $created_at_to = null,
                         ?string $query = null,
                         ?string $updated_since = null,
    ): object
    {
        $qr = http_build_query(array_filter([
            "limit" => $limit,
            "start" => $start,
            "created_at_from" => $created_at_from,
            "created_at_to" => $created_at_to,
            "query" => $query,
            "dated_since" => $updated_since,
        ]));
        $endpoint = "/customers" . ($qr ? "?" . $qr : "");
        return $this->call('GET', $endpoint);
    }

    /**
     * Cria métodos de pagamento para um cliente específico.
     *
     * @url https://dev.iugu.com/reference/criar-forma-de-pagamento
     *
     * @param string $customer_id Identificador único do cliente para o qual o método de pagamento será criado.
     * @param string $description Descrição do método de pagamento.
     * @param string $token Token associado ao método de pagamento que será criado.
     * @param bool $set_as_default Define se o método de pagamento será configurado como padrão. Valor padrão é false.
     * @return object Objeto de resposta da API com os detalhes do método de pagamento criado.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function create_payment_methods(string $customer_id, string $description, string $token, bool $set_as_default = false): object
    {
        $endpoint = "/customers/$customer_id/payment_methods";
        $data = [
            "description" => $description,
            "token" => $token,
            "set_as_default" => $set_as_default
        ];
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * Edita os métodos de pagamento associados a um cliente específico.
     *
     * @url https://dev.iugu.com/reference/alterar-forma-de-pagamento
     *
     * @param string $customer_id Identificador único do cliente ao qual o método de pagamento pertence.
     * @param string $method_id Identificador único do método de pagamento que será editado.
     * @param string $description Nova descrição para o método de pagamento.
     * @return object Objeto de resposta da API com os detalhes do método de pagamento atualizado.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function edit_payment_methods(string $customer_id, string $method_id, string $description): object
    {
        $endpoint = "/customers/$customer_id/payment_methods/$method_id";
        $data = [
            "description" => $description,
        ];
        return $this->call('PUT', $endpoint, $data);
    }

    /**
     * Remove os métodos de pagamento associados a um cliente específico.
     *
     * @url https://dev.iugu.com/reference/remover-forma-de-pagamento
     *
     * @param string $customer_id Identificador único do cliente ao qual o método de pagamento pertence.
     * @param string $method_id Identificador único do método de pagamento que será removido.
     * @return object Objeto de resposta da API confirmando a remoção do método de pagamento.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function remove_payment_methods(string $customer_id, string $method_id): object
    {
        $endpoint = "/customers/$customer_id/payment_methods/$method_id";
        return $this->call('DELETE', $endpoint);
    }

    /**
     * Retorna os detalhes de um método de pagamento associado a um cliente específico.
     *
     * @url https://dev.iugu.com/reference/buscar-forma-de-pagamento
     *
     * @param string $customer_id Identificador único do cliente ao qual o método de pagamento pertence.
     * @param string $method_id Identificador único do método de pagamento que será recuperado.
     * @return object Objeto de resposta da API contendo as informações do método de pagamento solicitado.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function get_payment_methods(string $customer_id, string $method_id): object
    {
        $endpoint = "/customers/$customer_id/payment_methods/$method_id";
        return $this->call('GET', $endpoint);
    }

    /**
     * Lista os métodos de pagamento associados a um cliente específico.
     *
     * @url https://dev.iugu.com/reference/listar-forma-de-pagamento
     *
     * @param string $customer_id Identificador único do cliente cujos métodos de pagamento serão listados.
     * @return object Objeto de resposta da API contendo a lista de métodos de pagamento do cliente.
     * @throws GuzzleException Exceção lançada em caso de falha na chamada HTTP.
     */
    public function list_payment_methods(string $customer_id): object
    {
        $endpoint = "/customers/$customer_id/payment_methods";
        return $this->call('GET', $endpoint);
    }
}
