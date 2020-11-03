<?php

namespace App\Helpers;

class APIHelpers
{
    /**
     * @param $is_error boolean for defining error / success respone
     * @param $code is defining code of error like 404, etc.
     * @param $message is defining to show custom error / success message
     * @param $content is defining to die dump data
     */
    public static function createAPIResponse($is_error,$code,$message,$content)
    {
        $result = [];
        if ($is_error) {
            $result['success'] = false;
            $result['code'] = $code;
            $result['message'] = $message;
        } else {
            $result['success'] = true;
            $result['code'] = $code;
            if ($content == null) {
                $result['message'] = $message;
            } else {
                $result['data'] = $content;
            }
        }
        return $result;
    }
}
