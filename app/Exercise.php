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
            if( $title == $exercise->title) {
                return $exercise;
            }
        }

        return null;
    }

}