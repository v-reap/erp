<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class TaskType extends BaseType
{
    protected $attributes = [
        'name' => 'TaskType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The id of the task'
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'The title of the task'
            ]
        ];
    }

//    protected function resolveEmailField($root, $args)
//    {
//        return strtolower($root->email);
//    }
}