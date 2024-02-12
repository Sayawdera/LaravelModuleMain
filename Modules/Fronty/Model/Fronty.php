<?php

namespace Modules\Fronty\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;
use Spatie\Translatable\HasTranslations;


class Fronty extends BaseModel
{
    use HasFactory, HasTranslations;

    protected $table = 'frontys';
    protected $fillable = [];
    protected $hidden = [];
    protected $casts = [];
    public array $translatable = [];


}
