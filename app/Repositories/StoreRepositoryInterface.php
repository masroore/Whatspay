<?php

namespace App\Repositories;

use App\Repositories\EloquentRepositoryInterface;
use phpDocumentor\Reflection\Types\Boolean;
use Illuminate\Database\Eloquent\Collection;

interface StoreRepositoryInterface extends EloquentRepositoryInterface {
    //public function deleteStores(array $where, int $user_id): ?bool;
    /**
     * Find model by column.
     *
     * @param array $whereIn
     * @param array $where
     * @param array $columns
     * @return Collection
     */
    public function findByMultipleColumns(
        string $column,
        array $whereIn,
        array $where,
        array $columns = ['*']
    ): ?Collection;

    /**
     * Delete model by column.
     *
     * @param array $column
     * @param array $where
     * @return bool
     */
    public function deleteMultipleByColumn(string $column, array $where): bool;
}
