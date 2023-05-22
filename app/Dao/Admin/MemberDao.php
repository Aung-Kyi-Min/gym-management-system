<?php

namespace App\Dao\Admin;

use App\Models\Member;
use App\Models\Payment;
use App\Contracts\Dao\Admin\MemberDaoInterface;

class MemberDao implements MemberDaoInterface
{
    /**
     * Show Member
     * @return object
    */
    public function get(): object
    {   
        return Member::paginate(5);
    }

    /**
     * Show Payment
     * @return object
    */

    public function paymentsget(): object
    {
        return Payment::paginate(5);
    }

    /**
     * Destroy Member
     * @return void 
    */
    public function destroy($id) : void
    {
        $member = Member::findOrFail($id);
        $member->delete();
    }
}
