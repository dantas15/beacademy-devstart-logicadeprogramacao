<?php

namespace App;

class Exercise
{

    /**
     * @param $attributes array
     */
    public function __construct($attributes = [])
    {
        if (!is_null($attributes)) {
            $this->title = $attributes['title'];
            $this->description = $attributes['description'];
        }
    }

    /**
     * Exercise title and unique identifier
     * @var string
     */
    public $title;

    /**
     * Exercise description
     * @var string
     */
    public $description;

    /**
     * @return Exercise[]
     */
    public static function getExercises()
    {
        $exercisesArr = [
            0 => [
                'title' => 'exercise-01',
                'description' => 'Basic input and output form',
            ],
            1 => [
                'title' => 'exercise-02',
                'description' => 'Body mass index calculation'
            ],
            2 => [
                'title' => 'exercise-03',
                'description' => 'If conditionals introduction.'
            ],
            3 => [
                'title' => 'exercise-04',
                'description' => 'Update balance based on income input'
            ],
            4 => [
                'title' => 'exercise-05',
                'description' => 'Improved BMI calculator',
            ],
            5 => [
                'title' => 'exercise-06',
                'description' => 'If-Else fundamentals exercise',
            ],
            6 => [
                'title' => 'exercise-07',
                'description' => 'Improved balance manager',
            ],
            7 => [
                'title' => 'exercise-08',
                'description' => '2 number calculators using radio buttons for the 4 operations: + - * /',
            ],
            8 => [
                'title' => 'exercise-09',
                'description' => 'Shows how to calculate Square and Triangle perimeter and area',
            ],
            9 => [
                'title' => 'exercise-10',
                'description' => 'Improved balance manager with money transfer',
            ],
            10 => [
                'title' => 'exercise-11',
                'description' => 'Multiplication table of a chosen number using for loop'
            ],
            11 => [
                'title' => 'exercise-12',
                'description' => 'Shows multiples of 2 (pair numbers) between 0 and 100 using for loop'
            ],
            12 => [
                'title' => 'exercise-13',
                'description' => 'Shows multiples of 3 between 2 numbers chosen using for loop'
            ],
            13 => [
                'title' => 'exercise-14',
                'description' => 'Select how many balance transactions you want to make.',
            ],
            14 => [
                'title' => 'exercise-15.php',
                'description' => 'Multiplication table of a chosen number using while loop'
            ],
            15 => [
                'title' => 'exercise-16',
                'description' => 'Login form',
            ],
            16 => [
                'title' => 'exercise-17',
                'description' => 'Balance manager with loan option',
            ],
            17 => [
                'title' => 'scripts/exercise-18',
                'description' => 'Login with do {} while () loop',
            ],

        ];

        $exercises = array();

        foreach ($exercisesArr as $exercise) {
            $exercises[] = new Exercise($exercise);
        }

        return $exercises;
    }

    /**
     * @param $title string
     * @return Exercise|null
     */
    public static function getExercise($title)
    {
        $exercises = Exercise::getExercises();

        foreach ($exercises as $exercise) {
            if ($title == $exercise->title) {
                return $exercise;
            }
        }

        return null;
    }

}