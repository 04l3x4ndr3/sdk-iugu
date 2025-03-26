# sdk-iugu

Kit de Desenvolvimento de Software (SDK) de consumo de APIs da IUGU (Não oficial)

Este SDK encapsula por métodos de classes PHP todas as chamadas da API IUGU.
Respeitando as nomenclaturas de parâmetros e estrutura de retorno (response) das chamadas (request).

Os arquivos estão organizados por diretórios conforme abaixo:

```
|+-- Context
|    +-- Customers.php
|    +-- Plans.php
|    +-- Subscriptions.php
|+-- Types
|    +-- Customer.php
|    +-- Plain.php
|    +-- PlainFeature.php
|    +-- SplitRule.php
|    +-- Subscription.php
|    +-- SubscriptionSubitem.php
|+-- Utils
|    +-- HTTPClient.php
+--Configuration.php
```

## Instalação Via Compose

Instale o pacote via **composer** utilizando o comando ```composer require o4l3x4ndr3/sdk-iugu```.


### Utilizando arquivo .htaccess

Utilizando o arquivo ```.htaccess``` da sua aplicação (caso não possua, crie), declare as seguintes variáveis:

```
IUGU_API_KEY
```

### Utilizando a classe Configuration

Também é possível configurar a comunicação com a API através da classe ``Configuration``.

```
use O4l3x4ndr3\SdkIugu\Configuration;
use O4l3x4ndr3\SdkIugu\Context\Patient;

# Definindo o token e ambiente... 
$config = new Configuration('***api_token***');
```
## Contextos da API

As classes de contextos são constituídas por métodos de consumo da API e possuem suporte a ```namespace``` do PHP,
possível utilizá-los através da palavra-chave ```use```, conforme exemplo abaixo:

```
use O4l3x4ndr3\SdkIugu\Context\Patient;

### OBTER DADOS DO PACIENTE ATRAVÉS DO ID ###

# Instanciando a classe
$customer = new Customers();
$customer->getById('ERF78SDF0980...');

# ou através de chamada de forma anônima:
(new Customers())->getById('ERF78SDF0980...');
```

Todas as classes possuem assinaturas que remetem aos métodos documentados no site oficial da
API ([https://dev.iugu.com/reference/introdução-a-api](https://https://dev.iugu.com/reference/introdução-a-api)).

## Objetos de Tipos

Os chamados objetos de tipo, são classes que de modelos representados nos contextos de requisição da API e não possuem
métodos, apenas propriedades. Um objeto de tipo pode um modelo de dados estruturado e deve ser instanciado e atribuídos
os seus respetivos valores de propriedades para assim sejam utilizados nas classes de contextos.

Veja no exemplo a seguir o uso de um objeto de tipo para inserir um novo grupo familiar:

```
use O4l3x4ndr3\SdkIugu\Context\Customer; // Classe do contexto Cliente
...

# Dados do Cliente
$customerData = new Customer('ts@email.com', 'Thiago Silva');

return (new Customers($config))->create($customerData, $arrDependents);
```

Cada tipo possui um construtor, mas outras propriedades (opcionais) também poderão ser declaradas, caso o tipo as
possuam.

## Contribuição

Caso deseja contribuir para melhorar e manter esse pacote envie e-mail para alexandre@2plug.com.br e solicite acesso ao
repositório informando o seu perfil no github.

