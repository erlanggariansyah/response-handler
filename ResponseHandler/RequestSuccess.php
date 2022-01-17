<?php

namespace ErlanggaRiansyah\ResponseHandler;

class RequestSuccess {
    private String $args;

    public function __constructor (String $args) {
        $this->args = $args;
    }

    public function getStatus() {
        return 200;     
    }

    public static function getResponse($args) {
        return response()->json([
            "code" => 200,
            "message" => "success",
            "details" => [
                "title" => "OK",
                "location" => null,
                "reason" => "The request was successful."
            ]
        ], 200);
    }

    public static function getMessage() {
        return "success";
    }
}