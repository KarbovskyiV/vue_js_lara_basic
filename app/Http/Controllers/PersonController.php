<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                [

                    'id' => 1,
                    'name' => 'Name',
                    'age' => 22,
                    'job' => 'coach',

                ],
                'id' => 2,
                'name' => 'Name 2',
                'age' => 23,
                'job' => 'second coach',
            ],
            [
                'id' => 3,
                'name' => 'Name 3',
                'age' => 24,
                'job' => 'third coach',
            ],
            [
                'id' => 4,
                'name' => 'Name 4',
                'age' => 19,
                'job' => 'fourth coach',
            ],
            [
                'id' => 5,
                'name' => 'Name 5',
                'age' => 26,
                'job' => 'fifth coach',
            ],
        ];

        return $persons;
    }
}
