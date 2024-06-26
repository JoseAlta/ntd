<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Record;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type',
        'cost',
    ];

    public static $rules = [
        'type' => 'in:add,subtract,multiply,divide,square',
        'cost' => 'float|min:1',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
