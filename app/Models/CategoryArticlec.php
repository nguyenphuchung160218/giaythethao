<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategoryArticlec extends Model
{
    use HasFactory;
    protected $table ='categoryarticles';
    const HOME_PUBLIC =1;
    const HOME_PRIVATE =0;
    protected $home = [
        1=>[
            'name'=>'Public',
            'class'=>'label-primary'
        ],
        0=>[
            'name'=>'Private',
            'class'=>'label-default'
        ]
    ];
    public function getHome()
    {
        return data_get($this->home,$this->c_hot_article,'[error]');
    }
      public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
