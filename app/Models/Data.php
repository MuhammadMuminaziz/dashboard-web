<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function column()
    {
        return $this->belongsTo(Column::class);
    }

    public function desc()
    {
        return $this->belongsTo(Desc::class);
    }
    public function title()
    {
        return $this->belongsTo(Title::class);
    }
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
