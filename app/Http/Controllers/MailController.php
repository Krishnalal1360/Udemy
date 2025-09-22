<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Carbon;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('email_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $validated = $request->validate([
            "to" => "required|email",
            "subject" => "required|string|max:255",
            "body" => "required|string",
        ]);
        // sending raw email
        /*Mail::raw($validated['body'], function($message) use ($validated){
            $message->to($validated['to'])
                    ->subject($validated['subject']);
        });*/
        //
        // sending HTML email
        /*Mail::to($validated["to"])
                ->send(new SendMail($validated['subject'], $validated['body']));*/
        // sending Queue email
        /*Mail::to($validated["to"])
                ->queue(new SendMail($validated['subject'], $validated['body']));*/
        // sending Queue email with delay
        Mail::to($validated["to"])
                ->later(Carbon::now()->addSeconds(30), 
                    new SendMail($validated['subject'], $validated['body'])
        );
        //
        dd($request->all());
    }
    //
    public function build(){

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
