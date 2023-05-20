<?php
namespace App\Services;

use App\Contracts\Dao\PaymentDaoInterface;
use App\Contracts\Services\PaymentServiceInterface;


class PaymentService implements PaymentServiceInterface
{
    private $paymentDao;

    public function __construct(PaymentDaoInterface $paymentDao)
    {
        $this->paymentDao = $paymentDao;
    }

    public function store(): void
    {
        $this->paymentDao->store();
    }

}
