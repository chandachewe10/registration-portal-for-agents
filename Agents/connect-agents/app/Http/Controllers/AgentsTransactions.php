<?php

namespace App\Http\Controllers;

use App\Models\transactions;
use Illuminate\Http\Request;

class AgentsTransactions extends Controller
{
    // Insert Data
    public function insert_transactions(request $request)
    {

        // Validate Clients Data
        $request->validate([
            'client_name' => ['required', 'regex:/^[a-zA-Z ]*$/'],
            'client_nrc' => ['required', 'regex:/^\(?([0-9]{6})\)?\/([0-9]{2})\/([0-9]{1})$/'],
            'client_phone' => ['required', 'numeric','digits:10'],
            'referal_code' => ['required', 'numeric','digits:10'],
            'amount' => ['required', 'numeric'],
            ]);
        // Save Clients Data
        $client_data = new transactions;
        $client_data->client_name = $request->client_name;
        $client_data->client_nrc = $request->client_nrc;
        $client_data->client_phone = $request->client_phone;
        $client_data->referal_code = $request->referal_code;
        $client_data->amount = $request->amount;
        $client_data->save();       
        
       
    }
}
