<?php

namespace O4l3x4ndr3\SdkIugu\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkIugu\Types\Invoice;
use O4l3x4ndr3\SdkIugu\Utils\HTTPClient;
use O4l3x4ndr3\SdkIugu\Configuration;

class Invoices extends HTTPClient
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * Cria um novo invoice (fatura).
     *
     * @param Invoice $invoice Objeto que representa os dados da fatura.
     * @return object Retorna o objeto de resposta da API ou o resultado esperado.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/criar-fatura
     */
    public function create(Invoice $invoice): object
    {
        $endpoint = "/invoices";
        $data = array_filter($invoice->toArray());
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * Reembolsa uma fatura existente.
     *
     * @param string $id ID único da fatura a ser reembolsada.
     * @return object Retorna o objeto de resposta da API referente ao reembolso.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/reembolsar-fatura
     */
    public function refund(string $id): object
    {
        $endpoint = "/invoices/$id/refund";
        return $this->call('GET', $endpoint);
    }

    /**
     * Cancela uma fatura existente.
     *
     * @param string $id ID único da fatura a ser cancelada.
     * @return object Retorna o objeto de resposta da API referente ao cancelamento.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/cancelar-fatura
     */
    public function cancel(string $id): object
    {
        $endpoint = "/invoices/$id/cancel";
        return $this->call('PUT', $endpoint);
    }

    /**
     * Captura uma fatura existente.
     *
     * Esse método realiza a captura de uma fatura previamente autorizada.
     *
     * @param string $id ID único da fatura a ser capturada.
     * @return object Retorna o objeto de resposta da API referente à captura da fatura.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/capturar-fatura
     */
    public function capture(string $id): object
    {
        $endpoint = "/invoices/$id/capture";
        return $this->call('GET', $endpoint);
    }

    /**
     * Duplica uma fatura existente.
     *
     * Esse método permite criar uma nova fatura baseada em uma fatura existente, com possibilidade de personalizar
     * itens, data de vencimento e outras configurações.
     *
     * @param string $id ID único da fatura a ser duplicada.
     * @param string $due_date Data de vencimento da nova fatura no formato 'YYYY-MM-DD'.
     * @param array|null $items Lista de itens a serem adicionados à nova fatura (caso deseje personalizar).
     * @param bool|null $ignore_due_email Determina se o email de boleto vencido será ignorado (opcional).
     * @param bool|null $ignore_canceled_email Determina se o email de fatura cancelada será ignorado (opcional).
     * @param bool|null $current_fines_option Permite definir se as multas atuais serão aplicadas (opcional).
     * @param bool|null $keep_early_payment_discount Indica se o desconto por pagamento antecipado será mantido (opcional).
     * @return object Retorna o objeto de resposta da API referente à duplicação da fatura.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/duplicar-fatura
     */
    public function duplicate(string $id, string $due_date, ?array $items = null, ?bool $ignore_due_email = null, ?bool $ignore_canceled_email = null, ?bool $current_fines_option = null, ?bool $keep_early_payment_discount = null): object
    {
        $endpoint = "/invoices/$id/duplicate";
        $data = array_filter([
            "due_date" => $due_date,
            "items" => $items,
            "ignore_due_email" => $ignore_due_email,
            "ignore_canceled_email" => $ignore_canceled_email,
            "current_fines_option" => $current_fines_option,
            "keep_early_payment_discount" => $keep_early_payment_discount,
        ]);
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * Reenvia uma fatura expirada, gerando uma nova baseada na fatura original.
     *
     * Esse método permite criar uma nova fatura para substituir uma fatura expirada,
     * podendo personalizar itens, data de vencimento e outras configurações.
     *
     * @param string $id ID único da fatura a ser reenviada.
     * @param string $due_date Data de vencimento da nova fatura no formato 'YYYY-MM-DD'.
     * @param array|null $items Lista de itens a serem adicionados à nova fatura (caso deseje personalizar).
     * @param bool|null $ignore_due_email Determina se o email de boleto vencido será ignorado (opcional).
     * @param bool|null $ignore_canceled_email Determina se o email de fatura cancelada será ignorado (opcional).
     * @param bool|null $current_fines_option Permite definir se as multas atuais serão aplicadas (opcional).
     * @param bool|null $keep_early_payment_discount Indica se o desconto por pagamento antecipado será mantido (opcional).
     * @param string|null $payable_with Define o método de pagamento da nova fatura, se aplicável (opcional).
     * @return object Retorna o objeto de resposta da API referente ao envio da nova fatura gerada.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/duplicar-fatura
     */
    public function resendExpired(string $id, string $due_date, ?array $items = null, ?bool $ignore_due_email = null, ?bool $ignore_canceled_email = null, ?bool $current_fines_option = null, ?bool $keep_early_payment_discount = null, ?string $payable_with = null): object
    {
        $endpoint = "/invoices/$id/duplicate";
        $data = array_filter([
            "due_date" => $due_date,
            "items" => $items,
            "ignore_due_email" => $ignore_due_email,
            "ignore_canceled_email" => $ignore_canceled_email,
            "current_fines_option" => $current_fines_option,
            "keep_early_payment_discount" => $keep_early_payment_discount,
            "payable_with" => $payable_with,
        ]);
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * Lista faturas de acordo com os filtros fornecidos.
     *
     * Esse método permite buscar faturas disponíveis no sistema com base em diferentes filtros,
     * como período de criação, vencimento, status e outros.
     *
     * @param int|null $limit Limite de resultados por página (opcional).
     * @param int|null $start Índice inicial da lista paginada (opcional).
     * @param string|null $created_at_from Data inicial do período de criação no formato 'YYYY-MM-DD' (opcional).
     * @param string|null $created_at_to Data final do período de criação no formato 'YYYY-MM-DD' (opcional).
     * @param string|null $paid_at_from Data inicial do período de pagamento no formato 'YYYY-MM-DD' (opcional).
     * @param string|null $paid_at_to Data final do período de pagamento no formato 'YYYY-MM-DD' (opcional).
     * @param string|null $due_date Data de vencimento das faturas no formato 'YYYY-MM-DD' (opcional).
     * @param string|null $query Valor a ser pesquisado nos campos disponíveis da fatura (opcional).
     * @param string|null $updated_since Data de última atualização a partir da qual as faturas serão listadas (opcional).
     * @param int|null $customer_id ID do cliente associado às faturas (opcional).
     * @param string|null $status_filter Status das faturas a serem filtradas (opcional).
     * @return object Retorna o objeto de resposta da API com a lista de faturas.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/listar-faturas
     */
    public function list(?int $limit = null, ?int $start = null, ?string $created_at_from = null, ?string $created_at_to = null, ?string $paid_at_from = null, ?string $paid_at_to = null, ?string $due_date = null, ?string $query = null, ?string $updated_since = null, ?int $customer_id = null, ?string $status_filter = null): object
    {
        $qr = http_build_query(array_filter([
            "limit" => $limit,
            "start" => $start,
            "created_at_from" => $created_at_from,
            "created_at_to" => $created_at_to,
            "paid_at_from" => $paid_at_from,
            "paid_at_to" => $paid_at_to,
            "due_date" => $due_date,
            "query" => $query,
            "dated_since" => $updated_since,
            "customer_id" => $customer_id,
            "status_filter" => $status_filter
        ]));
        $endpoint = "/invoices" . ($qr ? "?" . $qr : "");
        return $this->call('GET', $endpoint);
    }

    /**
     * Recupera os detalhes de uma fatura pelo seu ID.
     *
     * Este método é usado para buscar informações de uma fatura específica
     * com base no seu identificador único.
     *
     * @param string $id ID único da fatura a ser buscada.
     * @return object Retorna o objeto de resposta da API contendo os detalhes da fatura.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/consultar-faturas
     */
    public function getById(string $id): object
    {
        $endpoint = "/invoices/$id";
        return $this->call('GET', $endpoint);
    }

    /**
     * Realiza o pagamento de uma fatura de forma externa.
     *
     * Este método permite registrar o pagamento de uma fatura utilizando uma referência externa,
     * como um identificador de transação ou meio de pagamento externo ao sistema.
     *
     * @param string $id ID único da fatura a ser paga externamente.
     * @param string $external_payment_id ID único relacionado ao pagamento externo.
     * @param string|null $external_payment_description Descrição adicional sobre o pagamento externo (opcional).
     * @return object Retorna o objeto de resposta da API referente ao registro do pagamento.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/pagar-externamente
     */
    public function externallyPay(string $id, string $external_payment_id, ?string $external_payment_description = null): object
    {
        $endpoint = "/invoices/$id/externally_pay";
        $data = array_filter([
            'external_payment_id' => $external_payment_id,
            'external_payment_description' => $external_payment_description,
        ]);
        return $this->call('PUT', $endpoint, $data);
    }

    /**
     * Realiza uma pesquisa de recurso com base em um campo e valor especificados.
     *
     * Este método é útil para buscar faturas utilizando um campo específico
     * e seu respectivo valor, retornando os recursos que correspondem aos critérios de pesquisa.
     *
     * @param string $query_field Nome do campo a ser utilizado na pesquisa (ex.: 'id', 'status', etc.).
     * @param string $value Valor correspondente ao campo de pesquisa.
     * @return object Retorna o objeto de resposta da API contendo os recursos encontrados.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/search-resource
     */
    public function resourceSearch(string $query_field, string $value): object
    {
        $qr = http_build_query(array_filter([
            "query_field" => $query_field,
            "value" => $value,
        ]));
        $endpoint = "/invoices/resource_search" . ($qr ? "?" . $qr : "");
        return $this->call('GET', $endpoint);
    }

    /**
     * Realiza uma pesquisa no marketplace com base em um campo e valor especificados.
     *
     * Este método é utilizado para buscar recursos do marketplace utilizando
     * um campo específico e o valor correspondente, retornando os recursos
     * que atendem aos critérios fornecidos.
     *
     * @param string $query_field Nome do campo a ser utilizado na pesquisa (ex.: 'id', 'status', etc.).
     * @param string $value Valor correspondente ao campo de pesquisa.
     * @return object Retorna o objeto de resposta da API contendo os recursos encontrados no marketplace.
     * @throws GuzzleException Lança uma exceção caso ocorra algum erro na solicitação HTTP.
     * @url https://dev.iugu.com/reference/search-marketplace-resource
     */
    public function marketplaceResourceSearch(string $query_field, string $value): object
    {
        $qr = http_build_query(array_filter([
            "query_field" => $query_field,
            "value" => $value,
        ]));
        $endpoint = "/invoices/marketplace_resource_search" . ($qr ? "?" . $qr : "");
        return $this->call('GET', $endpoint);
    }

}