<?php


namespace App\classes;

use App\classes\User;
use App\classes\Example;
use App\classes\Example2;
use App\classes\Example3;



class Student extends Example3 implements Example, Example2
{
    use Example4;

    public $country = 'Bangladesh';

    public static $name = 'Arif';

    public function __construct()
    {
//        $this->name = 'BASIS';
//        $this->city = 'Chandpur';
    }

    public function manage()
    {
//        echo $this->country;
//        echo $this->city;
//        echo $this->name;
//        $this->index();
//        echo "Institute name is $this->name, city name is $this->city and country name is $this->country";
//        $this->four();
        echo 'hi';
    }

    public function two()
    {
        echo 'Hello Dollar Nayem';
    }

    public function index2()
    {
        echo 'hi';
    }
    public function index()
    {
        echo 'hello';
    }

    public function one()
    {
        // TODO: Implement one() method.
    }

    public static function name ()
    {
//        echo 'Hello Mehedi';
        echo self::$name;
    }

}