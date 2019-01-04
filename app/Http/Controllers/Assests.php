<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpdateInventory;

use DB;

class Assests extends Controller
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
        //
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

    public function saveUpdateInventory(Request $request)
    {
        if($request->session()->has('u_session')){
         
            $upadteInvntry = $request->all();
            $insertIssuedBook = DB::table('update_inventories')->insert($upadteInvntry);
            // dd($showInventry);
            $request->session()->flush('Inventry', 'Data saved Successfully');
            $showInventory = DB::table('update_inventories')->paginate(5);
            return view('adminView.updateInventory', compact('showInventory')); 
        }else{
                    redirect('/');
                }
        }
    public function updateInventory(Request $request)
    {
        if($request->session()->has('u_session')){
            $upadteInvntry  = $request->all();

            $insertIssuedBook = DB::table('update_inventories')->insert($upadteInvntry);
            $showInventory = DB::table('update_inventories')->paginate(10);
            $request->session()->put('Inventry', 'Data saved Successfully');
            return view('adminView.updateInventory');
        }else{
            redirect('/');
        }
    }

    public function showUpdateInventory(Request $request)
    {
        if ($request->session()->has('u_session')) {

            $showInventory = DB::table('update_inventories')->paginate(10);
            // dd($showRecord);

            return view('adminView.updateInventory', compact('showInventory'));
        }else{
            return redirect('/');
        }
    }
    public function deleteUpdateInventory(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteInventory = DB::table('update_inventories')->where('id', $id)->delete();

            echo $deleteInventory;
        }else{
            return redirect('/');
        }
    }

    public function editInventryRecord(Request $request, $id)
    {

       if($request->session()->has('u_session')){
         
         $user_get=DB::table('update_inventories')->where('id',$id)->first();
         $inventoryInfo=DB::table('update_inventories')->where('id',$id)->get();
         // dd($inventoryInfo);
         return view('adminView.editUpdateInventory',compact('user_get', 'inventoryInfo'));
       }else {
         return redirect('/accounts/login');
       }

    }

    public function editUpdateInventry(Request $request)
    {

        $sid = $request->input('id');
        // dd($sid);
        $updatInvntry = $request->all();

        $user_info=DB::table('update_inventories')->where('id',$sid)->update($updatInvntry);
        $showInventory = DB::table('update_inventories')->get();
        // dd($user_info);
        return view('adminView.updateInventory', compact('showInventory'));
    }



    public function booksIssued(Request $request)
    {
        if($request->session()->has('u_session')){
          $id = $request->input('id');
          $issueBook  = $request->all();
          if($id == ''){
            $insertIssuedBook = DB::table('issued_books')->insert($issueBook);
            $request->session()->put('issuedBook', 'Data saved Successfully');
          }else{
            $insertIssuedBook = DB::table('issued_books')->where('id', $id)->update($issueBook);
            $request->session()->put('issuedBook', 'Data updated Successfully');
          }
          $showIssuedBook = DB::table('issued_books')->paginate(10);
          return redirect('adminView/issuedBooks');
        }else{
            redirect('/');
        }
    }

    public function edit_booksIssued(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       $data=DB::table('issued_books')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-issuedbooks',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function showBooksIssued(Request $request)
    {
        if ($request->session()->has('u_session')) {
            $showIssuedBook = DB::table('issued_books')->paginate(10);
            // dd($showRecord);

            return view('adminView.issuedBooks', compact('showIssuedBook'));
        }else{
            return redirect('/');
        }
    }


    public function deleteBooksIssued(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteIssuedBooks = DB::table('issued_books')->where('id', $id)->delete();

            echo $deleteIssuedBooks;
        }else{
            return redirect('/');
        }
    }

    public function booksList(Request $request)
    {
        if($request->session()->has('u_session')){
          $id = $request->input('id');
            $listBooks  = $request->all();

            if($id == ''){
              $insertBooksList = DB::table('book_lists')->insert($listBooks);
              $request->session()->put('bookList', 'Data saved Successfully');
            }else{
              $updateBooksList = DB::table('book_lists')->where('id', $id)->update($listBooks);
              $request->session()->put('bookList', 'Data updated Successfully');
            }

            $showList = DB::table('book_lists')->paginate(10);
            return redirect('adminView/booksList');
        }else{
            redirect('/');
        }
    }

    public function edit_booklist(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('book_lists')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-booklist',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function showBooksList(Request $request)
    {
        if ($request->session()->has('u_session')) {
            $showList = DB::table('book_lists')->paginate(10);
            // dd($showRecord);

            return view('adminView.booksList', compact('showList'));
        }else{
            return redirect('/');
        }
    }


    public function deleteBooksList(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deletebookList = DB::table('book_lists')->where('id', $id)->delete();

            echo $deletebookList;
        }else{
            return redirect('/');
        }
    }
}
