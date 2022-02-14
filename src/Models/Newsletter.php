<?php

namespace Tec\Newsletter\Models;

use Tec\Base\Models\BaseModel;
use Tec\Base\Traits\EnumCastable;
use Tec\Newsletter\Enums\NewsletterStatusEnum;

class Newsletter extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'newsletters';

    /**
     * @var array
     */
    protected $fillable = [
        'email',
        'name',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => NewsletterStatusEnum::class,
    ];
}
