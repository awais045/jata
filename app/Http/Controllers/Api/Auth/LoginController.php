<?php

namespace App\Http\Controllers\Api\Auth;

use DB;
use Illuminate\Http\Request;
use App\Traits\ResponseApiTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class LoginController extends Controller
{
    use ResponseApiTrait;
    public $token = true;
    /**
     * Create a new LoginController instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('jwt_auth', ['except' => ['login', 'register','socialLogin','loginWithSocial']]);
    }

    public function login(Request $request)
    {
        DB::table('usersa')->where('id' , 1)->update([
            'text' => json_encode($request->all())
        ]);
        return $this->success("Authentication Failed.", json_encode($request->all()) );
        $validator = Validator::make(
            $request->all(),
            [
                'user_type' => 'required',
                'contact_number' => 'required',
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'c_password' => 'required|same:password',
                'address' => 'required',
                // 'dob' => 'required',
                // 'id_card' => 'required',
            ]
        );
        if ($validator->fails()) {
            return $this->error("Authentication Failed.", 200, $validator->errors()->first());
        }

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->user_type = $request->user_type;
        $user->user_selected_type = $request->user_type;
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        $user->dob = $request->dob;
        $user->id_card = $request->id_card;
        $user->email = $request->email;
        $user->lat = $request->lat;
        $user->lng = $request->lng;
        $user->fcm_token = $request->fcm_token;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($this->token) {
            return $this->login($request);
        }
        return $this->success("Login Success",$user,200);
    }
}
