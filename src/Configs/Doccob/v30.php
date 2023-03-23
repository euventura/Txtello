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
                'size' => 75,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '350' => [
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
                'size' => 153,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '351' => [
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
                'size' => 113,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '352' => [
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
                'name' => 'emission_date',
                'format' => 'Mandatory|Date:dmY'
            ],
            7 => [
                'size' => 8,
                'name' => 'expiration_date',
                'format' => 'Mandatory|Date:dmY'
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
                'size' => 15,
                'name' => 'total_value_icms',
                'format' => 'Mandatory'
            ],
            11 => [
                'size' => 15,
                'name' => 'value_interest_per_day_delay',
                'format' => ''
            ],
            12 => [
                'size' => 8,
                'name' => 'deadline_payment_discount',
                'format' => 'Date:dmY'
            ],
            13 => [
                'size' => 15,
                'name' => 'discount_amount',
                'format' => ''
            ],
            14 => [
                'size' => 35,
                'name' => 'bank_name',
                'format' => 'Mandatory'
            ],
            15 => [
                'size' => 4,
                'name' => 'bank_agency_number',
                'format' => ''
            ],
            16 => [
                'size' => 1,
                'name' => 'checking_digit_agency_number',
                'format' => ''
            ],
            17 => [
                'size' => 10,
                'name' => 'current_account_number',
                'format' => ''
            ],
            18 => [
                'size' => 2,
                'name' => 'checking_digit_current_account',
                'format' => ''
            ],
            19 => [
                'size' => 1,
                'name' => 'document_action',
                'format' => ''
            ],
            20 => [
                'size' => 3,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '353' => [
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
                'format' => 'Date:dmY'
            ],
            7 => [
                'size' => 14,
                'name' => 'sender_cgc',
                'format' => ''
            ],
            8 => [
                'size' => 14,
                'name' => 'receiver_cgc',
                'format' => ''
            ],
            9 => [
                'size' => 14,
                'name' => 'knowledge_issuer_cgc',
                'format' => ''
            ],
            10 => [
                'size' => 75,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '354' => [
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
                'size' => 8,
                'name' => 'invoice_number',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 8,
                'name' => 'invoice_emission_date',
                'format' => 'Mandatory|Date:dmY'
            ],
            5 => [
                'size' => 7,
                'name' => 'invoice_weight',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 15,
                'name' => 'value_merchandise_invoice',
                'format' => 'Mandatory'
            ],
            7 => [
                'size' => 14,
                'name' => 'cgc_invoice_issuer',
                'format' => ''
            ],
            8 => [
                'size' => 112,
                'name' => 'filller',
                'format' => ''
            ]
        ]
    ],
    '355' => [
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
                'size' => 148,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ]
];