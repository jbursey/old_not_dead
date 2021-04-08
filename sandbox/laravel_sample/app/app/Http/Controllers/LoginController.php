<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $username = $request->get("username");
        $password = $request->get("password");
        
        $foundUser = User::where("email", "jeffrey.bursey8806@live.com")->first();
        
        if($foundUser != null)
        {
            if(Hash::check($password, $foundUser->password))
            {                
                Auth::login($foundUser);
                //return view("secretview");
                return redirect("/secretview");
            }
            else
            {
                $data = [];
                $data["users"] = [$foundUser];
                $data["userReqs"] = [];
                $data["temp"] = $username.$password;
                        
                //return redirect("users")->with("zzz", $data);
                return view("users")->with("zzz", $data);     
            }
        }

        // $user = new User();
        // $user->name = "jeff";
        // $user->email = "jeffrey.bursey8806@live.com";
        // $user->password = Hash::make("password");
        // //$user->created_at = new Date();
        // //$user->updated_at = new Date();
        // $user->save();

   
    }
}
