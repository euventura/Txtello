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
                'size' => 255,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '520' => [
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
                'size' => 233,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '521' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'cnpj',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 50,
                'name' => 'social_reason',
                'format' => ''
            ],
            4 => [
                'size' => 283,
                'name' => 'filler',
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
                'size' => 10,
                'name' => 'cte_issuing_filial',
                'format' => ''
            ],
            3 => [
                'size' => 5,
                'name' => 'cte_series',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 12,
                'name' => 'cte_number',
                'format' => 'Mandatory'
            ],
            5 => [
                'size' => 8,
                'name' => 'emission_date',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 1,
                'name' => 'freight_condition',
                'format' => 'Mandatory'
            ],
            7 => [
                'size' => 14,
                'name' => 'shipping_company_cnpj',
                'format' => 'Mandatory'
            ],
            8 => [
                'size' => 14,
                'name' => 'issuer_invoice_cnpj',
                'format' => 'Mandatory'
            ],
            9 => [
                'size' => 14,
                'name' => 'return_destination_cnpj',
                'format' => ''
            ],
            10 => [
                'size' => 14,
                'name' => 'receiver_invoice_delivery_cnpj',
                'format' => ''
            ],
            11 => [
                'size' => 14,
                'name' => 'consignee_cnpj',
                'format' => ''
            ],
            12 => [
                'size' => 5,
                'name' => 'tax_code_nature_operation',
                'format' => 'Mandatory'
            ],
            13 => [
                'size' => 9,
                'name' => 'vehicle_plate',
                'format' => ''
            ],
            14 => [
                'size' => 20,
                'name' => 'packing_list_number',
                'format' => ''
            ],
            15 => [
                'size' => 20,
                'name' => 'shipment_sap_number',
                'format' => ''
            ],
            16 => [
                'size' => 20,
                'name' => 'sap_number_1',
                'format' => ''
            ],
            17 => [
                'size' => 20,
                'name' => 'sap_number_2',
                'format' => ''
            ],
            18 => [
                'size' => 15,
                'name' => 'loading_authorization_document',
                'format' => ''
            ],
            19 => [
                'size' => 45,
                'name' => 'dv_consultation_key',
                'format' => ''
            ],
            20 => [
                'size' => 15,
                'name' => 'protocol',
                'format' => ''
            ],
            21 => [
                'size' => 9,
                'name' => 'access_key_numerical_code',
                'format' => ''
            ],
            22 => [
                'size' => 10,
                'name' => 'branch_issuing_originating_knowledge',
                'format' => ''
            ],
            23 => [
                'size' => 5,
                'name' => 'serie_originating_knowledge',
                'format' => ''
            ],
            24 => [
                'size' => 12,
                'name' => 'number_originating_knowledge',
                'format' => ''
            ],
            25 => [
                'size' => 5,
                'name' => 'transportation_type',
                'format' => ''
            ],
            26 => [
                'size' => 1,
                'name' => 'knowledge_type',
                'format' => 'Mandatory'
            ],
            27 => [
                'size' => 1,
                'name' => 'freight_type',
                'format' => 'Mandatory'
            ],
            28 => [
                'size' => 1,
                'name' => 'document_action',
                'format' => 'Mandatory'
            ],
            29 => [
                'size' => 1,
                'name' => 'differentiated_freight_calculation',
                'format' => 'Mandatory'
            ],
            30 => [
                'size' => 10,
                'name' => 'freight_table',
                'format' => ''
            ],
            31 => [
                'size' => 1,
                'name' => 'fast_charge_plan',
                'format' => 'Mandatory'
            ],
            32 => [
                'size' => 2,
                'name' => 'shipper_state',
                'format' => ''
            ],
            33 => [
                'size' => 2,
                'name' => 'issuing_knowledge_state',
                'format' => ''
            ],
            34 => [
                'size' => 2,
                'name' => 'destination_state',
                'format' => ''
            ],
            35 => [
                'size' => 10,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '523' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 8,
                'name' => 'total_amount_volumes',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 9,
                'name' => 'total_weight_transported',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 10,
                'name' => 'total_weight_cubated',
                'format' => ''
            ],
            5 => [
                'size' => 10,
                'name' => 'weight_density',
                'format' => ''
            ],
            6 => [
                'size' => 15,
                'name' => 'total_freight_value',
                'format' => 'Mandatory'
            ],
            7 => [
                'size' => 15,
                'name' => 'freight_value_per_weight',
                'format' => ''
            ],
            8 => [
                'size' => 15,
                'name' => 'freight_value',
                'format' => ''
            ],
            9 => [
                'size' => 15,
                'name' => 'freight_ad_valorem',
                'format' => ''
            ],
            10 => [
                'size' => 15,
                'name' => 'sec_value',
                'format' => ''
            ],
            11 => [
                'size' => 15,
                'name' => 'itr_value',
                'format' => ''
            ],
            12 => [
                'size' => 15,
                'name' => 'dispatch_value',
                'format' => ''
            ],
            13 => [
                'size' => 15,
                'name' => 'toll_value',
                'format' => ''
            ],
            14 => [
                'size' => 15,
                'name' => 'gris_value',
                'format' => ''
            ],
            15 => [
                'size' => 15,
                'name' => 'total_extra_expenses',
                'format' => ''
            ],
            16 => [
                'size' => 15,
                'name' => 'discount_increase_value',
                'format' => ''
            ],
            17 => [
                'size' => 1,
                'name' => 'discount_increase_indicator',
                'format' => ''
            ],
            18 => [
                'size' => 15,
                'name' => 'icms_calculation_base',
                'format' => ''
            ],
            19 => [
                'size' => 5,
                'name' => 'percentage_icms_rate',
                'format' => ''
            ],
            20 => [
                'size' => 15,
                'name' => 'icms_value',
                'format' => ''
            ],
            21 => [
                'size' => 1,
                'name' => 'tax_replacement',
                'format' => 'Mandatory'
            ],
            22 => [
                'size' => 15,
                'name' => 'icms_calculation_base',
                'format' => ''
            ],
            23 => [
                'size' => 5,
                'name' => 'tax_replacement_icms_rate',
                'format' => ''
            ],
            24 => [
                'size' => 15,
                'name' => 'tax_replacement_icms_value',
                'format' => ''
            ],
            25 => [
                'size' => 15,
                'name' => 'iss_calculation_base',
                'format' => ''
            ],
            26 => [
                'size' => 5,
                'name' => 'iss_rate_percentage',
                'format' => ''
            ],
            27 => [
                'size' => 15,
                'name' => 'iss_value',
                'format' => ''
            ],
            28 => [
                'size' => 15,
                'name' => 'ir_value',
                'format' => ''
            ],
            29 => [
                'size' => 3,
                'name' => 'fiscal_right',
                'format' => ''
            ],
            30 => [
                'size' => 4,
                'name' => 'tax_type',
                'format' => ''
            ],
            31 => [
                'size' => 16,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '524' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'cnpj_issuer',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 9,
                'name' => 'invoice_number',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 3,
                'name' => 'serie',
                'format' => ''
            ],
            5 => [
                'size' => 8,
                'name' => 'invoice_date',
                'format' => 'Mandatory|Date:dmY:dd/mm/yyy'
            ],
            6 => [
                'size' => 15,
                'name' => 'invoice_value',
                'format' => 'Mandatory'
            ],
            7 => [
                'size' => 8,
                'name' => 'total_quantity_volumes',
                'format' => 'Mandatory'
            ],
            8 => [
                'size' => 9,
                'name' => 'total_gross_weight_invoice',
                'format' => 'Mandatory'
            ],
            9 => [
                'size' => 10,
                'name' => 'weight_density',
                'format' => ''
            ],
            10 => [
                'size' => 10,
                'name' => 'weight_cubated',
                'format' => ''
            ],
            11 => [
                'size' => 20,
                'name' => 'customer_order_identification',
                'format' => ''
            ],
            12 => [
                'size' => 20,
                'name' => 'packing_list_number',
                'format' => ''
            ],
            13 => [
                'size' => 20,
                'name' => 'shipment_sap_number',
                'format' => ''
            ],
            14 => [
                'size' => 20,
                'name' => 'sap_number_1',
                'format' => ''
            ],
            15 => [
                'size' => 20,
                'name' => 'sap_number_2',
                'format' => ''
            ],
            16 => [
                'size' => 1,
                'name' => 'invoice_return',
                'format' => ''
            ],
            17 => [
                'size' => 1,
                'name' => 'invoice_type',
                'format' => ''
            ],
            18 => [
                'size' => 1,
                'name' => 'bonus_indication',
                'format' => ''
            ],
            19 => [
                'size' => 4,
                'name' => 'cfop',
                'format' => ''
            ],
            20 => [
                'size' => 2,
                'name' => 'uf',
                'format' => ''
            ],
            21 => [
                'size' => 10,
                'name' => 'deployment',
                'format' => ''
            ],
            22 => [
                'size' => 142,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '525' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'cnpjcgc_invoice_issuer_1',
                'format' => ''
            ],
            3 => [
                'size' => 50,
                'name' => 'company_name_1',
                'format' => ''
            ],
            4 => [
                'size' => 3,
                'name' => 'invoice_serie_1',
                'format' => ''
            ],
            5 => [
                'size' => 9,
                'name' => 'invoice_number_1',
                'format' => ''
            ],
            6 => [
                'size' => 14,
                'name' => 'cnpjcgc_invoice_issuer_2',
                'format' => ''
            ],
            7 => [
                'size' => 50,
                'name' => 'company_name_2',
                'format' => ''
            ],
            8 => [
                'size' => 3,
                'name' => 'invoice_serie_2',
                'format' => ''
            ],
            9 => [
                'size' => 9,
                'name' => 'invoice_number_2',
                'format' => ''
            ],
            10 => [
                'size' => 14,
                'name' => 'cnpjcgc_invoice_issuer_3',
                'format' => ''
            ],
            11 => [
                'size' => 50,
                'name' => 'company_name_3',
                'format' => ''
            ],
            12 => [
                'size' => 3,
                'name' => 'invoice_serie_3',
                'format' => ''
            ],
            13 => [
                'size' => 9,
                'name' => 'invoice_number_3',
                'format' => ''
            ],
            14 => [
                'size' => 10,
                'name' => 'redispatch_issuing_branch',
                'format' => ''
            ],
            15 => [
                'size' => 5,
                'name' => 'redispatch_knowledge_serie',
                'format' => ''
            ],
            16 => [
                'size' => 12,
                'name' => 'redispatch_knowledge_number',
                'format' => ''
            ],
            17 => [
                'size' => 14,
                'name' => 'redispatch_cnpjcgc_shipping_company',
                'format' => ''
            ],
            18 => [
                'size' => 78,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '527' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 60,
                'name' => 'social_reason',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 14,
                'name' => 'cnpj_cgc',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 60,
                'name' => 'address',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 35,
                'name' => 'neighborhood',
                'format' => ''
            ],
            7 => [
                'size' => 35,
                'name' => 'city',
                'format' => 'Mandatory'
            ],
            8 => [
                'size' => 9,
                'name' => 'postal_code',
                'format' => 'Mandatory'
            ],
            9 => [
                'size' => 9,
                'name' => 'city_code',
                'format' => ''
            ],
            10 => [
                'size' => 9,
                'name' => 'state',
                'format' => ''
            ],
            11 => [
                'size' => 35,
                'name' => 'comunication_number',
                'format' => 'Mandatory'
            ],
            12 => [
                'size' => 66,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '529' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 4,
                'name' => 'total_quantity_cte',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 15,
                'name' => 'total_value_cte',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 328,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ]
];