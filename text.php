<?php

class CustomException extends Exception
{
    public function errorMessage()
    {
        return       $this->getLine() . ' in :' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
    }
}

$email = "someone@example..com";

try {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new CustomException($email);
    }
} catch (CustomException $e) {
    echo $e->errorMessage();
}