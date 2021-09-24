<?php

namespace Wremon\Laralogs\Models;

use Illuminate\Database\Eloquent\Model;

class Log  extends Model
{
    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'sqlite';

    /** @var string */
    protected $table = 'laralogs_logs';

    /** @var array */
    protected $fillable = ['user_id', 'user', 'detail', 'ip_address'];
}
