<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\EducationHistory;
use App\Models\Projects;
use App\Models\WorkExperiences;
use App\Rules\ValidRecaptcha;
use Illuminate\Http\Request;
use App\Models\Paragraphs;
use Illuminate\Support\Facades\Mail;
use Validator;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $paragraphs = Paragraphs::getParagraphs();
        $educations = EducationHistory::all();
        $experiences = WorkExperiences::orderBy('start_date')->get();
        $projects = Projects::take(3)->orderBy('sort')->get();
        return view('home.index', compact('paragraphs', 'educations', 'experiences', 'projects'));

    }

    public function contactUs(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'budget' => 'required',
            'message' => 'required',
        ];
        if (env('APP_ENV') == 'production') {
            $rules['g-recaptcha-response'] = ['required', new ValidRecaptcha()];
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $contact = new Contact();
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->budget = $request->get('budget');
        $contact->message = $request->get('message');
        $contact->save();
        Mail::send(['text' => 'partials.contact-us-email'], compact('contact'), function ($message) {
            $message->to('contact@mbfouad.com', 'Contact Me')->subject
            ('New Contact message');
            $message->from('contact@mbfouad.com', 'Contact Me');
        });
        return redirect()->back()->with('success', 'Thanks For Contact us');
    }
}
