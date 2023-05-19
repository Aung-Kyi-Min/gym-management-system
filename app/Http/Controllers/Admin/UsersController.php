<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
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

   public function user()
   {
      $users = $this->userService->get();
      
      return view('admin.user.user' , ['users' => $users]);
   }

   public function create()
   {
      return view('admin.user.userCreate');
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
      $user = $this->userService->edit($id);
      return view('admin.user.userEdit' ,['user' => $user]);
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
