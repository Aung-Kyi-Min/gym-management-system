<?php

namespace App\Http\Controllers;

use App\Contracts\Services\PaymentServiceInterface;
use App\Http\Requests\MemberCreateRequest;
use App\Models\Member;
use App\Models\Instructor;
use App\Models\User;
use App\Models\Payment;
use App\Models\workout;
use Illuminate\Http\Request;
use App\Contracts\Services\Admin\WorkoutServiceInterface;
use App\Contracts\Services\Admin\InstructorServiceInterface;
use App\Contracts\Services\Admin\UserServiceInterface;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{

    private $paymentService;
    private $workoutService;
    private $instructorService;
    private $userService;

    /**
     * @param AuthServiceInterface $authServiceInterface
     * @return void
     */

    public function __construct(WorkoutServiceInterface $workoutServiceInterface
                                    ,InstructorServiceInterface $instructorServiceInterface
                                    ,UserServiceInterface $userServiceInterface)
    {
        //$this->paymentService = $PaymentServiceInterface;
        $this->workoutService = $workoutServiceInterface;
        $this->instructorService = $instructorServiceInterface;
        $this->userService = $userServiceInterface;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Member::find(1)->instructor->instructor_name;
        // $data = Member::find(1)->instructor->instructor_name;
        //  $data = Member::where('id',1)->get();
        //  return $data;
        $workouts = $this->workoutService->get();
        $instructors = $this->instructorService->getInstructors();
        $users = $this->userService->get();

        $member_w = Member::with('workout')->get();
        $member_in = Member::with('instructor')->get();
        $member_u = Member::with('user')->get();

        //$userId = auth()->user()->id;
        ////session(['user_id' => $userId]);
        ////$user_id = session('user_id');
        //$data = User::where('id',$userId)->get();
        $user = Auth::user();



        //$workout = $request->workout;
        //$instructor = $request->instructor;
        //$months = $request->sub_months;

        //$workout_plan = WorkoutPlan::find($workout_plan_id);
        //$trainer = Trainer::find($trainer_id);
        //$base_price = $workout_plan->price + $trainer->price;

        //$total = 0;
        //$total .= $workout + $instructor ;



        //$instructors=Instructor::all();
        //$users=User::all();
        // $workouts=workout::all();
        // $students = $this->studentService->getStudents();
        // $student = Student::with('major')->get();
        //  return view('your-view', compact('data'));
        // $data = Instructor::find(2)->member->join_duration;
        //  return $workouts;
        //return view('user.purchase',compact('instructors','users','workouts'));
        return view('user.purchase', ['workouts' => $workouts, 'member_w' => $member_w ,'instructors' => $instructors,
                    'member_in' => $member_in,'user' => $user,'member_u' => $member_u]);
    }

//    public function calculate(MemberCreateRequest request)
//    {
//
//    }
    public function getPrice(Request $request)
    {
        //$workout = $request->workout;
        //$instructor = $request->instructor;
        //$months = $request->sub_months;

        $workout = Workout::find($request->workout);
        $instructor = Instructor::find($request->instructor);
        $months = $request->sub_months;

        $price = $workout->price + $instructor->price;

        $price *= $months;
        if($months >= 1 && $months <= 4){
            $price = $price - ($price * 5/100);
        }else if($months >=5 && $months <= 8){
            $price = $price - ($price * 10/100);
        }else if($months >=9 && $months <= 12){
            $price = $price - ($price * 20/100);
        }

        //$m = int()$months;
        //$price = $workout + $instructor;
        //$price *= $months;

        //return response()->json(['price' => $price]);

        //$workout_plan = WorkoutPlan::find($workout_plan_id);
        //$trainer = Trainer::find($trainer_id);
        //$base_price = $workout_plan->price + $trainer->price;

//        $workout = Workout::findOrFail($request->workout);
//        $instructor = Instructor::findOrFail($request->instructor);
//        $sub_months = $request->sub_months;
//
//        $price = $workout->price + $instructor->price;
//        $price *= $sub_months;

        //$total = 0;
        //$total .= $workout + $instructor;
        //return
        //return redirect()->back();
        return view('user.subscription',['price'=> $price , 'workout' => $workout,'instructor' => $instructor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(MemberCreateRequest $request)
//    {
//
//        //
//        // $request->validate([
//        //    'user_id' => 'required',
//        //    'workout_id' => 'required',
//        //    'instructor_id'=>'required',
//        //    'join_duration'=>'required',
//        //    'joining_date'=>'required',
//        //    'end_date'=>'required',
//        //    //   'payment'=>'required',
//        //    //   'amount'=>'requried',
//        //]);
//        // return $request['amount'];
//        $input = $request->all();
//
//       // return $input['']
//
//        $res = Member::create($input);
//        if($res)
//        {
//
//            $this->paymentService->store($input);
//
//        //   Payment::create([
//        //    'member_id'=>$input['user_id'],
//        //    'amount'=>$request['amount'],
//        //    'payment'=>$request['payment'],
//        //    ]);
//
//        }
//
//
//        //     Mail::send('members.sendmail', ['token' => $token], function($message) use($request){
//        //       $message->to($request->email);
//        //   });
//
//
//        return redirect()->route('user.purchase')->with('success','Member has purchased successfully.');
//    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }

    public function getData(Request $request, $id)
    {
        // Retrieve the data based on the selected ID
        $data = Workout::find($id);
       // return $data;
        // return view('member.create',$data);
        // return response()->json($data);
    }
}
