<?php

namespace App\Http\Controllers;
use App\Http\Requests\adminRegistration;
use App\Http\Requests\updateReferrals;
use App\Http\Requests\updateTransaction;
use App\Http\Requests\updateUser;
use App\Models\Announcement;
use App\Models\Referral;
use App\Models\Withdraw;
use App\User;
use App\Models\Link;
use App\Notifications\NotifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Kevupton\LaravelCoinpayments\Models\Transaction;

class AdminController extends Controller
{


    public function admin_reg()
    {
        return view('auth.a_register');
    }
    public  function p_admin_reg(adminRegistration $req)
    {
        $data = $req->all();
        $user = new User();
        $user->full_name = $data['full_name'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->phone = $data['phone'];
        $user->bitcoin = $data['bitcoin'];
        $user->role_id = 2;
        $user->save();

        $ref = 'https://cryptoexchangeoption.com/account/register?ref=';

        Link::create([
            'user_id' => $user->id,
            'username' => $user->username,
            'address' => $ref.''.$user->username
        ]);

       // $link = Link::where('username', $data['upline'])->first();
        //$web = $link->user()->get();
        //Log::info($web);
        //  User::find($link->user->id)->notify(new NotifyUser($link));
       // $link->user->notify(new NotifyUser($link));

        session()->flash('success', 'User created successfully!.');
        return redirect()->back();
    }

    public function announcement()
    {
        return view('pages.create_announcement');
    }

    public function postAnnouncement(Request $request){
        $this->validate($request,[
           'subject' => 'required',
           'content' => 'required'
        ]);
       $announcement = new Announcement();
       $announcement->subject = $request->input('subject');
       $announcement->content = $request->input('content');
       $announcement->save();
    }

    public function confirm_withdrawal_payment($id)
    {
        Withdraw::where('id', $id)->update(['status' => 'PAID', 'payment_date' => Carbon::now()]);
        $user_get = Withdraw::where('id', $id)->first();


        $amount = '';
        $bal = '';
        $ref = '';
        Withdraw::where('id', $id)->update(['status' => 'PAID', 'payment_date' => Carbon::now()]);
        $user_get = Withdraw::where('id', $id)->first();

         $balance = Transaction::where('user_id', $user_get->user_id)->where('status', 'ACTIVATED')->where('confirms_needed', 99)->where('status_date' ,'<=' , Carbon::now()->subDays(7))->get();
            $referral = Referral::where('sponsor_username', $user_get->user->username)->get();
             $ref = $referral->sum('amount'); //1300
             $bal = $balance->sum('returns'); //1701.7

        $bal = str_replace(",", "", $bal);
        $sum = $bal + $ref;
        $sum = number_format($sum);
        $sum = str_replace(",", "", $sum);
            $count = count($balance);
            $amount1 = $sum / $count;
            Transaction::where('user_id', $user_get->user_id)->update(['withdrawn' => 'NO', 'bal_after_7days' => $amount1, 'product' => 0, 'returns' => 0,  'rate' => 0, 'status_date' => Carbon::now()]);
     //   Transaction::where('user_id', $user_get->user_id)->update(['withdrawn' => 'NO', 'bal_after_7days' => $amount1, 'product' => 0, 'returns' => 0]);
        Referral::where('sponsor_username', $user_get->user->username)->update(['amount' => 0]);
           
            Withdraw::where('id', $id)->delete();

     //   }
        return redirect()->back();
    }

    public function confirm_referral_withdrawal_payment($id)
    {
        Withdraw::where('id', $id)->update(['status' => 'PAID', 'payment_date' => Carbon::now()]);
        $user_get = Withdraw::where('id', $id)->first();
      
        return redirect()->back();
    }


    public function purgeUser($id)
    {
        $user_get = User::where('id', $id)->first();

        User::where('id', $user_get->id)->delete();

        session()->flash('alert-success', 'User Purged Successfully.');

        return redirect()->back();

    }

    public function confirm_payment($id)
    {
        $transaction = Transaction::where('id', $id)->update(['status' => 'ACTIVATED', 'confirms_needed' => 0]);

        $trans = Transaction::where('id', $id)->where('status', 'ACTIVATED')->get();

        foreach ($trans as $tran) {
          if ($tran->user->upline !== NULL) {
            $id = '';
            $amount = '';
            $username = '';
            $userId = '';
            $id = $tran->id;
            $amount = $tran->amount_btc;
            $username = $tran->user->upline;
            $userId = $tran->user->id;


            Referral::create([
                'user_id' => $userId,
                'amount' => $amount * 0.05,
                'initial_amount' => $amount * 0.05,
                'sponsor_username' => $username,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
           }else{
                echo 'error';
                }
            }

        return redirect()->back();
    }

    public function getEditUsers($id)
    {
        $user = new User();
        $user = $user->where('role_id', 1)->find($id);
        $userss = $user->all(['id', 'full_name', 'username', 'email', 'upline', 'phone', 'bitcoin', 'city', 'state', 'country']);
        return view('pages.users_edit', ['user' => $user, 'userId' => $id, 'userss' => $userss]);
    }


    public function postEditUsers(updateUser $request)
    {
        $requestData = $request->all();
        unset($requestData['_token']);
        User::where('id', $request->id)->update($requestData);
        session()->flash('success', 'Update is successful');
        return redirect()->back();

    }

    public function editUsersTransaction($id)
    {
        $transaction = new Transaction();
        $transaction = $transaction->find($id);
        $transactionss = $transaction->all();
        return view('pages.admin-transactions_edit', ['transaction' => $transaction, 'transactionId' => $id, 'transactionss' => $transactionss]);
    }


    public function postEditUsersTransaction(updateTransaction $request)
    {
        $requestData = $request->all();
        unset($requestData['_token']);
        Transaction::where('id', $request->id)->update($requestData);
        session()->flash('success', 'Update is successful');
        return redirect()->back();

    }

    public function deleteTransaction($id)
    {
        $transaction = new Transaction();
        $transaction = $transaction->find($id);
        $transaction->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deleted!');
    }

    public function fundUsers(){
        $users = User::where('role_id', 1)->get();
        return view('pages.funding', compact('users'));
    }

    public function postFunding(Request $request){

        $this->validate($request, [
            'users' => 'required|not_in:0',
            'amount' => 'required',
        ]);
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name" => false,
            ),
        );
        $url1 = file_get_contents('https://api.coinmarketcap.com/v1/ticker/bitcoin/', false, stream_context_create($arrContextOptions));
        $vrl = $url1;
        $json= json_decode($vrl, true);
        $btc = $json[0]["price_usd"];


        $tick = file_get_contents('https://api.coinmarketcap.com/v1/ticker/ethereum/', false, stream_context_create($arrContextOptions));
        $url = $tick;
        $data= json_decode($tick, true);
        $eth = $data[0]["price_usd"];

        $plan = "";
        $rate = "";
        $transaction = new Transaction();
        $transaction->user_id = $request->users;
        $transaction->amount_btc = $request->amount;
        if($request->amount >= '5000' && $request->amount <= '100000'){
            $plan = 'Premium Plan';
        } elseif ($request->amount >= '100001' ) {
            $plan = 'Ultimate Plan';
        }
        $transaction->plan = $plan;
        $transaction->amount = $request->amount / $btc;
        $transaction->rate = 0;
        $transaction->rate1 = 0;
        $transaction->product = 0;
        $transaction->returns = 0;
        $transaction->bal_after_7days = 0;
        $transaction->week_count = 0;
        $transaction->withdrawn = 'NO';
        $transaction->currency1 = 'BTC';
        $transaction->currency2 = 'BTC';
       // $transaction->buyer_name = $request->users->full_name;
        $transaction->status = 'ACTIVATED';
        $transaction->confirms_needed = 0;
        $transaction->timeout = 9600;
        $transaction->txn_id = 'NULL';
        $transaction->status_url = 'NULL';
        $transaction->qrcode_url = 'NULL';
        $transaction->created_at = Carbon::now();
        $transaction->updated_at = Carbon::now();
        $transaction->save();

        session()->flash('success', 'Account Funded Successfully');
        return redirect()->back();

    }

    public function editUsersReferral($id)
    {
        $users = User::where('role_id', 1)->get();
        $referral = new Referral();
        $referral = $referral->find($id);
        $referralss = $referral->all();
        return view('pages.admin_referrals_edit', ['referral' => $referral, 'referralId' => $id, 'referralss' => $referralss, 'users' => $users]);
    }


    public function postEditUsersReferral(updateReferrals $request)
    {
        $requestData = $request->all() + [
            'initial_amount' => $request->amount
            ];
        unset($requestData['_token']);
        Referral::where('id', $request->id)->update($requestData);
        session()->flash('success', 'Update is successful');
        return redirect()->back();

    }

    public function deleteReferral($id)
    {
        $referral = new Referral();
        $referral = $referral->find($id);
        $referral->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deleted!');
    }


    public function editUsersWithdrawal($id)
    {
        $withdraw = new Withdraw();
        $withdraw = $withdraw->find($id);
        $withdrawalss = $withdraw->all();
        return view('pages.admin_withdrawals_edit', ['withdraw' => $withdraw, 'withdrawalId' => $id, 'withdrawalss' => $withdrawalss]);
    }


    public function postEditUsersWithdrawal(Request $request)
    {
        $requestData = $request->all();
        unset($requestData['_token']);
        Withdraw::where('id', $request->id)->update($requestData);
        session()->flash('success', 'Update is successful');
        return redirect()->back();

    }

    public function deleteWithdrawal($id)
    {
       // $withdrawal = new Withdraw();
       // $withdrawal = $withdrawal->find($id);
        Withdraw::where('id', $id)->delete();
       // $withdrawal->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deleted!');
    }





}
