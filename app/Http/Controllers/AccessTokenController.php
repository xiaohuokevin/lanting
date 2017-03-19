<?php
namespace App\Http\Controllers;

/**
 * author: xiaohuo <xiaohuokevin@163.com>
 * date:   2017/3/19
 */

class AccessTokenController extends Controller
{
    public function index()
    {
        $test = [
            'username'  => 'xiaohuo',
            'email'     => 'xiaohuokevin@163.com',
            'timestamp' => date('Y-md-d H:i:s', time())
        ];

        echo json_encode($test);die;
    }
}
