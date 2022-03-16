<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slug extends Model {

    use HasFactory, softDeletes, Sluggable, SluggableScopeHelpers;

    protected $fillable = [
        'slugable_type',
        'slugable_id',
        'slug',
    ];

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'slug'
            ]
        ];
    }

    public function slugeable() {
        return $this->morphTo();
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string {
        return 'slug';
    }
}
