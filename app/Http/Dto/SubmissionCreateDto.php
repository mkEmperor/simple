<?php

namespace App\Http\Dto;

final class SubmissionCreateDto
{
    /** @var string */
    private string $name;

    /** @var string */
    private string $email;

    /** @var string */
    private string $message;

    public function __construct(string $name, string $email, string $message)
    {
        $this->name = trim($name);
        $this->email = trim($email);
        $this->message = trim($message);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
