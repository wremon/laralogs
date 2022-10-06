<?php

namespace Wremon\Laralogs\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Log extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'laralogs_logs';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['authenticatable_id', 'authenticatable_type'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'source',
        'event',
        'ip_address',
        'user_agent',
        'browser',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setConnection(config('laralogs.db_connection'));
    }

    /**
     * Get the parent authenticatable model.
     */
    public function authenticatable(): MorphTo
    {
        return $this->morphTo();
    }
}
