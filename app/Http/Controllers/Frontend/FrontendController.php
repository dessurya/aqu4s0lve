<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use Validator;

class FrontendController extends Controller
{
    function home () {
	    return view('frontend.home-page.index');
	}

	function about () {
	    return view('frontend.about-page.index');
	}

	function contact () {
	    return view('frontend.contact-page.index');
	}

	function contactStore (Request $request){
		$message = [
			'name.required' 	=> 'required',
			'name.min' 		=> 'to short',
			'email.required'  => 'required',
			'email.email'  	=> 'format email salah',
			'subject.required'=> 'required',
			'subject.min' 	=> 'to short',
			'message.required'	=> 'required',
			'message.min' 		=> 'to short',
			'message.max' 		=> 'to long',
			// 'g-recaptcha-response.required'  => 'required',
	    ];

	    $validator = Validator::make($request->all(), [
			'name' 	=> 'required|min:3',
			'email' 	=> 'required|email',
			'subject'	=> 'required|min:3',
			'message' 	=> 'required|min:10|max:580',
			// 'g-recaptcha-response' => 'required',
		], $message);

	    if($validator->fails()){
	        return redirect()
	        	->route('frontend.contact')
	        	->withErrors($validator)
	        	->withInput()
	        	->with('autofocus', true)
	        	->with('info', 'Invalid...!')
	        	->with('alert', 'alert-danger');
	    }

	    if(!str_contains($request->email, ['gmail', 'yahoo', 'ymail', 'hotmail'])){
	        return redirect()
	          ->route('frontend.contact')
	          ->with('autofocus', true)
	          ->with('info', 'Success...!')
	          ->with('alert', 'alert-success');
	    }
	    if(str_contains($request->pesan, ['href', 'http', 'https', 'porn', 'pocker'])){
	        return redirect()
	          ->route('frontend.contact')
	          ->with('autofocus', true)
	          ->with('info', 'Success...!')
	          ->with('alert', 'alert-success');
	    }

	    // DB::transaction(function() use($request){
	        
	    //     $save = new Kontak;
	    //     $save->nama = $request->name;
	    //     $save->email = $request->email;
	    //     $save->telepon = $request->telpon;
	    //     $save->subyek = $request->subject;
	    //     $save->pesan = $request->pesan;
	    //     $save->save();

	    //     $getSendTo = General::first();

	    //     try {
	    //       Mail::send('frontend.kontak-page.mail', ['request' => $request], function($message) use ($request, $getSendTo) {
	    //         $message->from('administrator@pancalogam.com', 'Administrator')
	    //                 ->to($getSendTo->email_to);
	    //         if ($getSendTo->email_cc != null) {
	    //                 $message->cc($getSendTo->email_cc);
	    //         }
	    //                 $message->subject('New Inbox From : '.$request->email);
	    //       });
	    //     } catch (\Exception $e) {
	    //       // dd($e);
	    //     }
	    // });

		return redirect()
			->route('frontend.contact')
			->with('autofocus', true)
			->with('info', 'Success...!')
			->with('alert', 'alert-success');
	}
}
