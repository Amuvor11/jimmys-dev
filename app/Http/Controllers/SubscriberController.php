<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use MailchimpMarketing\ApiClient;

class SubscriberController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'sub_email' => 'required|string|email|max:191',
            'locale' => 'required|string|max:2',
            'agree-sub' => 'required|accepted',
            'first_name' => 'nullable|string|max:191',
            'last_name' => 'nullable|string|max:191',
        ];
        if (config('app.recaptcha_key') && !in_array($request->getHost(), ['localhost', '127.0.0.1'], true)) {
            $rules['g-recaptcha-response'] = 'required|recaptcha';
        }
        $request->validate($rules);
//
//        DB::table('subscribers')->insert([
//            'email' => $request->sub_email,
//            'first_name' => $request->first_name,
//            'last_name' => $request->last_name,
//            'locale' => $request->locale,
//            "created_at" =>  Carbon::now(),
//        ]);

        $mailchimp = new ApiClient();
        $mailchimp->setConfig([
            'apiKey' => config('mailchimp.YOUR_API_KEY'),
            'server' => config('mailchimp.YOUR_SERVER_PREFIX')
        ]);

        $list_id = config('mailchimp.LIST_ID');

        $subscriber = [
            'email_address' => $request->sub_email,
            'status_if_new' => 'subscribed',
            'status' => 'subscribed',
            'merge_fields' => [
                'FNAME' => $request->first_name ?? '',
                'LNAME' => $request->last_name ?? ''
            ],
            'language' => $request->locale // Replace with the subscriber's language code
        ];
        $subscriber_hash = md5(strtolower($request->sub_email));
        try {
            $response = $mailchimp->lists->setListMember($list_id, $subscriber_hash, $subscriber);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            Log::error( $e->getResponse()->getBody()->getContents() );
            return response( 'Subscription service error!' );
        }
        return response( __('Vielen Dank für Ihre Anmeldung!'), 201);


    }
}
