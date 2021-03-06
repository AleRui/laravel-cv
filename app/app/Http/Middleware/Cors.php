<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    public function handle($request, Closure $next)
    {
        return $next($request)
            //Url a la que se le dará acceso en las peticiones
            ->header("Access-Control-Allow-Origin", "*")
            //Métodos que a los que se da acceso
            ->header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE")
            //Headers de la petición
            ->header("Access-Control-Allow-Headers", "X-Requested-With, Content-Type, X-Token-Auth, Authorization");

        // header('Access-Control-Allow-Origin: *');

        // $headers = [
        //     'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
        //     'Access-Control-Allow-Headers' => 'Content-Type, X-Auth-Token, Origin, Authorization',
        // ];

        // if ($request->getMethod() == 'OPTIONS') {
        //     // The client-side application can set onñy headers allowed in Access-Control-Allow_Headers.
        //     return response()->json('OK', 200, $headers);
        // }
        // $response = $next($request);
        // foreach ($headers as $key => $value) {
        //     $response->header($key, $value);
        // }
        // return $response;
    }
}
