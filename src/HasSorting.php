<?php

namespace Larapeak\InertiajsDataTables;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait HasSorting
{
    public function scopeSort(Builder $query, Request $request)
    {
        $sortables = data_get($this, 'sortables', []);

        $field = $request->get('field', 'id');

        $direction = $request->get('direction', 'asc');

        if ($field && in_array($field, $sortables) && $direction && in_array($direction, ['asc', 'desc'])) {
            return $query->orderBy($field, $direction);
        }

        return $query;
    }
}
