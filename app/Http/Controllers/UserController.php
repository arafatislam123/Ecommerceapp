<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\OTPMail;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Mail;
use App\Models\User; // Import the User model

class UserController extends Controller
{
    public function Userlogin(Request $request): JsonResponse
    {
        try {
            $UserEmail = $request->input('UserEmail'); // Use input method
            $OTP = rand(1000, 9999);
            $details = [
                'code' => $OTP,
            ];
            Mail::to($UserEmail)->send(new OTPMail($details));
            User::updateOrCreate(['email' => $UserEmail], ['OTP' => $OTP]);
            return ResponseHelper::Out('success', 'OTP sent to your email', 200);
        } catch (Exception $e) {
            return ResponseHelper::Out('error', $e->getMessage(), 500);
        }
    }
}
