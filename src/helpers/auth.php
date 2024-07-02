<?php
/**
 * Created By PhpStorm
 * Code By : trungphuna
 * Date: 7/2/24
 */

use Illuminate\Support\Facades\Auth;

if (!function_exists('get_data_user')) {
    function get_data_user($type, $field = 'id')
    {
        return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field : '';
    }
}