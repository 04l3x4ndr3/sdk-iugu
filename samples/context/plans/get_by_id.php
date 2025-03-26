<?php
global $config;
include_once '../_conf.inc';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkIugu\Context\Plans;
use O4l3x4ndr3\SdkIugu\Types\Plan;

if (!empty($_SERVER['QUERY_STRING'])) {
    try {
        $plans = new Plans($config);
        $id = $_GET['id'];
        $data = $plans->getById($id);
    } catch (\Exception|GuzzleException $e) {
        die($e->getMessage());
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $plans = new Plans($config);
        $oPlan = new Plan();
        $id = $_GET['id'];

        $oPlan->setName($_POST['name'] ?? null)
            ->setIdentifier($_POST['identifier'] ?? null)
            ->setInterval($_POST['interval'] ?? null)
            ->setIntervalType($_POST['interval_type'] ?? null)
            ->setValueCents($_POST['value_cents'] ?? null)
            ->setPayableWith($_POST['payable_with'] ?? null)
            ->setBillingDays($_POST['billing_days'] ?? null)
            ->setMaxCycles($_POST['max_cycles'] ?? null)
            ->setInvoiceMaxInstallments($_POST['invoice_max_installments'] ?? null);

        $resp = $plans->edit($id, $oPlan);

        header("location: get_by_id.php?id=" . $resp->id);
    } catch (\Exception|GuzzleException $e) {
        die($e->getMessage());
    }
}

?>
<html lang="pt-br">
<body>
<form method="post" action="?id=<?php echo $data->id ?? null; ?>">
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%">Nome do plano</td>
            <td><input type="text" name="name" value="<?php echo $data->name ?? null; ?>"></td>
        </tr>
        <tr>
            <td>Identificador</td>
            <td><input type="text" name="identifier" value="<?php echo $data->identifier ?? null; ?>"></td>
        </tr>
        <tr>
            <td>
                Intervalo entre as cobranças<br/>
                <small>Ciclo do plano (Entre 1 e 599). Intervalo até a próxima cobrança.</small>
            </td>
            <td>
                <input type="text" name="interval" value="<?php echo $data->interval ?? null; ?>">
                <select name="interval_type">
                    <option value="weeks" <?php echo (!empty($data->interval_type) && $data->interval_type === 'weeks') ? 'selected' : '' ?>>
                        Semana(s)
                    </option>
                    <option value="months" <?php echo (!empty($data->interval_type) && $data->interval_type === 'months') ? 'selected' : '' ?>>
                        Mês(es)
                    </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Valor do plano<br/>
                <small>Preço do plano em centavos.</small>
            </td>
            <td><input type="text" name="value_cents" value="<?php echo $data->prices[0]->value_cents ?? null; ?>"></td>
        </tr>
        <tr>
            <td>Método de pagamento</td>
            <td>
                <select multiple name="payable_with[]">
                    <option value="credit_card" <?php echo (!empty($data->payable_with) && (is_array($data->payable_with) && in_array('credit_card', $data->payable_with)) || $data->payable_with == 'credit_card') ? 'selected' : ''; ?>>
                        Cartão de crédito
                    </option>
                    <option value="bank_slip" <?php echo (!empty($data->payable_with) && (is_array($data->payable_with) && in_array('bank_slip', $data->payable_with)) || $data->payable_with == 'bank_slip') ? 'selected' : ''; ?>>
                        Boleto
                    </option>
                    <option value="pix" <?php echo (!empty($data->payable_with) && ((is_array($data->payable_with) && in_array('pix', $data->payable_with)) || $data->payable_with == 'pix')) ? 'selected' : ''; ?>>
                        Pix
                    </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Dias de faturamento<br/>
                <small>Quantos dias antes de vencer a assinatura será gerada uma nova fatura</small>
            </td>
            <td><input type="number" name="billing_days" value="<?php echo $data->billing_days ?? null; ?>"></td>
        </tr>
        <tr>
            <td>
                Ciclos<br/>
                <small>Limite de ciclos da assinatura</small>
            </td>
            <td><input type="number" name="max_cycles" min="0" value="<?php echo $data->max_cycles ?? null; ?>"></td>
        </tr>
        <tr>
            <td>
                Quantidade máxima de parcelas<br/>
                <small>
                    Envie um valor de '1' à '12'. Se este parâmetro não for enviado, a quantidade máxima de parcelas
                    será o que está configurado na conta.
                </small>
            </td>
            <td><input type="number" name="invoice_max_installments" min="1" max="12"
                       value="<?php echo $data->invoice_max_installments ?? null; ?>"></td>
        </tr>
    </table>
    <input type="submit" value="Salvar">
</form>
</body>
</html>
