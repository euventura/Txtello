<?php

return [
    '000' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 35,
                'name' => 'sender_identifier',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 35,
                'name' => 'destination_identifier',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 6,
                'name' => 'date',
                'format' => 'Mandatory'
            ],
            5 => [
                'size' => 4,
                'name' => 'hour',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 12,
                'name' => 'exchange_identifier',
                'format' => 'Mandatory'
            ],
            7 => [
                'size' => 25,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '340' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'document_identifier',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 103,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '341' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'cgc',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 40,
                'name' => 'social_reason',
                'format' => ''
            ],
            4 => [
                'size' => 63,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '342' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'cgc_company_issuing_invoice',
                'format' => ''
            ],
            3 => [
                'size' => 3,
                'name' => 'invoice_serie',
                'format' => ''
            ],
            4 => [
                'size' => 8,
                'name' => 'invoice_number',
                'format' => 'Mandatory'
            ],
            5 => [
                'size' => 2,
                'name' => 'delivery_occurrence_code',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 8,
                'name' => 'occurrence_date',
                'format' => 'Mandatory|DateTime:dd/mm/yyyy'
            ],
            7 => [
                'size' => 4,
                'name' => 'occurrence_hour',
                'format' => ''
            ],
            8 => [
                'size' => 2,
                'name' => 'occurrence_observation_code',
                'format' => ''
            ],
            9 => [
                'size' => 70,
                'name' => 'free_text',
                'format' => ''
            ],
            10 => [
                'size' => 6,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '343' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'cgc_freight_contracting_company',
                'format' => ''
            ],
            3 => [
                'size' => 10,
                'name' => 'branch_originating_knowledge_occurrence',
                'format' => ''
            ],
            4 => [
                'size' => 5,
                'name' => 'serie_originating_knowledge_occurrence',
                'format' => ''
            ],
            5 => [
                'size' => 12,
                'name' => 'number_originating_knowledge_occurrence',
                'format' => ''
            ],
            6 => [
                'size' => 76,
                'name' => 'filler',
                'format' => 'Mandatory'
            ]
        ]
    ]
];