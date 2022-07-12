<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\invoice as New_Client_Invoice;
use App\Models\User;
use App\Notifications\InvoiceNotification;
use Illuminate\Support\Facades\Notification;
use Auth;
use PDF;

class Invoice extends Controller
{
    // Clients Invoice
    public function clients_invoice(Request $request)
    {
        
        // Validate Data
        $clients_invoice =  $request->validate([
            'deviceqty' => ['required', 'numeric'],
            'subqty' => ['required', 'numeric'],
            'fuelqty' => ['required', 'numeric'],
            'totalqty' => ['required', 'numeric'],
            'deviceprice' => ['required', 'numeric'],
            'subprice' => ['required', 'numeric'],
            'fuelprice' => ['required', 'numeric'],
            'totalprice' => ['required', 'numeric'],
        ]);



        // Store Data Now
        $store_invoice = new New_Client_Invoice;
        $store_invoice->deviceqty = $request->deviceqty;
        $store_invoice->subqty = $request->subqty;
        $store_invoice->fuelqty = $request->fuelqty;
        $store_invoice->totalqty = $request->totalqty;
        $store_invoice->deviceprice = $request->deviceprice;
        $store_invoice->subprice = $request->subprice;
        $store_invoice->fuelprice = $request->fuelprice;
        $store_invoice->totalprice = $request->totalprice;
        $store_invoice->momo_number = Auth::user()->momo_number;
        $store_invoice->email = Auth::user()->email;
        $store_invoice->save();

        // Generate the latest Invoice

        $generated_invoice = New_Client_Invoice::where('email', "=", Auth::user()->email)->where('momo_number', "=", Auth::user()->momo_number)->latest()->first();

        if ($generated_invoice) {
            $pdf = PDF::loadView('Invoices.client_invoice', compact('generated_invoice'))
    ->setOptions(['defaultFont' => 'sans-serif','isRemoteEnabled' => true]);

    $attachment = $pdf->output();
            // Send the invoice to the admin email as an attachment
            $client = User::where('email', "=", Auth::user()->email)->where('momo_number', "=", Auth::user()->momo_number)->first();
            $client->notify(new InvoiceNotification($attachment));

     
            // Download the Invoice Now
            return $pdf->download('Invoice.pdf');
        }
    }
}
