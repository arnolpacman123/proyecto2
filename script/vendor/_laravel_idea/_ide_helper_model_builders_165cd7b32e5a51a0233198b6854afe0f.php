<?php //32ce21a883f7c07cdba04a00b916a64d
/** @noinspection all */

namespace LaravelIdea\Helper\Overtrue\LaravelFollow {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Overtrue\LaravelFollow\UserFollower;

    /**
     * @method UserFollower|$this shift()
     * @method UserFollower|$this pop()
     * @method UserFollower|null get($key, $default = null)
     * @method UserFollower|null pull($key, $default = null)
     * @method UserFollower|null first(callable $callback = null, $default = null)
     * @method UserFollower|null firstWhere(string $key, $operator = null, $value = null)
     * @method UserFollower|null find($key, $default = null)
     * @method UserFollower[] all()
     * @method UserFollower|null last(callable $callback = null, $default = null)
     * @method UserFollower|$this random(int|null $number = null)
     */
    class _IH_UserFollower_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserFollower[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_UserFollower_QB whereId($value)
     * @method _IH_UserFollower_QB whereFollowingId($value)
     * @method _IH_UserFollower_QB whereFollowerId($value)
     * @method _IH_UserFollower_QB whereAcceptedAt($value)
     * @method _IH_UserFollower_QB whereCreatedAt($value)
     * @method _IH_UserFollower_QB whereUpdatedAt($value)
     * @method UserFollower create(array $attributes = [])
     * @method _IH_UserFollower_C|UserFollower[] cursor()
     * @method UserFollower|null|_IH_UserFollower_C|UserFollower[] find($id, array $columns = ['*'])
     * @method _IH_UserFollower_C|UserFollower[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method UserFollower|_IH_UserFollower_C|UserFollower[] findOrFail($id, array $columns = ['*'])
     * @method UserFollower|_IH_UserFollower_C|UserFollower[] findOrNew($id, array $columns = ['*'])
     * @method UserFollower first(array|string $columns = ['*'])
     * @method UserFollower firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method UserFollower firstOrCreate(array $attributes, array $values = [])
     * @method UserFollower firstOrFail(array $columns = ['*'])
     * @method UserFollower firstOrNew(array $attributes = [], array $values = [])
     * @method UserFollower firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserFollower forceCreate(array $attributes)
     * @method _IH_UserFollower_C|UserFollower[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserFollower_C|UserFollower[] get(array|string $columns = ['*'])
     * @method UserFollower getModel()
     * @method UserFollower[] getModels(array|string $columns = ['*'])
     * @method _IH_UserFollower_C|UserFollower[] hydrate(array $items)
     * @method UserFollower make(array $attributes = [])
     * @method UserFollower newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserFollower[]|_IH_UserFollower_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|UserFollower[]|_IH_UserFollower_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserFollower updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserFollower_QB extends _BaseBuilder {}
}
