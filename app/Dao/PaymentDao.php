<?php
namespace App\Dao;

use App\Models\Payment;
use App\Contracts\Dao\PaymentDaoInterface;
use App\Models\Member;

class PaymentDao implements PaymentDaoInterface
{
    //public function store(array $data): void
    //{
    //    Payment::create([
    //        'member_id'=>$data['member_id'],
    //        'amount'=>$data['amount'],
    //        'payment'=>$data['payment'],
    //        ]);
    //}
    public function store(): void
    {
        $payment = new Payment;
        $member = new Member();
        $payment->member_id = $member->id;
        $payment->amount = request('price');
        $payment->payment = request('payment');
        $payment->save();
    }
}
