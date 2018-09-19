<?php

namespace Omnipay\AuthorizeNetRecurring\Requests;

class CreateSubscriptionFromProfileRequest extends SubscriptionRequest
{

    public function getData() {
        $subscription = $this->createSubscriptionArray();
        return array(
            'ARBCreateSubscriptionRequest' => array(
                'merchantAuthentication' => array(
                    'name' => $this->getAuthName(),
                    'transactionKey' => $this->getTransactionKey()
                ),
                'refId' => $this->getRefId(),
                'subscription' => $subscription
            )
        );
    }

}