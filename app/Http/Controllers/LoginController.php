<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function codeForId(Request $request){
        $param = $request->all();
        $code = $param['code'];
        // dd($code);
        $appId = 'wx87364ff91582169d';
        $appSecret = 'b114ff31fb366d01711851ae15de3af0';
        $openId = file_get_contents('https://api.weixin.qq.com/sns/jscode2session?appid='.$appId.'&secret='.$appSecret.'&js_code='.$code.'&grant_type=authorization_code');
        return response()->json([
            'data'=>$openId
        ],200);
    }
}
