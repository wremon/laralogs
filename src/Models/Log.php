<?php

namespace Wremon\Laralogs\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected string $table = 'laralogs_logs';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected array $guarded = ['authenticatable_id', 'authenticatable_type'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected array $fillable = [
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
    public function authenticatable()
    {
        return $this->morphTo();
    }
}
