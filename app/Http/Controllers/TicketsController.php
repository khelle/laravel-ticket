<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

class TicketsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showTicketsForm()
    {
        return view('tickets');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function storeTicket(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required'
            ]
        );

        if ($validator->fails()) {
            return [
                'success'  => false,
                'response' => $validator->messages()->first()
            ];
        }

        $uuid = Uuid::uuid1();

        Ticket::create([
            'unique_id' => $uuid,
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'email' => $request->get('email')
        ]);

        return [
            'success'  => true,
            'response' => "Ticket has been created. Its id is $uuid"
        ];
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function redeemTicket(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'uuid' => 'required'
            ]
        );

        if ($validator->fails()) {
            return [
                'success'  => false,
                'response' => $validator->messages()->first()
            ];
        }

        $ticket = Ticket::where('unique_id', $request->get('uuid'))->first();

        if ($ticket === null || $ticket->getAttribute('is_redeemed') != false)
        {
            return [
                'success'  => false,
                'response' => 'Ticket does not exist or is already redeemed'
            ];
        }

        $ticket->is_redeemed = 1;
        $ticket->save();

        return [
            'success'  => true,
            'response' => 'Ticket has been redeemed'
        ];
    }
}
