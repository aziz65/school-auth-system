<?php

namespace App\Models;

class Student
{
    private $id;
    private $name;
    private $email;
    private $qrCode;

    public function __construct($id, $name, $email, $qrCode)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->qrCode = $qrCode;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getQrCode()
    {
        return $this->qrCode;
    }

    public function generateQrCode()
    {
        // Logic to generate a QR code
    }
}