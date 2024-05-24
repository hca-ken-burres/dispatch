<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mailing extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject',
        'envelope_id',
        'message_id',
        'dataset_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'envelope_id' => 'integer',
        'message_id' => 'integer',
        'dataset_id' => 'integer',
    ];

    public function envelope(): BelongsTo
    {
        return $this->belongsTo(Envelope::class);
    }

    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }

    public function dataset(): BelongsTo
    {
        return $this->belongsTo(Dataset::class);
    }
}
