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

<<<<<<< HEAD
    public function member()
    {      
        $members = $this->memberService->get();
        $payments = $this->memberService->paymentsget();
        $loginuser = auth()->user();

        return view('admin.member.member' , ['loginuser' => $loginuser , 'members' => $members , 'payments' => $payments]);
=======
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
>>>>>>> 7f5c21fcd7517691bc879d18630c57e3418963e2
    }
    
    public function destroy($id) 
    {
        $this->memberService->destroy($id);
        return redirect('/admin/member');
    }


}
