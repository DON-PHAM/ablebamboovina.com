<?php
namespace App\Repositories;

use App\Models\PaymentDetail;

class PaymentDetailRepository extends BaseRepository
{
    protected $payment;
    public function __construct(PaymentDetail $payment)
    {
        parent::__construct($payment);
    }

}
