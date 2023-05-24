<?php
namespace App\Http\Controllers\Admin;


use Carbon\Carbon;
use App\Models\User;
use App\Models\Member;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserProfileEditRequest;
use App\Contracts\Services\Admin\UserServiceInterface;
use App\Contracts\Services\Admin\AdminServiceInterface;
use App\Contracts\Services\Admin\MemberServiceInterface;
use App\Contracts\Services\Admin\WorkoutServiceInterface;
use App\Contracts\Services\Admin\InstructorServiceInterface;



class AdminController extends Controller
{
   private $workoutService;
   private $instructorService;
   private $userService;
   private $memberService;
   private $yearUserCount;
   private $yearMemberCount;
   private $monthUserCount;
   private $monthMemberCount;
   private $weekUserCount;
   private $weekMemberCount;

     /**
     * Create a new controller instance.
     * @param AdminServiceInterface $taskServiceInterface
     * @param WorkoutServiceInterface $taskServiceInterface
     * @param InstructorServiceInterface $taskServiceInterface
     * @param UserServiceInterface $taskServiceInterface
     * @return void
     */

   public function __construct(AdminServiceInterface $adminServiceInterface , WorkoutServiceInterface $workoutServiceInterface , InstructorServiceInterface $instructorServiceInterface , UserServiceInterface $userServiceInterface , MemberServiceInterface $memberServiceInterface)
   {
      $this->workoutService = $workoutServiceInterface;
      $this->instructorService = $instructorServiceInterface;
      $this->userService = $userServiceInterface;
      $this->memberService = $memberServiceInterface;
      $this->yearUserCount = $this->getUserDataByYear();
      $this->yearMemberCount = $this->getMemberDataByYear();
      $this->monthUserCount = $this->getUserDataByMonth();
      $this->monthMemberCount = $this->getMemberDataByMonth();
      $this->weekUserCount = $this->getUserDataByWeek();
      $this->weekMemberCount = $this->getMemberDataByWeek();
      $this->adminService = $adminServiceInterface;
   }

   public function index()
   {
      $loginuser = auth()->user();
      $workout = $this->workoutService->get();
      $workoutCount = $workout->total();
      $instructor = $this->instructorService->get();
      $instructorCount = $instructor->total();
      $user = $this->userService->get();
      $userCount = $user->total();
      $member = $this->memberService->get();
      $memberCount = $member->total();
      $currentMonth = Carbon::now()->format('Y-m');
      $startDate = Carbon::parse($currentMonth)->startOfMonth()->format('d');
      $endDate = Carbon::parse($currentMonth)->endOfMonth()->format('d');
      return view('admin.index' , [ 'workoutCount' => $workoutCount ,
                                    'instructorCount' => $instructorCount ,
                                    'userCount' => $userCount,
                                    'memberCount' => $memberCount,
                                    'yearUserCount' => $this->yearUserCount,
                                    'yearMemberCount' => $this->yearMemberCount,
                                    'monthUserCount' => $this->monthUserCount,
                                    'monthMemberCount' => $this->monthMemberCount,
                                    'weekUserCount' => $this->weekUserCount,
                                    'weekMemberCount' => $this->weekMemberCount,
                                    'currentMonth' => $currentMonth,
                                    'startDate' => $startDate,
                                    'endDate' => $endDate,
                                    'loginuser' => $loginuser,
                                    ]
        );
    }

    private function getUserDataByWeek() 
    {
        $weeks = range(1,7);
        $weekUserCount = [] ;
        foreach($weeks as $week) 
        {
            $count = User::whereRaw('DAYOFWEEK(created_at) = ?', [$week])->count();
            $weekUserCount[$week] = $count;
        }
        return $weekUserCount;
   }

    private function getMemberDataByWeek() 
    {
        $weeks = range(1,7);
        $weekMemberCount = [] ;
        foreach($weeks as $week) 
        {
            $count = Member::whereRaw('DAYOFWEEK(created_at) = ?', [$week])->count();
            $weekMemberCount[$week] = $count;
        }
        return $weekMemberCount;
    }

    private function getUserDataByMonth() 
    {
        $currentMonth = Carbon::now()->format('Y-m');
        $startDate = Carbon::parse($currentMonth)->startOfMonth()->format('d');
        $endDate = Carbon::parse($currentMonth)->endOfMonth()->format('d');
        $dates = range($startDate, $endDate);
        $monthUserCount = [] ;

        foreach($dates as $date) {
            $count = User::whereDate('created_at', '=', $currentMonth.'-'.$date)->count();   
            $monthUserCount[$date] = $count;
        }
        return $monthUserCount;
     }

    private function getMemberDataByMonth()
    {
        $currentMonth = Carbon::now()->format('Y-m');
        $startDate = Carbon::parse($currentMonth)->startOfMonth()->format('d');
        $endDate = Carbon::parse($currentMonth)->endOfMonth()->format('d');
        $dates = range($startDate, $endDate);
        $monthMemberCount = [] ;

        foreach($dates as $date) 
        {
            $count = Member::whereDate('created_at', '=', $currentMonth.'-'.$date)->count();
            $monthMemberCount[$date] = $count;
        }
        return $monthMemberCount;
    }

    private function getUserDataByYear() 
    {
        $months = range(1,12);
        $yearUserCount = [];
        foreach($months as $month) {
            $count = User::whereMonth('created_at', '=', str_pad($month, 2, '0', STR_PAD_LEFT))
            ->count();
            $yearUserCount[$month] = $count;
        }
        return $yearUserCount;
    }

    private function getMemberDataByYear() 
    {
        $months = range(1,12);
        $yearMemberCount = [];
        foreach($months as $month) 
        {
            $count = Member::whereMonth('created_at', '=', str_pad($month, 2, '0', STR_PAD_LEFT))
            ->count();
            $yearMemberCount[$month] = $count;
        }
        return $yearMemberCount;
    }

    public function edit($id)
    {
        $loginuser = auth()->user();
        return view('admin.edit', ['loginuser' => $loginuser]);
        
    }

   
    public function update(UserProfileEditRequest $request,$id)
    {
        $this->adminService->update($id , $request->only([
            'name',
            'email',
            'image',
            'age',
            'phone',
            'gender',
            'address',
            'role',
         ]));

        // Redirect or return a response
        return redirect()->back()->with('success', 'Admin profile updated successfully');
    }
   
    public function editpassword()
    {
        $loginuser = auth()->user();
        return view ('admin.password', ['loginuser' => $loginuser]);
    }

    public function changepassword(ChangePasswordRequest $request)
    {
        
        $user = Auth::user();
        $user->password = bcrypt($request->input('new_password'));
        $user->save();
        return redirect()->back()->with('success', 'Admin password changed successfully');
    }
    
    public function member()
    {
        $loginuser = auth()->user();
        return view('admin.member.member' , ['loginuser' => $loginuser]);
    }

    public function created() 
    {
        $loginuser = auth()->user();
        return view('email.created' , ['loginuser' => $loginuser]);
    }

    public function expire() 
    {
        $loginuser = auth()->user();
        return view('email.expire' , ['loginuser' => $loginuser]);
    }
}
