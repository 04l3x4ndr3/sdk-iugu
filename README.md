# sdk-conexa-saude

Kit de Desenvolvimento de Software (SDK) de consumo de APIs da Conexa Saúde (Não oficial)

Este SDK encapsula por métodos de classes PHP todas as chamadas da API Conexa Saúde.
Respeitando as nomenclaturas de parâmetros e estrutura de retorno (response) das chamadas (request).

Os arquivos estão organizados por diretórios conforme abaixo:

```
|+-- Context
|    +-- Appointment.php
|    +-- AppointmentQueue.php
|    +-- APS.php
|    +-- Clinic.php
|    +-- CreditCard.php
|    +-- Doctor.php
|    +-- Domain.php
|    +-- Enota.php
|    +-- HealthcareProfessional.php
|    +-- NPS.php
|    +-- Patient.php
|    +-- Prices.php
|    +-- ProfessionalCalendar.php
|    +-- Psychologist.php
|+-- Helpers
|    +-- Enum.php
|    +-- HTTPClient.php
|+-- Types
|    +-- EvaluationRequest.php
|    +-- PatientAddressRequest.php
|    +-- PatientFamilyGroupRequest.php
|    +-- PatientRequest.php
|    +-- ProfessionalRequest.php
+--Configuration.php
```

## Instalação Via Compose

Instale o pacote via **composer** utilizando o comando ```composer require o4l3x4ndr3/sdk-conexa-saude```.

## Configuração Ambiente

A SDK possui suporte a controle de ambiente (ENVIRONMENT), permitindo a indicação do ambiente em que a aplicação se
encontrar
em execução (Produção ou Desenvolvimento).

Para definir o ambiente em que a aplicação esta sendo executada, inclua defina **variáveis de ambientes no servidor** ou
declare-as no arquivo _**.htaccess**_.

### Utilizando arquivo .htaccess

Utilizando o arquivo ```.htaccess``` da sua aplicação (caso não possua, crie), declare as seguintes variáveis:

```
CONEXA_ENVIRONMENT [development | production]
CONEXA_TOKEN [token da API]
```

### Utilizando a classe Configuration
Também é possível configurar a comunicação com a API através da classe ``Configuration``.
```
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Context\Patient;

# Definindo o token e ambiente... 
$config = new Configuration('***94856b***', 'development');

# Instanciando uma classe de contexto
$patient = new Patient($config);
```

Por padrão a SDK utiliza o valor para ambiente de desenvolvimento [```development```].

## Contextos da API

As classes de contextos são constituídas por métodos de consumo da API e possuem suporte a ```namespace``` do PHP,
possível utilizá-los através da palavra-chave ```use```, conforme exemplo abaixo:

```
use O4l3x4ndr3\SdkConexa\Context\Patient;

### OBTER DADOS DO PACIENTE ATRAVÉS DO ID ###

# Instanciando a classe
$patient = new Patient();
$patient->getByCpf(12345678900);

# ou através de chamada de forma anônima:
(new Patient())->getByCpf(12345678900);
```

Todas as classes possuem assinaturas que remetem aos métodos documentados no site oficial da
API (https://apidocs.conexasaude.com.br/v1/enterprise/index.html).

## Objetos de Tipos

Os chamados objetos de tipo, são classes que de modelos representados nos contextos de requisição da API e não possuem
métodos, apenas propriedades. Um objeto de tipo pode um modelo de dados estruturado e deve ser instanciado e atribuídos
os seus respetivos valores de propriedades para assim sejam utilizados nas classes de contextos.

Veja no exemplo a seguir o uso de um objeto de tipo para inserir um novo grupo familiar:

```
use O4l3x4ndr3\SdkConexa\Context\Patient; // Classe do contexto Paciente
use O4l3x4ndr3\SdkConexa\Types\PatientRequest; // Classe de Tipo Paciente

...

# Dados do Titular
$holderData = new PatientRequest('João Silva', 'js1981@email.com', '123.456.789-00');

# Array de PatientRequest 
$arrDependents = [
    new PatientRequest('Thiago Silva', 'ts@email.com'),
    new PatientRequest('Carlos Silva', 'cs@email.com')
    ...
];

return (new Patient())->insertFamilyGroup($holderData, $arrDependents);
```

Cada tipo possui um construtor, mas outras propriedades (opcionais) também poderão ser declaradas, caso o tipo as
possuam.

## Listas enumeradas (ENUM)

Como forma de auxiliar o preenchimento de alguns valores de lista, a bibliotéca disponibiliza um arquivo de lista
enumeradas (Enum), como sexo, cidade, dias da semana e outros. O arquivo de Enum encontra-se no diretório
```/Helpers```, mas também e acessado de forma automática
conforme [documentação](https://www.php.net/manual/pt_BR/language.enumerations.basics.php) oficial do PHP.

## Contribuição ##

Caso deseja contribuir para melhorar e manter esse pacote envie e-mail para alexandre@2plug.com.br e solicite acesso ao
repositório informando o seu perfil no github.
