<?php namespace App\Http\Middleware;

use Closure;
use Response;

class EnableCrossRequestMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        // 指定允许其他域名访问 * 代表所有网址都允许访问
        // $origin = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] : '';
        // $allow_origin = array( //指定特定域名可访问
        //     'http://www.client.com',
        //     'http://www.client2.com'
        // );
        // if(in_array($origin, $allow_origin)){
        //     $response->header('Access-Control-Allow-Origin', config($origin));
        // }
        $response->header('Access-Control-Allow-Origin', config('*'));
        // 响应头设置
        $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, Accept');
        // 响应类型
        $response->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, OPTIONS');
        // $response->header('Access-Control-Allow-Credentials', 'true');//需要认证时才加
        return $response;
    }

}