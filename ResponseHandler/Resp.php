<?php 

namespace ErlanggaRiansyah\ResponseHandler;

class Resp {
    public static function loginUnsuccessfull($credential = "email", $password = "password") : Object {
        return response()->json([
            "code" => 401,
            "message" => "The " . $credential . " or " . $password . " is wrong.",
            "errors" => [
                "title" => "UNAUTHORIZED",
                "location" => [
                    $credential, $password
                ],
                "reason" => "The requested resource is protected."
            ]
        ], 401);
    }

    public static function requestCreated() : Object {
        return response()->json([
            "code" => 201,
            "message" => "success",
            "details" => [
                "title" => "CREATED",
                "location" => $field,
                "reason" => "The resource " . $field . " was created successfully."
            ]
        ], 201);
    }

    public static function requestSuccess() : Object {
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

    public static function requestEmpty(String $field) : Object {
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

    public static function requestConflict(String $resource) : Object {
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

    public static function requestNull(String $field) : Object {
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

    public static function requestNotFound(String $resource) : Object {
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

    public static function requestInvalid(String $field) : Object {
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

    public static function passwordInvalid() : Object {
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

    public static function dateInvalid (String $dateField) : Object {
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

    public static function accessUnauthorized(String $resource) : Object {
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

    public static function requestInvalidArray(Object $resource) : Object {
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

    public static function timeInvalid(Object $resource) : Object {
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

    public static function requestNotAcceptable(String $resource) : Object {
        return response()->json([
            "code" => 406,
            "message" => "Sorry, the server is unwilling to supply a default representation.",
            "errors" => [
                "title" => "NOT ACCEPTABLE",
                "location" => $resource,
                "reason" => "The server cannot produce a response matching the list of acceptable values defined in the request's proactive content negotiation headers."
            ]
        ], 406);
    }
}
