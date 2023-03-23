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
                'size' => 225,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '500' => [
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
                'size' => 303,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '501' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 50,
                'name' => 'social_reason',
                'format' => ''
            ],
            3 => [
                'size' => 14,
                'name' => 'cnpj_cgc',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'shipper_state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 15,
                'name' => 'state_registration_tax_substitute',
                'format' => ''
            ],
            6 => [
                'size' => 15,
                'name' => 'municipal_registration',
                'format' => ''
            ],
            7 => [
                'size' => 50,
                'name' => 'address',
                'format' => ''
            ],
            8 => [
                'size' => 35,
                'name' => 'neighborhood',
                'format' => ''
            ],
            9 => [
                'size' => 35,
                'name' => 'city',
                'format' => ''
            ],
            10 => [
                'size' => 9,
                'name' => 'postal_code',
                'format' => 'Mandatory'
            ],
            11 => [
                'size' => 9,
                'name' => 'city_code',
                'format' => ''
            ],
            12 => [
                'size' => 9,
                'name' => 'uf',
                'format' => ''
            ],
            13 => [
                'size' => 8,
                'name' => 'date_shipment_goods',
                'format' => 'Date:dmY'
            ],
            14 => [
                'size' => 4,
                'name' => 'freight_area',
                'format' => ''
            ],
            15 => [
                'size' => 25,
                'name' => 'contact_emergencies',
                'format' => ''
            ],
            16 => [
                'size' => 24,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '502' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 50,
                'name' => 'social_reason',
                'format' => ''
            ],
            3 => [
                'size' => 14,
                'name' => 'cnpj_cgc',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 50,
                'name' => 'address',
                'format' => ''
            ],
            5 => [
                'size' => 35,
                'name' => 'neighborhood',
                'format' => ''
            ],
            6 => [
                'size' => 35,
                'name' => 'city',
                'format' => ''
            ],
            7 => [
                'size' => 9,
                'name' => 'postal_code',
                'format' => 'Mandatory'
            ],
            8 => [
                'size' => 9,
                'name' => 'city_code',
                'format' => ''
            ],
            9 => [
                'size' => 9,
                'name' => 'uf',
                'format' => ''
            ],
            10 => [
                'size' => 35,
                'name' => 'comunication_number',
                'format' => ''
            ],
            11 => [
                'size' => 4,
                'name' => 'freight_area',
                'format' => ''
            ],
            12 => [
                'size' => 67,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '503' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 50,
                'name' => 'social_reason_receiver_name',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 14,
                'name' => 'cnpj_cgc_cpf',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 15,
                'name' => 'suframa_registration',
                'format' => ''
            ],
            6 => [
                'size' => 50,
                'name' => 'address',
                'format' => ''
            ],
            7 => [
                'size' => 35,
                'name' => 'neighborhood',
                'format' => ''
            ],
            8 => [
                'size' => 35,
                'name' => 'city',
                'format' => ''
            ],
            9 => [
                'size' => 9,
                'name' => 'postal_code',
                'format' => 'Mandatory'
            ],
            10 => [
                'size' => 9,
                'name' => 'city_code',
                'format' => ''
            ],
            11 => [
                'size' => 9,
                'name' => 'uf',
                'format' => 'Mandatory'
            ],
            12 => [
                'size' => 35,
                'name' => 'comunication_number',
                'format' => ''
            ],
            13 => [
                'size' => 4,
                'name' => 'country_code',
                'format' => ''
            ],
            14 => [
                'size' => 4,
                'name' => 'freight_area',
                'format' => ''
            ],
            15  => [
                'size' => 1,
                'name' => 'type_recipient_identification',
                'format' => ''
            ],
            16  => [
                'size' => 1,
                'name' => 'type_establishment_destination_merchandise',
                'format' => ''
            ],
            17  => [
                'size' => 31,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '504' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 50,
                'name' => 'social_reason_company_name',
                'format' => ''
            ],
            3 => [
                'size' => 14,
                'name' => 'cnpj_cgc_cpf',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 50,
                'name' => 'address',
                'format' => ''
            ],
            6 => [
                'size' => 35,
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
                'name' => 'uf',
                'format' => ''
            ],
            11 => [
                'size' => 35,
                'name' => 'comunication_number',
                'format' => ''
            ],
            12 => [
                'size' => 4,
                'name' => 'country_code',
                'format' => ''
            ],
            13 => [
                'size' => 4,
                'name' => 'freight_area',
                'format' => ''
            ],
            14 => [
                'size' => 1,
                'name' => 'type_recipient_identification',
                'format' => ''
            ],
            15  => [
                'size' => 1,
                'name' => 'type_establishment_destination_merchandise',
                'format' => ''
            ],
            16  => [
                'size' => 46,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '505' => [
        'map' => [
            1  => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2  => [
                'size' => 3,
                'name' => 'invoice_serie',
                'format' => ''
            ],
            3  => [
                'size' => 9,
                'name' => 'invoice_number',
                'format' => 'Mandatory'
            ],
            4  => [
                'size' => 8,
                'name' => 'emission_date',
                'format' => 'Mandatory|Date:dmY'
            ],
            5  => [
                'size' => 15,
                'name' => 'merchandise_type',
                'format' => 'Mandatory'
            ],
            6  => [
                'size' => 15,
                'name' => 'packaging_type',
                'format' => 'Mandatory'
            ],
            7  => [
                'size' => 7,
                'name' => 'route_code',
                'format' => ''
            ],
            8  => [
                'size' => 1,
                'name' => 'means_transport',
                'format' => ''
            ],
            9  => [
                'size' => 1,
                'name' => 'type_cargo_transportation',
                'format' => ''
            ],
            10  => [
                'size' => 1,
                'name' => 'load_type',
                'format' => ''
            ],
            11  => [
                'size' => 1,
                'name' => 'freight_condition',
                'format' => 'Mandatory'
            ],
            12  => [
                'size' => 8,
                'name' => 'date_shipment_goods',
                'format' => 'Date:dmY'
            ],
            13  => [
                'size' => 10,
                'name' => 'deployment',
                'format' => ''
            ],
            14  => [
                'size' => 1,
                'name' => 'fast_charge_plan',
                'format' => ''
            ],
            15  => [
                'size' => 1,
                'name' => 'type_tax_document',
                'format' => ''
            ],
            16  => [
                'size' => 1,
                'name' => 'bonus_indication',
                'format' => ''
            ],
            17  => [
                'size' => 4,
                'name' => 'cfop',
                'format' => ''
            ],
            18  => [
                'size' => 2,
                'name' => 'uf',
                'format' => ''
            ],
            19  => [
                'size' => 1,
                'name' => 'different_freight_calculation',
                'format' => ''
            ],
            20  => [
                'size' => 10,
                'name' => 'freight_table',
                'format' => ''
            ],
            21  => [
                'size' => 2,
                'name' => 'freight_modality',
                'format' => ''
            ],
            22  => [
                'size' => 20,
                'name' => 'customer_order_identification',
                'format' => ''
            ],
            23  => [
                'size' => 20,
                'name' => 'packing_list_number',
                'format' => ''
            ],
            24  => [
                'size' => 20,
                'name' => 'shipment_sap_number_1',
                'format' => ''
            ],
            25  => [
                'size' => 20,
                'name' => 'shipment_sap_number_2',
                'format' => ''
            ],
            26  => [
                'size' => 20,
                'name' => 'shipment_sap_number_3',
                'format' => ''
            ],
            27  => [
                'size' => 1,
                'name' => 'type_delivery_period',
                'format' => 'Mandatory'
            ],
            28  => [
                'size' => 8,
                'name' => 'initial_delivery_date',
                'format' => 'Date:dmY'
            ],
            29  => [
                'size' => 4,
                'name' => 'initial_delivery_hour',
                'format' => ''
            ],
            30  => [
                'size' => 8,
                'name' => 'final_delivery_date',
                'format' => 'Date:dmY'
            ],
            31  => [
                'size' => 4,
                'name' => 'final_delivery_hour',
                'format' => ''
            ],
            32  => [
                'size' => 9,
                'name' => 'numeric_code_access_key',
                'format' => ''
            ],
            33  => [
                'size' => 45,
                'name' => 'invoice_access_key',
                'format' => ''
            ],
            34  => [
                'size' => 15,
                'name' => 'invoice_number_protocol',
                'format' => ''
            ],
            35  => [
                'size' => 1,
                'name' => 'document_action',
                'format' => ''
            ],
            36  => [
                'size' => 21,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '506' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 8,
                'name' => 'total_quantity_volumes',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 9,
                'name' => 'total_gross_weight_invoice',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 9,
                'name' => 'total_net_weight_invoice',
                'format' => ''
            ],
            5 => [
                'size' => 10,
                'name' => 'weight_density',
                'format' => ''
            ],
            6 => [
                'size' => 10,
                'name' => 'weight_cubated',
                'format' => ''
            ],
            7 => [
                'size' => 1,
                'name' => 'icms_incidence',
                'format' => 'Mandatory'
            ],
            8 => [
                'size' => 1,
                'name' => 'insurance_effected',
                'format' => 'Mandatory'
            ],
            9 => [
                'size' => 15,
                'name' => 'amount_to_be_charged_customer',
                'format' => ''
            ],
            10 => [
                'size' => 15,
                'name' => 'total_value_invoice',
                'format' => 'Mandatory'
            ],
            11  => [
                'size' => 15,
                'name' => 'total_amount_insurance',
                'format' => ''
            ],
            12  => [
                'size' => 15,
                'name' => 'total_value_discount',
                'format' => ''
            ],
            13  => [
                'size' => 15,
                'name' => 'total_amount_other_associated_expenses',
                'format' => ''
            ],
            14  => [
                'size' => 15,
                'name' => 'icms_calculation_base',
                'format' => ''
            ],
            15  => [
                'size' => 15,
                'name' => 'total_amount_icms',
                'format' => ''
            ],
            16  => [
                'size' => 15,
                'name' => 'icms_calculation_basis_tax_replacement',
                'format' => ''
            ],
            17  => [
                'size' => 15,
                'name' => 'total_amount_icms_tax_replacement',
                'format' => ''
            ],
            18  => [
                'size' => 15,
                'name' => 'value_withholding_icms',
                'format' => ''
            ],
            19  => [
                'size' => 15,
                'name' => 'total_amount_import_tax',
                'format' => ''
            ],
            20  => [
                'size' => 15,
                'name' => 'total_amount_ipi',
                'format' => ''
            ],
            21  => [
                'size' => 15,
                'name' => 'total_amount_pis',
                'format' => ''
            ],
            22  => [
                'size' => 15,
                'name' => 'total_amount_cofins',
                'format' => ''
            ],
            23  => [
                'size' => 15,
                'name' => 'calculated_value_freight',
                'format' => ''
            ],
            24  => [
                'size' => 13,
                'name' => 'total_amount_freight_icms',
                'format' => ''
            ],
            25  => [
                'size' => 13,
                'name' => 'total_amount_icms_freight_taxreplacement',
                'format' => ''
            ],
            26  => [
                'size' => 13,
                'name' => 'total_amount_freight_iss',
                'format' => ''
            ],
            27  => [
                'size' => 5,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '507' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 8,
                'name' => 'total_quantity_volumes',
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
                'name' => 'total_value_freight',
                'format' => 'Mandatory'
            ],
            7 => [
                'size' => 15,
                'name' => 'freight_value_by_weight_volume',
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
                'name' => 'sec_cat_value',
                'format' => ''
            ],
            11  => [
                'size' => 15,
                'name' => 'itr_gris_value',
                'format' => ''
            ],
            12  => [
                'size' => 15,
                'name' => 'dispatch_value',
                'format' => ''
            ],
            13  => [
                'size' => 15,
                'name' => 'toll_value',
                'format' => ''
            ],
            14  => [
                'size' => 15,
                'name' => 'ademe_gris_value',
                'format' => ''
            ],
            15  => [
                'size' => 15,
                'name' => 'total_amount_extra_expenses',
                'format' => ''
            ],
            16  => [
                'size' => 15,
                'name' => 'calculation_basis_freight_icms_calculation',
                'format' => ''
            ],
            17  => [
                'size' => 5,
                'name' => 'freight_icms_rate_percentage',
                'format' => ''
            ],
            18  => [
                'size' => 15,
                'name' => 'value_freight_icms',
                'format' => ''
            ],
            19  => [
                'size' => 1,
                'name' => 'tax_replacement',
                'format' => 'Mandatory'
            ],
            20  => [
                'size' => 15,
                'name' => 'icms_calculation_basis_tax_replacement',
                'format' => ''
            ],
            21  => [
                'size' => 5,
                'name' => 'icms_rate_percentage_tax_replacement',
                'format' => ''
            ],
            22  => [
                'size' => 15,
                'name' => 'total_value_icms_tax_replacement',
                'format' => ''
            ],
            23  => [
                'size' => 15,
                'name' => 'iss_calculation_basis',
                'format' => ''
            ],
            24  => [
                'size' => 5,
                'name' => 'iss_tax_percentage',
                'format' => ''
            ],
            25  => [
                'size' => 15,
                'name' => 'total_value_iss',
                'format' => ''
            ],
            26  => [
                'size' => 15,
                'name' => 'total_value_ir',
                'format' => ''
            ],
            27  => [
                'size' => 3,
                'name' => 'fiscal_right',
                'format' => ''
            ],
            28  => [
                'size' => 4,
                'name' => 'tax_type',
                'format' => ''
            ],
            29  => [
                'size' => 2,
                'name' => 'uf_icms_freight_generator',
                'format' => ''
            ],
            30  => [
                'size' => 1,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '508' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 50,
                'name' => 'brand_transported_packages',
                'format' => ''
            ],
            3 => [
                'size' => 50,
                'name' => 'numbering_transported_volumes',
                'format' => ''
            ],
            4 => [
                'size' => 50,
                'name' => 'number_sealing_wax',
                'format' => ''
            ],
            5 => [
                'size' => 167,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '509' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 14,
                'name' => 'cnpj_invoice_issuer_1',
                'format' => ''
            ],
            3 => [
                'size' => 50,
                'name' => 'social_reason_1',
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
                'name' => 'cnpj_invoice_issuer_2',
                'format' => ''
            ],
            7 => [
                'size' => 50,
                'name' => 'social_reason_2',
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
                'name' => 'cnpj_invoice_issuer_3',
                'format' => ''
            ],
            11  => [
                'size' => 50,
                'name' => 'social_reason_3',
                'format' => ''
            ],
            12  => [
                'size' => 3,
                'name' => 'invoice_serie_3',
                'format' => ''
            ],
            13  => [
                'size' => 9,
                'name' => 'invoice_number_3',
                'format' => ''
            ],
            14  => [
                'size' => 10,
                'name' => 'redispatch_knowledge_issuing_branch',
                'format' => ''
            ],
            15  => [
                'size' => 5,
                'name' => 'redispatch_knowledge_serie',
                'format' => ''
            ],
            16  => [
                'size' => 12,
                'name' => 'redispatch_knowledge_number',
                'format' => ''
            ],
            17  => [
                'size' => 14,
                'name' => 'redispatch_cnpj_contracting_carrier',
                'format' => ''
            ],
            18  => [
                'size' => 48,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '511' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 8,
                'name' => 'volumes_quantity',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 15,
                'name' => 'kind_item_packaging',
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
            ],
            6 => [
                'size' => 4,
                'name' => 'cfop_item',
                'format' => ''
            ],
            7 => [
                'size' => 20,
                'name' => 'batch_item',
                'format' => ''
            ],
            8 => [
                'size' => 8,
                'name' => 'expiration_date_item',
                'format' => 'Date:dmY'
            ],
            9 => [
                'size' => 50,
                'name' => 'brand_transported_packages',
                'format' => ''
            ],
            10 => [
                'size' => 50,
                'name' => 'numbering_transported_volumes',
                'format' => ''
            ],
            11  => [
                'size' => 50,
                'name' => 'number_sealing_wax',
                'format' => ''
            ],
            12  => [
                'size' => 20,
                'name' => 'customer_order_identification',
                'format' => ''
            ],
            13  => [
                'size' => 22,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '513' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 50,
                'name' => 'social_reason',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 14,
                'name' => 'cnpj',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 50,
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
                'name' => 'uf',
                'format' => 'Mandatory'
            ],
            11  => [
                'size' => 35,
                'name' => 'comunication_number',
                'format' => ''
            ],
            12  => [
                'size' => 56,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '514' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 50,
                'name' => 'social_reason',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 14,
                'name' => 'cnpj',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 50,
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
                'name' => 'uf',
                'format' => 'Mandatory'
            ],
            11  => [
                'size' => 35,
                'name' => 'comunication_number',
                'format' => ''
            ],
            12  => [
                'size' => 4,
                'name' => 'freight_area',
                'format' => ''
            ],
            13  => [
                'size' => 52,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '515' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 50,
                'name' => 'social_reason',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 14,
                'name' => 'cnpj',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'state_registration',
                'format' => ''
            ],
            5 => [
                'size' => 50,
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
                'name' => 'uf',
                'format' => 'Mandatory'
            ],
            11  => [
                'size' => 35,
                'name' => 'comunication_number',
                'format' => ''
            ],
            12  => [
                'size' => 56,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ],
    '519' => [
        'map' => [
            1 => [
                'size' => 3,
                'name' => 'identifier',
                'format' => 'Mandatory'
            ],
            2 => [
                'size' => 15,
                'name' => 'total_value_invoices',
                'format' => 'Mandatory'
            ],
            3 => [
                'size' => 15,
                'name' => 'total_gross_weight_invoices',
                'format' => 'Mandatory'
            ],
            4 => [
                'size' => 15,
                'name' => 'total_amount_volumes',
                'format' => 'Mandatory'
            ],
            5 => [
                'size' => 10,
                'name' => 'number_of_invoices',
                'format' => ''
            ],
            6 => [
                'size' => 262,
                'name' => 'filler',
                'format' => ''
            ]
        ]
    ]
];