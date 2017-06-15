<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Support\ActionMailer;

use Log;
use App\Support\SecurityKeeper as CapchaKeeper;

class ContactController extends Controller
{
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'You have to check the capcha to prove human.',
            'g_recaptcha_response.required' => 'You have to check the capcha to prove human.',
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ActionMailer $mailer)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'subject' => 'required|max:300',
            'body' => 'required|max:1000',
            'g-recaptcha-response' => 'sometimes|required',
            'g_recaptcha_response' => 'sometimes|required',
        ], $this->messages());

        $recaptcha = new \ReCaptcha\ReCaptcha(CapchaKeeper::getReCapchaSecretKey());

        $data = $request->only('name', 'email', 'subject', 'body');
        // add additional data
        $data = array_add($data, 'ip', ($request->ip() == '::1') ? 'localhost' : $request->ip() );

        Log::info('Email sent by ' . $data['email'] . ', from -> ' . $data['name'] . ', ip -> ' . $data['ip']);
        Log::info('g-recaptcha-response: ' . ( $request->ajax() ? $request->input('g_recaptcha_response') : $request->input('g-recaptcha-response')));

        if($request->ajax())
        {
            Log::info('ajax Capcha: ' . ($request->has('g_recaptcha_response') ? 'found' : 'not found'));

            $resp = $recaptcha->verify($request->input('g_recaptcha_response'), $data['ip']);
            Log::info('ajax Capcha: ' . ($resp->isSuccess() ? 'verified' : 'not verified'));
            if(!$resp->isSuccess())
                return response()->json([ 'message' => 'Capcha verification denied! Please try again!', 'success' => false  ], 400);
            
            $mailer->request($data);

            return response()->json([ 'message' => 'Your query has been sent!', 'success' => true  ]);
        }
        $resp = $recaptcha->verify($request->input('g-recaptcha-response'), $data['ip']);
        Log::info('Capcha: ' . ($resp->isSuccess() ? 'verified' : 'not verified'));
        if(!$resp->isSuccess())
            redirect()->back()->withErrors($resp->getErrorCodes());
        
        $mailer->request($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
