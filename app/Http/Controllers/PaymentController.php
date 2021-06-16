<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\Booking;
use App\Models\SelectedDish;
use App\Models\Dish;
use App\Models\event_detail;
use App\Models\venue;
use Illuminate\Http\Request;



class PaymentController extends Controller
{
   public function index(Request $req)
    {
	 $bId=$req->id;
	 $booking=Booking::find($bId);
	 $tot_cost=$booking['total_amount'];
	 $adv_amount=$tot_cost*0.5;
	 return view('payment',['adv_amount'=>$adv_amount]);
    }
    public function paymentProcess(Request $request){
 
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
					array("X-Api-Key:test_6a938cb7382a1a070dcea1efdd2",
						"X-Auth-Token:test_e30c9aff0df57c6bcdc8cd628f2"));
                   
        $payload = Array(
            'purpose' => 'NiceSnippets',
            'amount' => $request->advance,
            'phone' => $request->phone_no,
            'buyer_name' => $request->name,
            'redirect_url' => 'http://127.0.0.1:8000/payment-success',
            'send_email' => true,
            //'webhook' => 'http://www.example.com/webhook/',
            'send_sms' => true,
            'email' => $request->email,
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch); 
        $response = json_decode($response);
        return redirect($response->payment_request->longurl);
    }
 
    public function paymentSuccess(Request $request){
	    $payment=new Payment;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payments/'.$request->get('payment_id'));
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_6a938cb7382a1a070dcea1efdd2",
                  "X-Auth-Token:test_e30c9aff0df57c6bcdc8cd628f2"));

        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch); 

        if ($err) {
			return redirect('view_bookings')->withErrors('Payment Failed, Try Again!!');
        } else {
            $data = json_decode($response);
        }
        
        if($data->success == true) {
            if($data->payment->status == 'Credit') {				
				$payment->name=$data->payment->buyer_name;
				$payment->email=$data->payment->buyer_email;
				$payment->phone_no=$data->payment->buyer_phone;
				$payment->advance= $data->payment->amount;
				$payment->payment_status='Paid';
				$saved=$payment->save();
				if(!$saved){
					return redirect('view_bookings')->withErrors('Payment unsuccessfull!!');
				}
				else{
					
					return redirect('view_bookings')->with('message','Your payment has been pay successfully, Enjoy!!');
				}		
            }
			else {
                
                return redirect('view_bookings')->withErrors('Payment Failed, Try Again!!');
            }
        }
        return redirect('view_bookings')->withErrors('Something went wrong.Payment Failed, Try Again!!');
    }
}
	
