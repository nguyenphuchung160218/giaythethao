<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table ='articles';
    const HOT = 1;
    const STATUS_PUBLIC =1;
    const STATUS_PRIVATE = 0;
    protected $status = [
        1=>[
            'name'=>'Public',
            'class'=>'label-danger'
        ],
        0=>[
            'name'=>'Private',
            'class'=>'label-default'
        ]
    ];
    public function getStatus()
    {
        return data_get($this->status,$this->a_active,'[N\A]');
    }
    protected $hot = [
        1=>[
            'name'=>'Hot',
            'class'=>'label-danger'
        ],
        0=>[
            'name'=>'None',
            'class'=>'label-default'
        ]
    ];
    public function getHot()
    {
        return data_get($this->hot,$this->a_hot,'[N\A]');
    }
    public function CategoryArticle()
    {
      return $this->belongsTo(CategoryArticle::class,'id');
    }
}
