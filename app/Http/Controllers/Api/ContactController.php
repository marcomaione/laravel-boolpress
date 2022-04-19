<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Lead;
use App\Mail\NewContact;
use Illuminate\Support\facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request) {

        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);

        if($validator->fails()) {
            return response()->json([
                'succes' => false,
                'errors'=> $validator->errors()

            ]);
        } else {
            $lead = new Lead();
            $lead->fill($data);
            $lead->save();

            Mail::to('info@boolpress.com')->send(new NewContact($lead));

            return response()->json( [
                'succes' => true
            ]);

        }

    }
}
