<?php
global $config;
include_once '../_conf.inc';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkIugu\Context\Plans;
use O4l3x4ndr3\SdkIugu\Types\Plan;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $plans = new Plans($config);
        $data = new Plan();

        $data->setName($_POST['name'])
            ->setIdentifier($_POST['identifier'])
            ->setInterval($_POST['interval'])
            ->setIntervalType($_POST['interval_type'])
            ->setValueCents($_POST['value_cents'])
            ->setPayableWith($_POST['payable_with'])
            ->setBillingDays($_POST['billing_days'])
            ->setMaxCycles($_POST['max_cycles'])
            ->setInvoiceMaxInstallments($_POST['invoice_max_installments']);

        $resp = $plans->create($data);

        http_redirect("get_by_id.php?id=" . $resp->id);

        die('Plano criado com sucesso');
    } catch (\Exception|GuzzleException $e) {
        die($e->getMessage());
    }
}
?>
<html lang="pt-br">
<body>
<form method="post">
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%">Nome do plano</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Identificador</td>
            <td><input type="text" name="identifier"></td>
        </tr>
        <tr>
            <td>
                Intervalo entre as cobranças<br/>
                <small>Ciclo do plano (Entre 1 e 599). Intervalo até a próxima cobrança.</small>
            </td>
            <td>
                <input type="text" name="interval">
                <select name="interval_type">
                    <option value="weeks">Semana(s)</option>
                    <option value="months">Mês(es)</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Valor do plano<br/>
                <small>Preço do plano em centavos.</small>
            </td>
            <td><input type="text" name="value_cents"></td>
        </tr>
        <tr>
            <td>Método de pagamento</td>
            <td>
                <select multiple name="payable_with[]">
                    <option value="credit_card">Cartão de crédito</option>
                    <option value="bank_slip">Boleto</option>
                    <option value="pix">Pix</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Dias de faturamento<br/>
                <small>Quantos dias antes de vencer a assinatura será gerada uma nova fatura</small>
            </td>
            <td><input type="number" name="billing_days"></td>
        </tr>
        <tr>
            <td>
                Ciclos<br/>
                <small>Limite de ciclos da assinatura</small>
            </td>
            <td><input type="number" name="max_cycles" value="0" min="0"></td>
        </tr>
        <tr>
            <td>
                Quantidade máxima de parcelas<br/>
                <small>
                    Envie um valor de '1' à '12'. Se este parâmetro não for enviado, a quantidade máxima de parcelas
                    será o que está configurado na conta.
                </small>
            </td>
            <td><input type="number" name="invoice_max_installments" min="1" max="12"></td>
        </tr>
    </table>
    <input type="submit" value="Salvar">
</form>
</body>
</html>
