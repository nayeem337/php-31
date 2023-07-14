<?php


namespace App\classes;


class User
{
    protected $name = 'BITM';
    protected $city = 'Dhaka';

    public function indexa ()
    {
        echo 'Institute Name is '.$this->name.' and city is '.$this->city;
    }
}