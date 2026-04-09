<?php

namespace Digitonic\FilamentNavigation\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $handle
 * @property array $items
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Navigation extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'items' => 'json',
    ];

    public static function fromHandle(string $handle): ?static
    {
        return static::query()->firstWhere('handle', $handle);
    }
}
