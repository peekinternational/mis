<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Register;
use Session;
use Auth;
use DB;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
       
        //dd($request->all());
        
        $user = new Register;
        $user->userType = $request->input('userType');
        $user->fullname = $request->input('fullname');
        $user->uname = $request->input('uname');
        $user->mblNumbr = $request->input('mblNumbr');
        $user->password = $request->input('password');

        $user->save();
        return redirect('/')->with('success','You are successfully Registered');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request) {
        // $userType = $request->input('userType');
        $uname  = $request->input('uname');
        $password = $request->input('password');
        $userType = $request->input('userType');
        // dd($request->all());

        $user1 = Register::where('uname',$uname)->first();
        if (!empty($user1)) {
          if ($userType == $user1->userType &&$uname == $user1->uname && $password == $user1->password) {
            
              $request->session()->put('u_session', $user1);
              // $request->session()->put('type', $user1->type);
              // $request->session()->put('name', $user1->name);
              $val = $request->session()->get('u_session');
              // dd($val->userType);

              // $user = Register::find($val->id);
              // return redirect('/contact');
              $request->session()->put('success', "you are successfully logged in");
              if ($user1->userType == "Admin") {
                return redirect('/contact');
              }elseif ($user1->userType == "Staff") {
                return redirect('/career');

              }elseif ($user1->userType == "Student") {
                return redirect('/about');

              }

              // return view('index', compact('user'));

            }else {
              return redirect('/education')->with('red-alert', 'Incorrect Password');
            }
          
          }else {
            return redirect('/career')->with('red-alert', 'Incorrect User Name');
        }
    }
    public function Logout()
    {
      session()->flush();
      session()->forget('u_session');
      return redirect('/');
    }
}
