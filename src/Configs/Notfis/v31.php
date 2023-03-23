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
                'format' => 'Mandatory|Date:dmY'
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
                'size' => 145,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '310' => [
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
                'size' => 223,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '311' => [
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
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            4 => [
                'size' => 40,
                'name' => 'address',
                'format' => ''
            ],
            5 => [
                'size' => 35,
                'name' => 'city',
                'format' => ''
            ],
            6 => [
                'size' => 9,
                'name' => 'postal_code',
                'format' => ''
            ],
            7 => [
                'size' => 9,
                'name' => 'state',
                'format' => ''
            ],
            8 => [
                'size' => 8,
                'name' => 'boarding_date',
                'format' => 'Mandatory|Date:dmY'
            ],
            9 => [
                'size' => 40,
                'name' => 'shipment_company',
                'format' => ''
            ],
            10 => [
                'size' => 67,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '312' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 40,
                'name' => 'social_reason',
                'format' => ''
            ],
            3 => [
                'size' => 14,
                'name' => 'document',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 40,
                'name' => 'address',
                'format' => ''
            ],
            6 => [
                'size' => 20,
                'name' => 'neighborhood',
                'format' => ''
            ],
            7 => [
                'size' => 35,
                'name' => 'city',
                'format' => ''
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
                'size' => 4,
                'name' => 'freight_area',
                'format' => ''
            ],
            12 => [
                'size' => 35,
                'name' => 'communication_number',
                'format' => ''
            ],
            13 => [
                'size' => 1,
                'name' => 'receiver_identification_type',
                'format' => ''
            ],
            14 => [
                'size' => 6,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '313' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 15,
                'name' => 'pack_list_number',
                'format' => ''
            ],
            3 => [
                'size' => 7,
                'name' => 'route_code',
                'format' => ''
            ],
            4 => [
                'size' => 1,
                'name' => 'transportation',
                'format' => ''
            ],
            5 => [
                'size' => 1,
                'name' => 'transportation_type',
                'format' => ''
            ],
            6 => [
                'size' => 1,
                'name' => 'load_type',
                'format' => ''
            ],
            7 => [
                'size' => 1,
                'name' => 'shipping_condition',
                'format' => 'Mandatory'
            ],
            8 => [
                'size' => 3,
                'name' => 'invoice_serie',
                'format' => ''
            ],
            9 => [
                'size' => 8,
                'name' => 'invoice_number',
                'format' => 'Mandatory'
            ],
            10 => [
                'size' => 8,
                'name' => 'emission_date',
                'format' => 'Mandatory|Date:dmY'
            ],
            11 => [
                'size' => 15,
                'name' => 'type_goods',
                'format' => 'Mandatory'
            ],
            12 => [
                'size' => 15,
                'name' => 'kind_packaging',
                'format' => 'Mandatory'
            ],
            13 => [
                'size' => 7,
                'name' => 'quantity_volumes',
                'format' => 'Mandatory'
            ],
            14 => [
                'size' => 15,
                'name' => 'total_value',
                'format' => 'Mandatory'
            ],
            15  => [
                'size' => 7,
                'name' => 'total_weight',
                'format' => 'Mandatory'
            ],
            16  => [
                'size' => 5,
                'name' => 'cubed_weight',
                'format' => ''
            ],
            17  => [
                'size' => 1,
                'name' => 'icms_type',
                'format' => 'Mandatory'
            ],
            18  => [
                'size' => 1,
                'name' => 'secure',
                'format' => 'Mandatory'
            ],
            19  => [
                'size' => 15,
                'name' => 'secure_value',
                'format' => ''
            ],
            20  => [
                'size' => 15,
                'name' => 'charged_value',
                'format' => ''
            ],
            21  => [
                'size' => 7,
                'name' => 'truck_plate',
                'format' => ''
            ],
            22  => [
                'size' => 1,
                'name' => 'fast_charge',
                'format' => ''
            ],
            23  => [
                'size' => 15,
                'name' => 'freight_value_weight',
                'format' => ''
            ],
            24  => [
                'size' => 15,
                'name' => 'valorem_value',
                'format' => ''
            ],
            25  => [
                'size' => 15,
                'name' => 'tax_value',
                'format' => ''
            ],
            26  => [
                'size' => 15,
                'name' => 'tax_shipping',
                'format' => ''
            ],
            27  => [
                'size' => 1,
                'name' => 'document_action',
                'format' => ''
            ],
            28  => [
                'size' => 12,
                'name' => 'icms_value',
                'format' => ''
            ],
            29  => [
                'size' => 12,
                'name' => 'icms_value_withheld',
                'format' => ''
            ],
            30  => [
                'size' => 1,
                'name' => 'bonus',
                'format' => ''
            ],
            31  => [
                'size' => 44,
                'name' => 'cte_key',
                'format' => ''
            ]
        ]
    ],
    '333' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 4,
                'name' => 'tax_operation_code',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 1,
                'name' => 'type_delivery_period',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 8,
                'name' => 'initial_delivery_date',
                'format' => ''
            ],
            5 => [
                'size' => 4,
                'name' => 'delivery_start_time',
                'format' => ''
            ],
            6 => [
                'size' => 8,
                'name' => 'final_delivery_date',
                'format' => ''
            ],
            7 => [
                'size' => 4,
                'name' => 'delivery_start_time',
                'format' => ''
            ],
            8 => [
                'size' => 15,
                'name' => 'landing_place',
                'format' => ''
            ],
            9 => [
                'size' => 1,
                'name' => 'differentiated_freight_calculation',
                'format' => 'Mandatory'
            ],
            10 => [
                'size' => 10,
                'name' => 'freight_price_table',
                'format' => ''
            ],
            11 => [
                'size' => 26,
                'name' => 'tiein_sale_1',
                'format' => ''
            ],
            12 => [
                'size' => 26,
                'name' => 'tiein_sale_2',
                'format' => ''
            ],
            13 => [
                'size' => 26,
                'name' => 'tiein_sale_3',
                'format' => ''
            ],
            14 => [
                'size' => 26,
                'name' => 'tiein_sale_4',
                'format' => ''
            ],
            15  => [
                'size' => 26,
                'name' => 'tiein_sale_5',
                'format' => ''
            ],
            16  => [
                'size' => 15,
                'name' => 'additional_transport_expenses',
                'format' => ''
            ],
            17  => [
                'size' => 5,
                'name' => 'type_transport_vehicle',
                'format' => ''
            ],
            18  => [
                'size' => 10,
                'name' => 'filial_cte_contractor',
                'format' => ''
            ],
            19  => [
                'size' => 5,
                'name' => 'serie_cte_contractor',
                'format' => ''
            ],
            20  => [
                'size' => 12,
                'name' => 'number_cte_contractor',
                'format' => ''
            ],
            21  => [
                'size' => 5,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '314' => [
        'map' => [
            1  => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2  => [
                'size' => 7,
                'name' => 'volume_quantity',
                'format' => 'Mandatory'
            ],
            3  => [
                'size' => 15,
                'name' => 'packaging_type',
                'format' => 'Mandatory'
            ],
            4  => [
                'size' => 30,
                'name' => 'invoice_merchandise',
                'format' => 'Mandatory'
            ],
            5  => [
                'size' => 7,
                'name' => 'volume_quantity',
                'format' => ''
            ],
            6  => [
                'size' => 15,
                'name' => 'packaging_type',
                'format' => ''
            ],
            7  => [
                'size' => 30,
                'name' => 'invoice_merchandise',
                'format' => ''
            ],
            8  => [
                'size' => 7,
                'name' => 'volume_quantity',
                'format' => ''
            ],
            9  => [
                'size' => 15,
                'name' => 'packaging_type',
                'format' => ''
            ],
            10  => [
                'size' => 30,
                'name' => 'invoice_merchandise',
                'format' => ''
            ],
            11  => [
                'size' => 7,
                'name' => 'volume_quantity',
                'format' => ''
            ],
            12  => [
                'size' => 15,
                'name' => 'packaging_type',
                'format' => ''
            ],
            13  => [
                'size' => 30,
                'name' => 'invoice_merchandise',
                'format' => ''
            ],
            14  => [
                'size' => 29,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '315' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 40,
                'name' => 'social_reason',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 14,
                'name' => 'cgc',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 40,
                'name' => 'address',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 20,
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
                'format' => 'Mandatory'
            ],
            11  => [
                'size' => 35,
                'name' => 'comunication_number',
                'format' => ''
            ],
            12  => [
                'size' => 11,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '316' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 40,
                'name' => 'social_reason',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 14,
                'name' => 'cgc',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 40,
                'name' => 'address',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 20,
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
                'format' => 'Mandatory'
            ],
            11  => [
                'size' => 4,
                'name' => 'freight_area',
                'format' => ''
            ],
            12  => [
                'size' => 35,
                'name' => 'comunication_number',
                'format' => ''
            ],
            13  => [
                'size' => 7,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '317' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 40,
                'name' => 'social_reason',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 14,
                'name' => 'cgc',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 40,
                'name' => 'address',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 20,
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
                'format' => 'Mandatory'
            ],
            11  => [
                'size' => 35,
                'name' => 'comunication_number',
                'format' => ''
            ],
            12  => [
                'size' => 11,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '318' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 15,
                'name' => 'invoices_total_value',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 15,
                'name' => 'invoices_total_weight',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'total_cubed_weight',
                'format' => ''
            ],
            5 => [
                'size' => 15,
                'name' => 'total_quantity_volumes',
                'format' => 'Mandatory'
            ],
            6 => [
                'size' => 15,
                'name' => 'invoice_total_value',
                'format' => ''
            ],
            7 => [
                'size' => 15,
                'name' => 'total_secure_value',
                'format' => ''
            ],
            8 => [
                'size' => 147,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ]
];