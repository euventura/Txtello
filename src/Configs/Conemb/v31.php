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
                'size' => 585,
                'name' => 'filler',
                'format' => 'Mandatory'
            ]
        ]
    ],
    '320' => [
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
                'size' => 663,
                'name' => 'filler',
                'format' => 'Mandatory'
            ]
        ]
    ],
    '321' => [
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
                'size' => 623,
                'name' => 'filler',
                'format' => 'Mandatory'
            ]
        ]
    ],
    '322' => [
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
                'format' => ''
            ],
            4 => [
                'size' => 12,
                'name' => 'cte_number',
                'format' => 'Mandatory'
            ],
            5 => [
                'size' => 8,
                'name' => 'emission_date',
                'format' => 'Mandatory|Date:dmY'
            ],
            6 => [
                'size' => 1,
                'name' => 'freight_condition',
                'format' => 'Mandatory'
            ],
            7 => [
                'size' => 7,
                'name' => 'transported_weight',
                'format' => 'Mandatory'
            ],
            8 => [
                'size' => 15,
                'name' => 'total_value_freight',
                'format' => 'Mandatory'
            ],
            9 => [
                'size' => 15,
                'name' => 'calculation_base_icms',
                'format' => 'Mandatory'
            ],
            10 => [
                'size' => 4,
                'name' => 'icms_rate',
                'format' => 'Mandatory'
            ],
            11 => [
                'size' => 15,
                'name' => 'icms_value',
                'format' => 'Mandatory'
            ],
            12 => [
                'size' => 15,
                'name' => 'freight_value_perweight',
                'format' => 'Mandatory'
            ],
            13 => [
                'size' => 15,
                'name' => 'freight_value',
                'format' => 'Mandatory'
            ],
            14 => [
                'size' => 15,
                'name' => 'sec_cat_value',
                'format' => ''
            ],
            15 => [
                'size' => 15,
                'name' => 'itr_value',
                'format' => ''
            ],
            16 => [
                'size' => 15,
                'name' => 'dispatch_value',
                'format' => ''
            ],
            17 => [
                'size' => 15,
                'name' => 'toll_value',
                'format' => ''
            ],
            18 => [
                'size' => 15,
                'name' => 'ademe_value',
                'format' => ''
            ],
            19 => [
                'size' => 1,
                'name' => 'tax_replacement',
                'format' => 'Mandatory'
            ],
            20 => [
                'size' => 3,
                'name' => 'operation_nature',
                'format' => 'Mandatory'
            ],
            21 => [
                'size' => 14,
                'name' => 'cte_issuer_cgc',
                'format' => 'Mandatory'
            ],
            22 => [
                'size' => 14,
                'name' => 'shipper_cgc',
                'format' => 'Mandatory'
            ],
            23 => [
                'size' => 3,
                'name' => 'invoice_serie_1',
                'format' => ''
            ],
            24 => [
                'size' => 8,
                'name' => 'invoice_number_1',
                'format' => 'Mandatory'
            ],
            25 => [
                'size' => 3,
                'name' => 'invoice_serie_2',
                'format' => ''
            ],
            26 => [
                'size' => 8,
                'name' => 'invoice_number_2',
                'format' => ''
            ],
            27 => [
                'size' => 3,
                'name' => 'invoice_serie_3',
                'format' => ''
            ],
            28 => [
                'size' => 8,
                'name' => 'invoice_number_3',
                'format' => ''
            ],
            29 => [
                'size' => 3,
                'name' => 'invoice_serie_4',
                'format' => ''
            ],
            30 => [
                'size' => 8,
                'name' => 'invoice_number_4',
                'format' => ''
            ],
            31 => [
                'size' => 3,
                'name' => 'invoice_serie_5',
                'format' => ''
            ],
            32 => [
                'size' => 8,
                'name' => 'invoice_number_5',
                'format' => ''
            ],
            33 => [
                'size' => 3,
                'name' => 'invoice_serie_6',
                'format' => ''
            ],
            34 => [
                'size' => 8,
                'name' => 'invoice_number_6',
                'format' => ''
            ],
            35 => [
                'size' => 3,
                'name' => 'invoice_serie_7',
                'format' => ''
            ],
            36 => [
                'size' => 8,
                'name' => 'invoice_number_7',
                'format' => ''
            ],
            37 => [
                'size' => 3,
                'name' => 'invoice_serie_8',
                'format' => ''
            ],
            38 => [
                'size' => 8,
                'name' => 'invoice_number_8',
                'format' => ''
            ],
            39 => [
                'size' => 3,
                'name' => 'invoice_serie_9',
                'format' => ''
            ],
            40 => [
                'size' => 8,
                'name' => 'invoice_number_9',
                'format' => ''
            ],
            41 => [
                'size' => 3,
                'name' => 'invoice_serie_10',
                'format' => ''
            ],
            42 => [
                'size' => 8,
                'name' => 'invoice_number_10',
                'format' => ''
            ],
            43 => [
                'size' => 3,
                'name' => 'invoice_serie_11',
                'format' => ''
            ],
            44 => [
                'size' => 8,
                'name' => 'invoice_number_11',
                'format' => ''
            ],
            45 => [
                'size' => 3,
                'name' => 'invoice_serie_12',
                'format' => ''
            ],
            46 => [
                'size' => 8,
                'name' => 'invoice_number_12',
                'format' => ''
            ],
            47 => [
                'size' => 3,
                'name' => 'invoice_serie_13',
                'format' => ''
            ],
            48 => [
                'size' => 8,
                'name' => 'invoice_number_13',
                'format' => ''
            ],
            49 => [
                'size' => 3,
                'name' => 'invoice_serie_14',
                'format' => ''
            ],
            50 => [
                'size' => 8,
                'name' => 'invoice_number_14',
                'format' => ''
            ],
            51 => [
                'size' => 3,
                'name' => 'invoice_serie_15',
                'format' => ''
            ],
            52 => [
                'size' => 8,
                'name' => 'invoice_number_15',
                'format' => ''
            ],
            53 => [
                'size' => 3,
                'name' => 'invoice_serie_16',
                'format' => ''
            ],
            54 => [
                'size' => 8,
                'name' => 'invoice_number_16',
                'format' => ''
            ],
            55 => [
                'size' => 3,
                'name' => 'invoice_serie_17',
                'format' => ''
            ],
            56 => [
                'size' => 8,
                'name' => 'invoice_number_17',
                'format' => ''
            ],
            57 => [
                'size' => 3,
                'name' => 'invoice_serie_18',
                'format' => ''
            ],
            58 => [
                'size' => 8,
                'name' => 'invoice_number_18',
                'format' => ''
            ],
            59 => [
                'size' => 3,
                'name' => 'invoice_serie_19',
                'format' => ''
            ],
            60 => [
                'size' => 8,
                'name' => 'invoice_number_19',
                'format' => ''
            ],
            61 => [
                'size' => 3,
                'name' => 'invoice_serie_20',
                'format' => ''
            ],
            62 => [
                'size' => 8,
                'name' => 'invoice_number_20',
                'format' => ''
            ],
            63 => [
                'size' => 3,
                'name' => 'invoice_serie_21',
                'format' => ''
            ],
            64 => [
                'size' => 8,
                'name' => 'invoice_number_21',
                'format' => ''
            ],
            65 => [
                'size' => 3,
                'name' => 'invoice_serie_22',
                'format' => ''
            ],
            66 => [
                'size' => 8,
                'name' => 'invoice_number_22',
                'format' => ''
            ],
            67 => [
                'size' => 3,
                'name' => 'invoice_serie_23',
                'format' => ''
            ],
            68 => [
                'size' => 8,
                'name' => 'invoice_number_23',
                'format' => ''
            ],
            69 => [
                'size' => 3,
                'name' => 'invoice_serie_24',
                'format' => ''
            ],
            70 => [
                'size' => 8,
                'name' => 'invoice_number_24',
                'format' => ''
            ],
            71 => [
                'size' => 3,
                'name' => 'invoice_serie_25',
                'format' => ''
            ],
            72 => [
                'size' => 8,
                'name' => 'invoice_number_25',
                'format' => ''
            ],
            73 => [
                'size' => 3,
                'name' => 'invoice_serie_26',
                'format' => ''
            ],
            74 => [
                'size' => 8,
                'name' => 'invoice_number_26',
                'format' => ''
            ],
            75 => [
                'size' => 3,
                'name' => 'invoice_serie_27',
                'format' => ''
            ],
            76 => [
                'size' => 8,
                'name' => 'invoice_number_27',
                'format' => ''
            ],
            77 => [
                'size' => 3,
                'name' => 'invoice_serie_28',
                'format' => ''
            ],
            78 => [
                'size' => 8,
                'name' => 'invoice_number_28',
                'format' => ''
            ],
            79 => [
                'size' => 3,
                'name' => 'invoice_serie_29',
                'format' => ''
            ],
            80 => [
                'size' => 8,
                'name' => 'invoice_number_29',
                'format' => ''
            ],
            81 => [
                'size' => 3,
                'name' => 'invoice_serie_30',
                'format' => ''
            ],
            82 => [
                'size' => 8,
                'name' => 'invoice_number_30',
                'format' => ''
            ],
            83 => [
                'size' => 3,
                'name' => 'invoice_serie_31',
                'format' => ''
            ],
            84 => [
                'size' => 8,
                'name' => 'invoice_number_31',
                'format' => ''
            ],
            85 => [
                'size' => 3,
                'name' => 'invoice_serie_32',
                'format' => ''
            ],
            86 => [
                'size' => 8,
                'name' => 'invoice_number_32',
                'format' => ''
            ],
            87 => [
                'size' => 3,
                'name' => 'invoice_serie_33',
                'format' => ''
            ],
            88 => [
                'size' => 8,
                'name' => 'invoice_number_33',
                'format' => ''
            ],
            89 => [
                'size' => 3,
                'name' => 'invoice_serie_34',
                'format' => ''
            ],
            90 => [
                'size' => 8,
                'name' => 'invoice_number_34',
                'format' => ''
            ],
            91 => [
                'size' => 3,
                'name' => 'invoice_serie_35',
                'format' => ''
            ],
            92 => [
                'size' => 8,
                'name' => 'invoice_number_35',
                'format' => ''
            ],
            93 => [
                'size' => 3,
                'name' => 'invoice_serie_36',
                'format' => ''
            ],
            94 => [
                'size' => 8,
                'name' => 'invoice_number_36',
                'format' => ''
            ],
            95 => [
                'size' => 3,
                'name' => 'invoice_serie_37',
                'format' => ''
            ],
            96 => [
                'size' => 8,
                'name' => 'invoice_number_37',
                'format' => ''
            ],
            97 => [
                'size' => 3,
                'name' => 'invoice_serie_38',
                'format' => ''
            ],
            98 => [
                'size' => 8,
                'name' => 'invoice_number_38',
                'format' => ''
            ],
            99 => [
                'size' => 3,
                'name' => 'invoice_serie_39',
                'format' => ''
            ],
            100 => [
                'size' => 8,
                'name' => 'invoice_number_39',
                'format' => ''
            ],
            101 => [
                'size' => 3,
                'name' => 'invoice_serie_40',
                'format' => ''
            ],
            102 => [
                'size' => 8,
                'name' => 'invoice_number_40',
                'format' => ''
            ],
            103 => [
                'size' => 1,
                'name' => 'document_action',
                'format' => ''
            ],
            104 => [
                'size' => 1,
                'name' => 'document_type',
                'format' => ''
            ],
            105 => [
                'size' => 1,
                'name' => 'continuity_indication',
                'format' => ''
            ],
            106 => [
                'size' => 5,
                'name' => 'filler',
                'format' => 'Mandatory'
            ]
        ]
    ],
    '329' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 5,
                'name' => 'transportation_type',
                'format' => ''
            ],
            3 => [
                'size' => 15,
                'name' => 'total_extra_expenses',
                'format' => ''
            ],
            4 => [
                'size' => 15,
                'name' => 'total_value_iss',
                'format' => ''
            ],
            5 => [
                'size' => 10,
                'name' => 'knowledge_issuing_filial',
                'format' => ''
            ],
            6 => [
                'size' => 5,
                'name' => 'knowledge_issuing_serie',
                'format' => ''
            ],
            7 => [
                'size' => 12,
                'name' => 'knowledge_issuing_number',
                'format' => ''
            ],
            8 => [
                'size' => 615,
                'name' => 'filler',
                'format' => 'Mandatory'
            ]
        ]
    ],
    '323' => [
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
                'size' => 658,
                'name' => 'filler',
                'format' => 'Mandatory'
            ]
        ]
    ]
];