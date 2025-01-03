<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Computer;

class Issue extends Model
{
    protected $fillable = ['computer_id', 'reported_by', 'reported_date', 'description', 'urgency', 'status'];

    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}
