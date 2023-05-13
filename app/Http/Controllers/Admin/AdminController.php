<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Contracts\Services\Admin\AdminServiceInterface;


class AdminController extends Controller
{
   private $adminService;

   /**
     * Create a new controller instance.
     * @param AdminServiceInterface $taskServiceInterface
     * @return void
     */

   public function __construct(AdminServiceInterface $adminServiceInterface) 
   {
      $this->adminService = $adminServiceInterface;
   }

   public function index() 
   {
      return view('admin.index');
   }

   public function edit() 
   {
      return view('admin.edit');
   }

   public function user() 
   {
      return view('admin.user.user');
   }

   public function member() 
   {
      return view('admin.member.member');
   }

}
