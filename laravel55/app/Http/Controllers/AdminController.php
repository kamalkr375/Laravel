<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminPermissionRequest;
use Illuminate\Http\Request;
use App\AdminPermission;
use App\AdminMenu;
use App\Admin;
use App\Role;
use Hash;
use Auth;
use DB;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
          $admin = Admin::orderBy('id', 'desc')->paginate(10);
          return view('admin.home')->with(['data'=>$admin]);
    }


    public function create()
    {
        $roles=Role::All();
        $admin_menu= DB::table('admin_menus')->where('parent_id',0)->get();

        $admin_menu= $this->makesubmenu($admin_menu);

        return view('admin.admin-create')->with(['roles'=>$roles,'admin_menu'=>$admin_menu]);
     }

  public function store(AdminPermissionRequest $request)
    {

        $admins=  Admin::create(  ['name' => $request->name,
                                   'role_id'=>$request->role_id,
                                   'email'=>$request->email,
                                   'password'=>Hash::make($request->password),
                                   'job_title' =>'',
                                    'status'=>$request->status,
                       ]);


         $admin_id=$admins->id;

         foreach($request->admin_menu_id as $rval){

               $SubcategoryFilterAttribute=AdminPermission::create([
                               'admin_id' => $admin_id,
                               'admin_menu_id' => $rval
                              ]);
         }

           return redirect()->route('admin.dashboard')
                        ->with('success','Admin created successfully');
    }

     public function makesubmenu($admin_menu)
     {
 
              foreach($admin_menu as $subMen){

                 $subMen->submenu=DB::table('admin_menus')->where('parent_id',$subMen->id)->get();
              }

            return $admin_menu;

      }



}
