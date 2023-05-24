<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\Services\Admin\MemberServiceInterface;

class MemberController extends Controller
{
    private $memberService;
 
    /**
      * Create a new controller instance.
      * @param MemberInterface $taskServiceInterface
      * @return void
      */
 
    public function __construct(MemberServiceInterface $memberServiceInterface) 
    {
       $this->memberService = $memberServiceInterface;
    }

    public function member(Request $request)
    {
        $search = $request->input('search', ''); // Define and assign a value to $search
        
        $members = $this->memberService->search($search);
        $payments = $this->memberService->paymentsget();
        $loginuser = auth()->user();
        
        return view('admin.member.member', [
            'loginuser' => $loginuser,
            'members' => $members,
            'payments' => $payments,
            'search' => $search
        ]);
    }
    
    public function destroy($id) 
    {
        $this->memberService->destroy($id);
        return redirect('/admin/member');
    }


}
