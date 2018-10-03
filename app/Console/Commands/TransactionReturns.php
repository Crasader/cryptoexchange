<?php

namespace App\Console\Commands;

use Kevupton\LaravelCoinpayments\Models\Transaction;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class TransactionReturns extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'TransactionReturns:transactionreturns';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the transactions activated after 7 days';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Transaction::where('confirms_needed', '=', 0)->update(['status_date' => Carbon::now(), 'confirms_needed' => 99]);

        Transaction::where('confirms_needed', '=', 99)->where('plan', '=', 'Basic Plan')->whereRaw('status_date >= SUBDATE( NOW(), INTERVAL 7 DAY)')->update(['rate' => DB::raw('rate + 0.0446428571'), 'returns' =>  DB::raw('rate / 100 * amount_btc')]);
        Transaction::where('confirms_needed', '=', 99)->where('plan', '=', 'Standard Plan')->whereRaw('status_date >= SUBDATE( NOW(), INTERVAL 7 DAY)')->update(['rate' => DB::raw('rate + 0.0595238095'), 'returns' =>  DB::raw('rate / 100 * amount_btc')]);
        Transaction::where('confirms_needed', '=', 99)->where('plan', '=', 'Ultimate Plan')->whereRaw('status_date >= SUBDATE( NOW(), INTERVAL 7 DAY)')->update(['rate' => DB::raw('rate + 0.0744047619'), 'returns' =>  DB::raw('rate / 100 * amount_btc')]);
        Transaction::where('confirms_needed', '=', 99)->where('plan', '=', 'Premium Plan')->whereRaw('status_date >= SUBDATE( NOW(), INTERVAL 7 DAY)')->update(['rate' => DB::raw('rate + 0.0892857143'), 'returns' =>  DB::raw('rate / 100 * amount_btc')]);
        Transaction::where('confirms_needed', '=', 99)->where('plan', '=', 'Platinum Plan')->whereRaw('status_date >= SUBDATE( NOW(), INTERVAL 7 DAY)')->update(['rate' => DB::raw('rate + 0.1041666667'), 'returns' =>  DB::raw('rate / 100 * amount_btc')]);



        Transaction::where('confirms_needed', '=', 99)->where('plan', '=', 'Basic Plan')->where('status_date' ,'<=' , Carbon::now()->subDays(7))->update(['rate' => 0.3, 'returns' =>  DB::raw('0.3 * amount_btc')]);
        Transaction::where('confirms_needed', '=', 99)->where('plan', '=', 'Standard Plan')->where('status_date' ,'<=' , Carbon::now()->subDays(7))->update(['rate' => 0.4, 'returns' =>  DB::raw('0.4 * amount_btc')]);
        Transaction::where('confirms_needed', '=', 99)->where('plan', '=', 'Ultimate Plan')->where('status_date' ,'<=' , Carbon::now()->subDays(7))->update(['rate' => 0.5, 'returns' =>  DB::raw('0.5 * amount_btc')]);
        Transaction::where('confirms_needed', '=', 99)->where('plan', '=', 'Premium Plan')->where('status_date' ,'<=' , Carbon::now()->subDays(7))->update(['rate' => 0.6, 'returns' =>  DB::raw('0.6 * amount_btc')]);
        Transaction::where('confirms_needed', '=', 99)->where('plan', '=', 'Platinum Plan')->where('status_date' ,'<=' , Carbon::now()->subDays(7))->update(['rate' => 0.7, 'returns' =>  DB::raw('0.7 * amount_btc')]);





        return $this->info('Achieved');


        //User::where('status' , 'PAID')->get();

    }


}
