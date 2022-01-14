<?php 

namespace ErlanggaRiansyah\ResponseHandler;

class Resp {
    public static function requestSuccess() {
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

    public static function requestEmpty(String $field) {
        return response()->json([
            "code" => 400,
            "message" => "Sorry, the ".$field." field is required and the server detects that it is empty.",
            "errors" => [
                "title" => "BAD REQUEST",
                "location" => $field,
                "reason" => "A required field or parameter hasn't been provided."
            ]
        ], 400);
    }

    public static function requestConflict(String $resource) {
        return response()->json([
            "code" => 409,
            "message" => "Sorry, the ".$resource." has already been registered into the database.",
            "errors" => [
                "title" => "CONFLICT",
                "location" => $resource,
                "reason" => "The server detects duplicate data."
            ]
        ], 409);
    }

    public static function requestNull(String $field) {
        return response()->json([
            "code" => 400,
            "message" => "Sorry, the ".$field." field is required and the server detects that it is doesn't exists.",
            "errors" => [
                "title" => "BAD REQUEST",
                "location" => $field,
                "reason" => "A required field is missing."
            ]
        ], 400);
    }

    public static function requestNotFound(String $resource) {
        return response()->json([
            "code" => 404,
            "message" => "Sorry, the resource ".$resource." not found in the database.",
            "errors" => [
                "title" => "NOT FOUND",
                "location" => $resource,
                "reason" => "Resource not found in database."
            ]
        ], 404);
    }

    public static function requestInvalid(String $field) {
        return response()->json([
            "code" => 400,
            "message" => "Sorry, the ".$field." is not valid.",
            "errors" => [
                "title" => "BAD REQUEST",
                "location" => $field,
                "reason" => "The value supplied or a combination of provided fields is invalid."
            ]
        ], 400);
    }

    public static function passwordInvalid() {
        return response()->json([
            "code" => 400,
            "message" => "Sorry, the password must contain at least 8 characters.",
            "errors" => [
                "title" => "BAD REQUEST",
                "location" => "password",
                "reason" => "The value supplied is invalid."
            ]
        ], 400);
    }

    public static function dateInvalid (String $dateField) {
        return response()->json([
            "code" => 400,
            "message" => "Sorry, the ".$dateField." format does not match the format set by the server (yyyy/MM/dd).",
            "errors" => [
                "title" => "BAD REQUEST",
                "location" => $dateField,
                "reason" => "The value supplied or a combination of provided fields is invalid."
            ]
        ], 400);
    }

    public static function accessUnauthorized(String $resource) {
        return response()->json([
            "code" => 401,
            "message" => "The request was successful but unauthorized.",
            "errors" => [
                "title" => "UNAUTHORIZED",
                "location" => $resource,
                "reason" => "The requested resource is protected."
            ]
        ], 401);
    }

    public static function requestInvalidArray(Object $resource) {
        return response()->json([
            "code" => 400,
            "message" => "Sorry, the field is not valid or missing.",
            "errors" => [
                "title" => "BAD REQUEST",
                "location" => $resource,
                "reason" => "The value supplied or a combination of provided fields is invalid or conflict."
            ]
        ], 400);
    }

    public static function timeInvalid(Object $resource) {
        return response()->json([
            "code" => 400,
            "message" => "Sorry, the time format does not match the format set by the server (H:i).",
            "errors" => [
                "title" => "BAD REQUEST",
                "location" => $resource,
                "reason" => "The value supplied or a combination of provided fields is invalid."
            ]
        ], 400);
    }
}
