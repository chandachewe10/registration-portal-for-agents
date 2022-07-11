<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\transactions;
use Auth;
class TransactionsUpdate extends Component
{

    public $today_month;
    public $today_year;
    public $month_human_readble_format;
    
    public function mount($today_month=null,$today_year=null,$month_human_readble_format=null)
    {
        $this->today_month = date('m');
        $this->today_year = date('Y');
        $this->month_human_readble_format = date('F, Y');
        
    }

    
    public function render()
    {
        return view('livewire.transactions-update', [
                'amount' => transactions::where('referal_code', "=", Auth::user()->phone)->where('status',"=",1)->whereMonth('created_at',"=",$this->today_month)->whereYear('created_at',"=",$this->today_year)->sum('amount'),
                'today_sales' => transactions::where('referal_code', "=", Auth::user()->phone)->where('status',"=",1)->whereMonth('created_at',"=",$this->today_month)->whereYear('created_at',"=",$this->today_year)->whereDay('created_at', date('d'))->count(),
                'invited_clients' => transactions::where('referal_code', "=", Auth::user()->phone)->where('status',"=",1)->whereMonth('created_at',"=",$this->today_month)->whereYear('created_at',"=",$this->today_year)->count(),
                'month' => $this->month_human_readble_format,
                
                ])->layout('dashboard.index');
    }
}


