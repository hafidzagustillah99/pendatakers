<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;
use Validator;
use App\Models\User;

class AuthController extends AppBaseController
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['data' => $user,'access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return response()
                ->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        $joinAt = date_format($user->created_at,"d M Y");
        $user['tanggal_gabung'] = strval($joinAt);

        switch ($user->daftar_daerah_id){
            case 3:
                $user['kabkota'] = 'balikpapan';
                break;
            case 7:
                $user['kabkota'] = 'berau';
                break;
            case 2:
                $user['kabkota'] = 'bontang';
                break;
            case 6:
                $user['kabkota'] = 'kubar';
                break;
            case 4:
                $user['kabkota'] = 'kukar';
                break;
            case 5:
                $user['kabkota'] = 'kutim';
                break;
            case 8:
                $user['kabkota'] = 'mahakam';
                break;
            case 10:
                $user['kabkota'] = 'paser';
                break;
            case 9:
                $user['kabkota'] = 'penajam';
                break;
            case 1:
                $user['kabkota'] = 'samarinda';
                break;
            case 11:
                $user['kabkota'] = 'pemprov';
                break;
            default:
                $user['kabkota'] = 'pemprov';
                break;
        }


        $token = $user->createToken('auth_token')->plainTextToken;
        return response()
            ->json([
                'message' => 'Hi '.$user->name.', welcome to pendataker',
                'access_token' => $token, 'token_type' => 'Bearer',
                'user' => $user,
            ]);
    }

    // method for user logout and delete token
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }

    public function storeTokenDevice(Request $request)
    {
        $input = $request->only('token_device');

        try {
            DB::beginTransaction();

            $users= Auth::user();
            $users->token_device=$input['token_device'];
            $users->save();

            DB::commit();
            return $this->sendResponse($users->toArray(), 'User saved successfully');
        }catch (Exception $e){
            DB::rollBack();
            return $this->sendError($e->getMessage());
        }
    }
}
