<?php

namespace App\Helpers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtHelper
{
    public static function generateToken($data)
    {
        $key = getenv("SECRET");
        $payload = [
            'iss' => base_url(),
            'sub' => $data,
            'iat' => time(),
            'exp' => time() + (60 * 60 * 24), // Token berlaku selama 24 jam
        ];
        return JWT::encode($payload, $key, 'HS256');
    }
}
