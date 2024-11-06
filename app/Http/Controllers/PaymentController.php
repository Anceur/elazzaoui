<?php
namespace App\Http\Controllers;

use TheHocineSaad\LaravelChargilyEPay\Models\Epay_Invoice;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function createInvoice(Request $request)
    {
        // Validate the request or gather necessary data (e.g., user info, course info)

        // Define the invoice configuration
        $configurations = [
            'user_id' => auth()->id(), // Optional: If you're associating the payment with a user
            'mode' => 'CIB', // Payment method, either 'CIB' or 'EDAHABIA'
            'payment' => [
                'client_name' => auth()->user()->name, // Client's name (using authenticated user data)
                'client_email' => auth()->user()->email, // Client's email for payment receipt
                'amount' => 2500, // Amount in cents (e.g., 2500 = 25.00)
                'discount' => 0, // Discount percentage (0 - 99)
                'description' => 'Payment for Course or Product', // Payment description
            ]
        ];

        // Create the Epay Invoice and get the checkout URL
        $checkout_url = Epay_Invoice::make($configurations);

        // Check if the URL is generated, if not return to home page with an error
        if ($checkout_url) {
            // Redirect the user to the Epay checkout page
            return redirect()->to($checkout_url);
        } else {
            // If an error occurs, return to home page or show an error message
            return redirect()->route('home')->with('error', 'Unable to create payment invoice.');
        }
    }

    public function paymentCallback(Request $request)
    {
        // Handle the payment response, e.g., check status
        $status = $request->input('status');
        if ($status === 'paid') {
            // Update the order/payment status in your database
            // e.g., mark the order as paid
        }

        return redirect()->route('home'); // Redirect user after payment status update
    }

}
