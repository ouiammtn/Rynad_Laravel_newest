<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\BrevoServiceProvider;


class BrevoController extends Controller
{
    protected $brevoService;

    public function __construct(BrevoServiceProvider $brevoService)
    {
        $this->brevoService = $brevoService;
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'f_name' => 'string|max:255',
            'l_name' => 'string|max:255',
            'MESSAGE' => 'string|max:255',

            // Add other validation rules as necessary
        ]);

        $email = $request->input('email');
        $f_name = $request->input('f_name');
        $l_name = $request->input('l_name');
        $message = $request->input('message');
        // Add other attributes as necessary

        $attributes = ['CONTACT'=>$email , 'PRENOM' => $f_name,'NOM' => $l_name, 'MESSAGE'=>$message];
        $listIds = [4]; // Replace with your actual list ID(s)

        $result = $this->brevoService->addContactToList($email, $attributes, $listIds);

        if (is_string($result)) {
            // Handle error
            return redirect()->back()->with('error', $result);
        }

        // Handle success
        return redirect()->back()->with('success', 'Contact added successfully!');
    }
}
