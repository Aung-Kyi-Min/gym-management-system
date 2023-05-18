<?php
namespace App\Services\Admin;

use App\Contracts\Dao\Admin\InstructorDaoInterface;
use App\Contracts\Dao\PaymentDaoInterface;
use App\Contracts\Services\Admin\InstructorServiceInterface;
use App\Contracts\Services\PaymentServiceInterface;
use Maatwebsite\Excel\Excel;
use App\Exports\InstructorsExport;

class PaymentService implements PaymentServiceInterface
{
    private $paymentDao;

    public function __construct(PaymentDaoInterface $paymentDao)
    {
        $this->paymentDao = $paymentDao;
    }

    public function store(array $data): void
    {
        $this->paymentDao->store($data);
    }

}
