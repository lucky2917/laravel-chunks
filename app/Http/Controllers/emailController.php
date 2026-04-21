<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeMail;
class emailController extends Controller
{
    public function sendmail(){
        $toemail = "arjun.gandreddi2005@gmail.com";
        $message = "HI, this is from laravel";
        $subject = "TESTING LARAVEL MAIL";
        
        Mail::to($toemail)->send(new welcomeMail($message, $subject));
        
        return "email sent successfully";
    }
}
