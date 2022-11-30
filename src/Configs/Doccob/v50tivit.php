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
                'size' => 185,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '550' => [
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
                'size' => 263,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '551' => [
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
                'name' => 'social_reason',
                'format' => ''
            ],
            4 => [
                'size' => 213,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '552' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 10,
                'name' => 'issuing_branch_document',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 1,
                'name' => 'type_billing_document',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 3,
                'name' => 'serie_billing_document',
                'format' => ''
            ],
            5 => [
                'size' => 10,
                'name' => 'number_billing_document',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 8,
                'name' => 'invoice_issue_date',
                'format' => 'Mandatory|DateTime:dd/mm/yyyy'
            ],
            7 => [
                'size' => 8,
                'name' => 'invoice_expiration_date',
                'format' => 'Mandatory|DateTime:dd/mm/yyyy'
            ],
            8 => [
                'size' => 15,
                'name' => 'total_amount_billing_document',
                'format' => 'Mandatory'
            ],
            9 => [
                'size' => 3,
                'name' => 'billing_type',
                'format' => 'Mandatory'
            ],
            10 => [
                'size' => 4,
                'name' => 'percentage_fine_delay',
                'format' => ''
            ],
            11 => [
                'size' => 15,
                'name' => 'value_interest_per_day_delay',
                'format' => ''
            ],
            12 => [
                'size' => 8,
                'name' => 'deadline_payment_discount',
                'format' => 'DateTime:dd/mm/yyyy'
            ],
            13 => [
                'size' => 15,
                'name' => 'discount_amount',
                'format' => ''
            ],
            14 => [
                'size' => 5,
                'name' => 'bank_code',
                'format' => ''
            ],
            15 => [
                'size' => 30,
                'name' => 'bank_name',
                'format' => ''
            ],
            16 => [
                'size' => 4,
                'name' => 'bank_agency_number',
                'format' => ''
            ],
            17 => [
                'size' => 1,
                'name' => 'checking_digit_agency_number',
                'format' => ''
            ],
            18 => [
                'size' => 10,
                'name' => 'current_account_number',
                'format' => ''
            ],
            19 => [
                'size' => 2,
                'name' => 'current_account_checking_digit',
                'format' => ''
            ],
            20 => [
                'size' => 1,
                'name' => 'document_action',
                'format' => ''
            ],
            21 => [
                'size' => 10,
                'name' => 'identification_pre_bill_customer',
                'format' => ''
            ],
            22 => [
                'size' => 20,
                'name' => 'complementary_identification_pre_bill',
                'format' => ''
            ],
            23 => [
                'size' => 5,
                'name' => 'cfop',
                'format' => ''
            ],
            24 => [
                'size' => 9,
                'name' => 'access_key_numeric_code',
                'format' => ''
            ],
            25 => [
                'size' => 45,
                'name' => 'access_key_verifying_digit',
                'format' => ''
            ],
            26 => [
                'size' => 15,
                'name' => 'number_protocol_invoice',
                'format' => ''
            ],
            27 => [
                'size' => 20,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '553' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 15,
                'name' => 'total_amount_icms',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 5,
                'name' => 'icms_rate',
                'format' => ''
            ],
            4 => [
                'size' => 15,
                'name' => 'icms_calculation_base',
                'format' => ''
            ],
            5 => [
                'size' => 15,
                'name' => 'total_amount_iss',
                'format' => ''
            ],
            6 => [
                'size' => 5,
                'name' => 'iss_rate',
                'format' => ''
            ],
            7 => [
                'size' => 15,
                'name' => 'iss_calculation_base',
                'format' => ''
            ],
            8 => [
                'size' => 15,
                'name' => 'tax_replacement_icms_value',
                'format' => ''
            ],
            9 => [
                'size' => 5,
                'name' => 'tax_replacement_icms_rate',
                'format' => ''
            ],
            10 => [
                'size' => 15,
                'name' => 'tax_replacement_icms_calculation_base',
                'format' => ''
            ],
            11 => [
                'size' => 15,
                'name' => 'income_tax_amount',
                'format' => ''
            ],
            12 => [
                'size' => 157,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '555' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 10,
                'name' => 'branch_issuing',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 5,
                'name' => 'knowledge_series',
                'format' => ''
            ],
            4 => [
                'size' => 12,
                'name' => 'knowledge_number',
                'format' => 'Mandatory'
            ],
            5 => [
                'size' => 15,
                'name' => 'freight_value',
                'format' => ''
            ],
            6 => [
                'size' => 8,
                'name' => 'knowledge_emission_date',
                'format' => 'DateTime:dd/mm/yyyy'
            ],
            7 => [
                'size' => 14,
                'name' => 'cnpj_sender',
                'format' => ''
            ],
            8 => [
                'size' => 14,
                'name' => 'cnpj_receiver',
                'format' => ''
            ],
            9 => [
                'size' => 14,
                'name' => 'cnpj_knowledge_issuer',
                'format' => ''
            ],
            10 => [
                'size' => 2,
                'name' => 'shipper_state',
                'format' => ''
            ],
            11 => [
                'size' => 2,
                'name' => 'knowledge_issuing_unit_state',
                'format' => ''
            ],
            12 => [
                'size' => 2,
                'name' => 'destination_state',
                'format' => ''
            ],
            13 => [
                'size' => 10,
                'name' => 'reason_acccount',
                'format' => ''
            ],
            14 => [
                'size' => 2,
                'name' => 'iva_code',
                'format' => ''
            ],
            15 => [
                'size' => 20,
                'name' => 'packing_list_number',
                'format' => ''
            ],
            16 => [
                'size' => 20,
                'name' => 'shipment_sap_number_1',
                'format' => ''
            ],
            17 => [
                'size' => 20,
                'name' => 'shipment_sap_number_2',
                'format' => ''
            ],
            18 => [
                'size' => 20,
                'name' => 'shipment_sap_number_3',
                'format' => ''
            ],
            19 => [
                'size' => 1,
                'name' => 'knowledge_devolution',
                'format' => 'Mandatory'
            ],
            20 => [
                'size' => 86,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '556' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 3,
                'name' => 'serie',
                'format' => ''
            ],
            3 => [
                'size' => 9,
                'name' => 'invoice_number',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 8,
                'name' => 'invoice_date_emission',
                'format' => 'Mandatory|DateTime:dd/mm/yyyy'
            ],
            5 => [
                'size' => 7,
                'name' => 'invoice_weight',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 15,
                'name' => 'invoice_value',
                'format' => 'Mandatory'
            ],
            7 => [
                'size' => 14,
                'name' => 'invoice_issuer_cnpj',
                'format' => ''
            ],
            8 => [
                'size' => 20,
                'name' => 'packing_list_number',
                'format' => ''
            ],
            9 => [
                'size' => 20,
                'name' => 'shipment_sap_number_1',
                'format' => ''
            ],
            10 => [
                'size' => 20,
                'name' => 'shipment_sap_number_2',
                'format' => ''
            ],
            11 => [
                'size' => 20,
                'name' => 'shipment_sap_number_3',
                'format' => ''
            ],
            12 => [
                'size' => 1,
                'name' => 'invoice_return',
                'format' => 'Mandatory'
            ],
            13 => [
                'size' => 140,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '559' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 4,
                'name' => 'total_quantity_billing_documents',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 15,
                'name' => 'total_value_billing_documents',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 258,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ]
];