<?php
namespace App\Dao;

use App\Models\Payment;
use App\Contracts\Dao\PaymentDaoInterface;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PaymentsExport;

class PaymentDao implements PaymentDaoInterface
{
    public function store(array $data): void
    {
        Payment::create([
            'member_id'=>$data['member_id'],
            'amount'=>$data['amount'],
            'payment'=>$data['payment'],
            ]);
    }
}
