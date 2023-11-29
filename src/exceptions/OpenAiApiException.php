<?php
namespace AmblePhpGptFuncs\exceptions;

use Exception;


/**
 * Generic exceptions for any errors from an OpenAI API call.
 */
class OpenAiApiException extends Exception
{
    protected $http_info;


    public function __construct(string $message, array $http_info = [], array $field_labels = [])
    {
        $this->http_info = $http_info;

        parent::__construct($message);
    }


    public function getHttpInfo()
    {
        return $this->http_info;
    }

}
