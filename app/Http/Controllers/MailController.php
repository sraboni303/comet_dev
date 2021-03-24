<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountConfirmationMail;
use App\Mail\FridayMail;
use App\Mail\MondayMail;
use App\Mail\SaterdayMail;
use App\Mail\ThursdayMail;
use App\Mail\TuesdayMail;
use App\Mail\WednesdayMail;

class MailController extends Controller
{
    public function accountConfirmationMail(){
        $mail_body = [
            'name' => 'Full Name',
            'phone_number' => '01753755303',
            'username' => 'username',
            'email' => 'email@gmail.com',
        ];

        Mail::to('photos.sraboni@gmail.com')->send(new AccountConfirmationMail($mail_body));

        return redirect('/home');
    }



    // Monday Mail
    public function mondayMail(){
        $monday_offer = [
            'monday' => 'This is Monday Offer',
        ];

        Mail::to('photos.sraboni@gmail.com')->send(new MondayMail($monday_offer));

        return redirect('/home');
    }

    public function tuesdayMail(){
        $tuesday_offer = [
            'tuesday' => 'This is Tuesday Offer'
        ];
        Mail::to('photos.sraboni@gmail.com')->send(new TuesdayMail($tuesday_offer));
        return redirect('/home');
    }


    public function wednesdayMail(){
        $wednesday_offer = [
            'wednesday' => 'This is Wednesday offer'
        ];
        Mail::to('photos.sraboni@gmail.com')->send(new WednesdayMail($wednesday_offer));
        return redirect('/home');
    }

    public function thursdayMail(){
        $thursday_offer = [
            'thursday' => 'This is Thursday Offer'
        ];
        Mail::to('photos.sraboni@gmail.com')->send(new ThursdayMail($thursday_offer));
        return redirect('/home');
    }

    public function fridayMail(){
        $friday_offer = [
            'friday' => 'This is Friday Offer',
        ];
        Mail::to('photos.sraboni@gmail.com')->send(new FridayMail($friday_offer));
        return redirect('/home');
    }

    public function saterdayMail(){
        $saterday_offer = [
            'saterday' => 'This is Saterday Offer'
        ];
        Mail::to('photos.sraboni@gmail.com')->send(new SaterdayMail($saterday_offer));
        return redirect('/home');
    }


}
