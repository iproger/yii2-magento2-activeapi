<?php

namespace springimport\yii2\magento2\activeapi\models;

use springimport\yii2\magento2\activeapi\components\ActiveApi;

class QuoteCartManagement extends ActiveApi
{
    const SCENARIO_CUSTOMERS_CARTS = 'customersCarts';

    public $customer_id;

    public function rules()
    {
        return [
            [
                ['customer_id'], 'required',
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
        ];
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_CUSTOMERS_CARTS => ['customer_id'],
        ];
    }

    public function urls()
    {
        return [
            self::SCENARIO_CUSTOMERS_CARTS => 'customers/%s/carts',
        ];
    }
}
