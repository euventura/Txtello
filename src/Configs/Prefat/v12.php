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
                'name' => 'recipient_identifier',
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
                'size' => 105,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '390' => [
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
                'size' => 183,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '391' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 15,
                'name' => 'cnpj_paying_company',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 15,
                'name' => 'shipping_state_registration',
                'format' => ''
            ],
            4 => [
                'size' => 40,
                'name' => 'social_reason',
                'format' => ''
            ],
            5 => [
                'size' => 127,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '392' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 20,
                'name' => 'pre_payment_identifier',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 8,
                'name' => 'emission_date_pre_payment',
                'format' => 'Mandatory|Date:dmY'
            ],
            4 => [
                'size' => 8,
                'name' => 'payment_date_pre_payment',
                'format' => 'Mandatory|Date:dmY'
            ],
            5 => [
                'size' => 4,
                'name' => 'quantity_documents_pre_payment',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 15,
                'name' => 'total_value_pre_payment',
                'format' => 'Mandatory'
            ],
            7 => [
                'size' => 1,
                'name' => 'document_action',
                'format' => ''
            ],
            8 => [
                'size' => 141,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '393' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 15,
                'name' => 'cnpj_company_issuing_document',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 5,
                'name' => 'shipper_document_serie',
                'format' => ''
            ],
            4 => [
                'size' => 20,
                'name' => 'shipper_document_identification',
                'format' => 'Mandatory'
            ],
            5 => [
                'size' => 8,
                'name' => 'shipper_document_emission_date',
                'format' => 'Date:dmY'
            ],
            6 => [
                'size' => 5,
                'name' => 'carrier_knowledge_series',
                'format' => ''
            ],
            7 => [
                'size' => 12,
                'name' => 'carrier_knowledge_number',
                'format' => ''
            ],
            8 => [
                'size' => 8,
                'name' => 'emission_date_knowledge',
                'format' => 'Date:dmY'
            ],
            9 => [
                'size' => 15,
                'name' => 'cnpj_place_origin_transport',
                'format' => ''
            ],
            10 => [
                'size' => 15,
                'name' => 'cnpj_cpf_transport_destination',
                'format' => ''
            ],
            11 => [
                'size' => 1,
                'name' => 'cnpj_cgc_cpf_indication',
                'format' => ''
            ],
            12 => [
                'size' => 15,
                'name' => 'shipper_total_freight_amount',
                'format' => 'Mandatory'
            ],
            13 => [
                'size' => 15,
                'name' => 'knowledge_total_freight_amount',
                'format' => ''
            ],
            14 => [
                'size' => 1,
                'name' => 'value_difference_type_indicator',
                'format' => ''
            ],
            15 => [
                'size' => 15,
                'name' => 'value_freight_difference',
                'format' => ''
            ],
            16 => [
                'size' => 15,
                'name' => 'internal_document_identification',
                'format' => ''
            ],
            17 => [
                'size' => 32,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '394' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 15,
                'name' => 'freight_value_by_weight_volume',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 15,
                'name' => 'sec_cat_value',
                'format' => ''
            ],
            4 => [
                'size' => 15,
                'name' => 'itr_value',
                'format' => ''
            ],
            5 => [
                'size' => 15,
                'name' => 'toll_value',
                'format' => ''
            ],
            6 => [
                'size' => 15,
                'name' => 'miscellaneous_values',
                'format' => ''
            ],
            7 => [
                'size' => 15,
                'name' => 'discount_value',
                'format' => ''
            ],
            8 => [
                'size' => 15,
                'name' => 'ademe_value',
                'format' => ''
            ],
            9 => [
                'size' => 5,
                'name' => 'percentage_iss_rate',
                'format' => ''
            ],
            10 => [
                'size' => 15,
                'name' => 'iss_value',
                'format' => ''
            ],
            11 => [
                'size' => 15,
                'name' => 'calculation_basis_icms',
                'format' => ''
            ],
            12 => [
                'size' => 5,
                'name' => 'percentage_icms_rate',
                'format' => ''
            ],
            13 => [
                'size' => 15,
                'name' => 'icms_value',
                'format' => ''
            ],
            14 => [
                'size' => 15,
                'name' => 'ad_valorem_freight_value',
                'format' => ''
            ],
            15 => [
                'size' => 15,
                'name' => 'dispatch_value',
                'format' => ''
            ],
            16 => [
                'size' => 7,
                'name' => 'weight_to_be_transported',
                'format' => ''
            ]
        ]
    ],
    '396' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 3,
                'name' => 'invoice_serie_1',
                'format' => ''
            ],
            3 => [
                'size' => 8,
                'name' => 'invoice_number_1',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 3,
                'name' => 'invoice_serie_2',
                'format' => ''
            ],
            5 => [
                'size' => 8,
                'name' => 'invoice_number_2',
                'format' => ''
            ],
            6 => [
                'size' => 3,
                'name' => 'invoice_serie_3',
                'format' => ''
            ],
            7 => [
                'size' => 8,
                'name' => 'invoice_number_3',
                'format' => ''
            ],
            8 => [
                'size' => 3,
                'name' => 'invoice_serie_4',
                'format' => ''
            ],
            9 => [
                'size' => 8,
                'name' => 'invoice_number_4',
                'format' => ''
            ],
            10 => [
                'size' => 3,
                'name' => 'invoice_serie_5',
                'format' => ''
            ],
            11 => [
                'size' => 8,
                'name' => 'invoice_number_5',
                'format' => ''
            ],
            12 => [
                'size' => 3,
                'name' => 'invoice_serie_6',
                'format' => ''
            ],
            13 => [
                'size' => 8,
                'name' => 'invoice_number_6',
                'format' => ''
            ],
            14 => [
                'size' => 3,
                'name' => 'invoice_serie_7',
                'format' => ''
            ],
            15 => [
                'size' => 8,
                'name' => 'invoice_number_7',
                'format' => ''
            ],
            16 => [
                'size' => 3,
                'name' => 'invoice_serie_8',
                'format' => ''
            ],
            17 => [
                'size' => 8,
                'name' => 'invoice_number_8',
                'format' => ''
            ],
            18 => [
                'size' => 3,
                'name' => 'invoice_serie_9',
                'format' => ''
            ],
            19 => [
                'size' => 8,
                'name' => 'invoice_number_9',
                'format' => ''
            ],
            20 => [
                'size' => 3,
                'name' => 'invoice_serie_10',
                'format' => ''
            ],
            21 => [
                'size' => 8,
                'name' => 'invoice_number_10',
                'format' => ''
            ],
            22 => [
                'size' => 3,
                'name' => 'invoice_serie_11',
                'format' => ''
            ],
            23 => [
                'size' => 8,
                'name' => 'invoice_number_11',
                'format' => ''
            ],
            24 => [
                'size' => 3,
                'name' => 'invoice_serie_12',
                'format' => ''
            ],
            25 => [
                'size' => 8,
                'name' => 'invoice_number_12',
                'format' => ''
            ],
            26 => [
                'size' => 3,
                'name' => 'invoice_serie_13',
                'format' => ''
            ],
            27 => [
                'size' => 8,
                'name' => 'invoice_number_13',
                'format' => ''
            ],
            28 => [
                'size' => 3,
                'name' => 'invoice_serie_14',
                'format' => ''
            ],
            29 => [
                'size' => 8,
                'name' => 'invoice_number_14',
                'format' => ''
            ],
            30 => [
                'size' => 3,
                'name' => 'invoice_serie_15',
                'format' => ''
            ],
            31 => [
                'size' => 8,
                'name' => 'invoice_number_15',
                'format' => ''
            ],
            32 => [
                'size' => 31,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '399' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 15,
                'name' => 'total_value_pre_payment',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 15,
                'name' => 'total_amount_pre_payment',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 167,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ]
];