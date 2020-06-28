<?php

use munkireport\models\MRModel as Eloquent;

class P5_stats_model extends Eloquent
{
    protected $table = 'p5_stats';

    protected $hidden = ['id', 'serial_number'];

    protected $fillable = [
      'serial_number',
      'host_id',
      'port',
      'platform',
      'version',
      'uptime',
      'licenses',

    ];
}
