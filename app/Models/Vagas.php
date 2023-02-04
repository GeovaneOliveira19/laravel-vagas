<?php

namespace App\Models;

class Vagas{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'titulo' => 'Titulo Um',
                'descricao' => 'Teste de descricao um'
            ],
            [
                'id' => 2,
                'titulo' => 'Titulo Dois',
                'descricao' => 'Teste de descricao dois'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach($listings as $l)
        {
            if($l['id'] == $id)
            {
                return $l;
            }
        }
    }
}