<?php

namespace PROActive\API;

/**
 * Payment type, where the source of the money is bank card.
 */
class Card extends AbstractPaymentMethod
{
    public function __construct()
    {
        $this->set('type', 'card');
    }
}
