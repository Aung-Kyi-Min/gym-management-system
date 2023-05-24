<?php

namespace App\Services\Admin;

use App\Contracts\Dao\Admin\MemberDaoInterface;
use App\Contracts\Services\Admin\MemberServiceInterface;
use Illuminate\Support\Facades\Mail;
use App\Mail\Expire;
use Carbon\Carbon;


class MemberService implements MemberServiceInterface
{
    /**
     * Member Dao
     */
    private $memberDao;

    /**
     * Class Constructor
     * @param MemberDaoInterface
     * @return void
     */
    public function __construct(MemberDaoInterface $memberDao)
    {
        $this->memberDao = $memberDao;
    }

    /**
     * Show Member
     * @return object
     */
    public function get(): object
    {
        $tdyDate = Carbon::now();
        $members = $this->memberDao->get();
        foreach ($members as $member) {
            if ($member->end_date <= $tdyDate) {
                $this->memberDao->destroy($member->id);
            }
        }
        return $this->memberDao->get();
    }

    /**
     * Show Payment
     * @return object
     */
    public function paymentsget(): object
    {
        return $this->memberDao->paymentsget();
    }

    /**
     * Destroy Member
     * @return void 
     */
    public function destroy($id): void
    {
        Mail::to(request('email'))->send(new Expire());
        $this->memberDao->destroy($id);
    }
}
