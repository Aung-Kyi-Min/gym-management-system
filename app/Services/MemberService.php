<?php
namespace App\Services;

use App\Contracts\Dao\MemberDaoInterface;
use App\Contracts\Services\MemberServiceInterface;

class MemberService implements MemberServiceInterface
{
    private $memberDao;

    public function __construct(MemberDaoInterface $memberDao)
    {
        $this->memberDao = $memberDao;
    }

    public function store(): void
    {
        $this->memberDao->store();
    }

}
