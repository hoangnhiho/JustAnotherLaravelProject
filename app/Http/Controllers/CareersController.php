<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Request;
use App\Models\Career;
use Mail;

class CareersController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::get();
        return view('frontend.careersIndex', compact('careers'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($careerId)
    {
        $career = Career::find($careerId);
        return view('frontend.careersShow', compact('career'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store($careerId, Request $request)
    {
        $input = $request->all();
        $career = Career::find($careerId);

        // $cvFile = Request::file('cv_file');

        // // This would be used for the payload
        // $cvFilePath = $cvFile->getPathName() . 'pdf';


        // Send Mail
        $mailData['input']=(object)$input;
        Mail::send('emails.job', $mailData, function ($message) use ($input,$request){
            $message->to('frank.law@homestates.com.au')->subject('Job Application');
            $message->attach($request->file('cv_file')->getRealPath(), [
                'as' => 'cover_letter', 
                'mime' => $request->file('cv_file')->getMimeType()
            ]);
            $message->attach($request->file('resume')->getRealPath(), [
                'as' => 'resume', 
                'mime' => $request->file('resume')->getMimeType()
            ]);
        });

        $message = 'Thank You';
        $caption = 'Your Job applcation has been sent.';
        return view('frontend.message', compact('message', 'caption'));
    
        // return view('frontend.careersShow', compact('career'));
    }

}
