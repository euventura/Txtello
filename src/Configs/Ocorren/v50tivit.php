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
            ]
        ]
    ],
    '540' => [
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
            ]
        ]
    ],
    '541' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'shipping_company_cnpj',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 50,
                'name' => 'shipping_company_social_reason',
                'format' => ''
            ]
        ]
    ],
    '542' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'cnpj_company',
                'format' => ''
            ],
            3 => [
                'size' => 3,
                'name' => 'invoice_serie',
                'format' => ''
            ],
            4 => [
                'size' => 9,
                'name' => 'invoice_number',
                'format' => 'Mandatory'
            ],
            5 => [
                'size' => 3,
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
                'size' => 20,
                'name' => 'packing_list_number',
                'format' => ''
            ],
            10 => [
                'size' => 20,
                'name' => 'shipment_sap_number_1',
                'format' => ''
            ],
            11 => [
                'size' => 20,
                'name' => 'shipment_sap_number_2',
                'format' => ''
            ],
            12 => [
                'size' => 20,
                'name' => 'shipment_sap_number_3',
                'format' => ''
            ],
            13 => [
                'size' => 10,
                'name' => 'knowledge_issuing_branch',
                'format' => ''
            ],
            14 => [
                'size' => 5,
                'name' => 'knowledge_serie',
                'format' => ''
            ],
            15 => [
                'size' => 12,
                'name' => 'knowledge_number',
                'format' => ''
            ],
            16 => [
                'size' => 1,
                'name' => 'indication_type_delivery',
                'format' => ''
            ],
            17 => [
                'size' => 5,
                'name' => 'code_company_invoice_issuer',
                'format' => ''
            ],
            18 => [
                'size' => 5,
                'name' => 'code_branch_company_invoice_issuer',
                'format' => ''
            ],
            19 => [
                'size' => 8,
                'name' => 'arrival_date_invoice_destination',
                'format' => 'DateTime:dd/mm/yyyy'
            ],
            20 => [
                'size' => 4,
                'name' => 'arrival_time_invoice_destination',
                'format' => ''
            ],
            21 => [
                'size' => 8,
                'name' => 'start_date_unloading_destination',
                'format' => 'DateTime:dd/mm/yyyy'
            ],
            22 => [
                'size' => 4,
                'name' => 'start_hour_unloading_destination',
                'format' => ''
            ],
            23 => [
                'size' => 8,
                'name' => 'end_date_unloading_destination',
                'format' => 'DateTime:dd/mm/yyyy'
            ],
            24 => [
                'size' => 4,
                'name' => 'end_hour_unloading_destination',
                'format' => ''
            ],
            25 => [
                'size' => 8,
                'name' => 'departure_date_invoice_destination',
                'format' => 'DateTime:dd/mm/yyyy'
            ],
            26 => [
                'size' => 4,
                'name' => 'departure_hour_invoice_destination',
                'format' => ''
            ],
            27 => [
                'size' => 14,
                'name' => 'issuer_cnpj_return_invoice',
                'format' => ''
            ],
            28 => [
                'size' => 3,
                'name' => 'return_invoice_serie',
                'format' => ''
            ],
            29 => [
                'size' => 9,
                'name' => 'return_invoice_number',
                'format' => ''
            ]
        ]
    ],
    '543' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 70,
                'name' => 'free_text_1',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 70,
                'name' => 'free_text_2',
                'format' => ''
            ],
            4 => [
                'size' => 70,
                'name' => 'free_text_3',
                'format' => ''
            ]
        ]
    ],
    '544' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 8,
                'name' => 'quantity_invoice_volumes',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 8,
                'name' => 'quantity_delivered_volumes',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 20,
                'name' => 'invoice_item_code',
                'format' => 'Mandatory'
            ],
            5 => [
                'size' => 50,
                'name' => 'invoice_item_description',
                'format' => 'Mandatory'
            ]
        ]
    ],
    '545' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'cnpj_freight_contracting_company',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 14,
                'name' => 'cnpj_company_issuing_knowledge',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 10,
                'name' => 'branch_issuing_ctrc',
                'format' => ''
            ],
            5 => [
                'size' => 5,
                'name' => 'knowledge_serie_originating_occurrence',
                'format' => ''
            ],
            6 => [
                'size' => 12,
                'name' => 'knowledge_number_originating_occurrence',
                'format' => 'Mandatory'
            ]
        ]
    ],
    '549' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 4,
                'name' => 'occurrence_registration_number',
                'format' => 'Mandatory'
            ]
        ]
    ]
];