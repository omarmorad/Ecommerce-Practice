code
PHP
download
content_copy
expand_less
<?php

namespace App\Http\Controllers\Api;

abstract class BaseController extends \App\Http\Controllers\Controller
{
    protected function success($data = null, $message = 'Success', $code = 200)
    {
        return response()->json(
            ['status' => true, 'message' => $message] +
            ($data ? ['data' => $data] : []),
            $code
        );
    }

    protected function error($message = 'Error', $errors = null, $code = 400)
    {
        return response()->json(
            ['status' => false, 'message' => $message] +
            ($errors ? ['errors' => $errors] : []),
            $code
        );
    }
}
