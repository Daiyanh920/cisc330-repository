<?php

namespace model;

class post 
{

    public function getAllPost($params) {
        //in future these will come from the database

        $allPost = [
            [
                'id' => '1',
                'name' => 'First post'
            ],
            [
                'id' => '2',
                'name' => 'Second post'
            ],
            [
                'id' => '3',
                'name' => "Third post"
            ],
        ];

        if (!empty($params['name'])) {
            return array_filter($allPost, function ($user) use ($params) {
                if (str_contains(strtolower($user['name']), $params['name'])) {
                    return $user;
                };
                return null;
            });
        }

        return $allPost;
    }

}

?>