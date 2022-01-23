<?php

namespace ErlanggaRiansyah\ResponseHandler;

class RequestSuccess {

    public static function getStatus() {
        return response()->json([], 200);     
    }

    public static function getResponse($args) {
        return response()->json([
            "code" => 200,
            "message" => "success",
            "details" => [
                "title" => "OK",
                "location" => $args,
                "reason" => "The request was successful."
            ]
        ], 200);
    }

    public static function getMessage() {
        return response()->json(["success"], 200);
    }

    public static function getDetails($args) {
        return response()->json([
            "title" => "OK",
            "location" => $args,
            "reason" => "The request was successful."
        ], 200);
    }
}