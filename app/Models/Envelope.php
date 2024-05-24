<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Envelope extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_id',
        'replyto',
        'cc',
        'bcc',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'from_id' => 'integer',
        'replyto' => 'array',
        'cc' => 'array',
        'bcc' => 'array',
    ];

    public function from(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }
}
