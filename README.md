# Txtello

Pacote de leitura de arquivos texto de tamanhos padrões;

## Modo de usar

Para instanciar basta passar qual o tipo do documento precisamos no construtor, desta maneira:

```php
    $parser = new Txtello('notifis-v31'); 
```

### Ler a partir do documento texto

```php
    $data = $parser->read($fileContent);
    $data->getData();
```

### Escrever a partir de dados

```php
    $data = $parser->write($dataArray);
    $data->getText();
```

### Personalizando linhas
Caso exista alguma necessidade de sobrescrever algum mapemento da linha basta utilizar o método `setModification()`
Lembrando que o configurador herdará as configurações da **notifis-v31** e substituir somente o que foi passado no mapa

```php
    $modifiedMap = [
        '000' => [
            3 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Numeric'
            ]
        ]
    ];
    $parser = new Txtello('notifis-v31');
    $parser->setModification($modifiedMap)
```

### I/O de dados

Como o  é o retorno dos dados do TXTELLO ?

#### getData()

```php
[
    ["000"]=> [
        ["identifier"]=>  "000",
        ["sender_identifier"]=> "Nome da Empresa1",
        ["recipient_identifier"]=> "Nome da Empresa2",
        ["date"]=> "13061988",
        ["hour"]=> "OT15",
        ["exchange_identifier"]=>"91108",
    ],
    [102]=> [
        ["identifier"]=> "102",
        ["document_identifier"]=> "220915111723",
    ]
]
```

#### getData() com registros de Headers iguais

```php
[
    [103]=> [
        [0] => [
            ["identifier"]=> "103",
            ["document_identifier"]=> "22222222287",
        ]
        [1] => [
            ["identifier"]=> "103",
            ["document_identifier"]=> "22222222288",
        ]
    ]
]
```

## Drivers configurados

 - proceda
    - Notifis: v31, v50
    - Ocorren: v31, v50
    - Doccob: v31, v50
    - conemb: v31,v50
