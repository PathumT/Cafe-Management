<?php

namespace App\Http\Controllers;
use DB;
use Mail;
use App\Models\account;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AccountController extends Controller
{
    public function account_management()
    {
        $accounts = DB::table('users')->get();
        return view('account_management',compact('accounts'));
    }
    public function user_list()
    {
        $user = DB::table('users')->get();
        return view('user_list',compact('user'));
    }

    // public function createaccount(Request $request)
    // {
    //     $res = new account([
    //         'name' => $request->get('name'),
    //         'email' => $request->get('email'),
    //         'role' => $request->get('role'),

    //         'is_admin' => '0',
    //         ]);

    //     $res->save();

    //     $request->session()->flash('success','User ADDED.');
    //     return back();
    // }

//     public function updateaccount(Request $request, $id)
// {
//     // dd($request);
//     $update = [
//         'name' => $request->input('name'),
//         'email' => $request->input('email'),
//         'role' => $request->input('role'),
//     ];

//     account::where('id', $id)->update($update);

//     return redirect()
//         ->back()
//         ->with('success', 'Account edited successfully.');
// }

public function updateaccount(Request $request, $id)
{
    $request->validate([

        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    ]);
    $update = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'role' => $request->input('role'),
    ];

    User::where('id', $id)->update($update);

    return redirect()
        ->route('account_management')
        ->with('success', 'Account edited successfully.');
}


    // public function deleteaccount(Request $request,$id)
    // {
    //     try{
    //         $response = account::find($id);
    //         $response->delete();

    //         $request->session()->flash('delete','DELETED SUCCESS.');
    //         return back();
    //     }catch(\Exception $error){
    //         $request->session()->flash('Something goes wrong. Please try again');
    //         return back();
    //     }
    // }

    public function deleteaccount($id)
  {
    // dd($id);
    DB::delete('delete from users where id = ?',[$id]);
    return redirect()
  ->back()
    ->with('delete', 'DELETED SUCCESS.');
  }

    public function view_account_edit($id)
    {

        $account_edit= DB::table('accounts')->where('id',$id)->get();


        return view('account_edit',compact('account_edit'));

    }
    //mail
    public function createaccount(Request $request)
    {
    //   dd( $request);

    $request->validate([

        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    ]);


    $hashed_random_password  = Str::random( 8 );

    $random_password = Hash::make($hashed_random_password );


    $testMailData = [
        'title' => 'CATCH-35',
        'body' =>  $hashed_random_password ,
    ];

     Mail::to($request->get('email'))->send(new SendMail($testMailData));
        $res = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            // 'status' => $request->get('status'),
            'since' => $request->get('Date'),
            // 'tip' => $request->get('tip'),
            'role' => $request->get('role'),
            // 'is_admin' => $request->get('is_admin'),

                'password' => $random_password ,
                'is_admin' => '0',

            ]);

        $res->save();

        $request->session()->flash('success','USER CREATED.');
        return back();
    }


    public function account_edit($id)
{
    $account_edit = DB::table('users')->where('id', $id)->get();
    return view('account_edit', compact('account_edit'));
}





}
