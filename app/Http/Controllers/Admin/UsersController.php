<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserCreateRequest;
use App\Contracts\Services\Admin\UserServiceInterface;

class UsersController extends Controller
{

   private $userService;
 
    /**
      * Create a new controller instance.
      * @param userInterface $taskServiceInterface
      * @return void
      */
 
    public function __construct(UserServiceInterface $userServiceInterface) 
    {
       $this->userService = $userServiceInterface;
    }

    public function create()
    {
        $loginuser = auth()->user();
        return view('admin.user.userCreate' , ['loginuser' => $loginuser]);
    }

    public function user(Request $request)
    {
        $loginuser = auth()->user();
        $search = $request->input('search', '');
        $users_search = $this->userService->search($search);
    
        foreach ($users_search as $user) {
            $user->limitedAddress = Str::limit($user->address, 50);
        }
    
        return view('admin.user.user', compact('users_search', 'search' , 'loginuser'));
    }
    
    public function store(UserCreateRequest $request) 
    {
        $this->userService->store($request->only([
            'name',
            'email',
            'password',
            'phone',
            'gender',
            'age',
            'role',
            'image',
            'address'
        ]));
        return redirect('/admin/user');
    }

    public function edit($id) 
    {
        $loginuser = auth()->user();
        $user = $this->userService->edit($id);
        return view('admin.user.userEdit' ,['user' => $user , 'loginuser' => $loginuser]);
    }

    public function update(UserEditRequest $request ,$id)
    {
        $this->userService->update($id , $request->only([
            'name',
            'password',
            'phone',
            'gender',
            'age',
            'role',
            'image',
            'address'
        ]));
        return redirect('/admin/user');
    }

    public function destroy($id) 
    {
        $this->userService->destroy($id);
        return redirect('/admin/user');
    }

}
