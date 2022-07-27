<?php //2e6f2540ae40dff608ed1e345b04ef45
/** @noinspection all */

namespace LaravelIdea\Helper\App {

    use App\Advertising;
    use App\Comment;
    use App\Language;
    use App\Monetization;
    use App\Notification;
    use App\Option;
    use App\Page;
    use App\Report;
    use App\Role;
    use App\Sponsor;
    use App\User;
    use App\Verification;
    use App\Video;
    use App\Withdraw;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Advertising|$this shift()
     * @method Advertising|$this pop()
     * @method Advertising|null get($key, $default = null)
     * @method Advertising|null pull($key, $default = null)
     * @method Advertising|null first(callable $callback = null, $default = null)
     * @method Advertising|null firstWhere(string $key, $operator = null, $value = null)
     * @method Advertising|null find($key, $default = null)
     * @method Advertising[] all()
     * @method Advertising|null last(callable $callback = null, $default = null)
     * @method Advertising|$this random(int|null $number = null)
     */
    class _IH_Advertising_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Advertising[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Advertising_QB whereId($value)
     * @method _IH_Advertising_QB whereUserId($value)
     * @method _IH_Advertising_QB whereTitle($value)
     * @method _IH_Advertising_QB whereUrl($value)
     * @method _IH_Advertising_QB whereMedia($value)
     * @method _IH_Advertising_QB whereCountry($value)
     * @method _IH_Advertising_QB wherePricing($value)
     * @method _IH_Advertising_QB whereTotalLimit($value)
     * @method _IH_Advertising_QB whereStatus($value)
     * @method _IH_Advertising_QB whereResult($value)
     * @method _IH_Advertising_QB whereTotalSpent($value)
     * @method _IH_Advertising_QB whereCreatedAt($value)
     * @method _IH_Advertising_QB whereUpdatedAt($value)
     * @method Advertising create(array $attributes = [])
     * @method _IH_Advertising_C|Advertising[] cursor()
     * @method Advertising|null|_IH_Advertising_C|Advertising[] find($id, array $columns = ['*'])
     * @method _IH_Advertising_C|Advertising[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Advertising|_IH_Advertising_C|Advertising[] findOrFail($id, array $columns = ['*'])
     * @method Advertising|_IH_Advertising_C|Advertising[] findOrNew($id, array $columns = ['*'])
     * @method Advertising first(array|string $columns = ['*'])
     * @method Advertising firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Advertising firstOrCreate(array $attributes, array $values = [])
     * @method Advertising firstOrFail(array $columns = ['*'])
     * @method Advertising firstOrNew(array $attributes = [], array $values = [])
     * @method Advertising firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Advertising forceCreate(array $attributes)
     * @method _IH_Advertising_C|Advertising[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Advertising_C|Advertising[] get(array|string $columns = ['*'])
     * @method Advertising getModel()
     * @method Advertising[] getModels(array|string $columns = ['*'])
     * @method _IH_Advertising_C|Advertising[] hydrate(array $items)
     * @method Advertising make(array $attributes = [])
     * @method Advertising newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Advertising[]|_IH_Advertising_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Advertising[]|_IH_Advertising_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Advertising updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Advertising_QB extends _BaseBuilder {}

    /**
     * @method Comment|$this shift()
     * @method Comment|$this pop()
     * @method Comment|null get($key, $default = null)
     * @method Comment|null pull($key, $default = null)
     * @method Comment|null first(callable $callback = null, $default = null)
     * @method Comment|null firstWhere(string $key, $operator = null, $value = null)
     * @method Comment|null find($key, $default = null)
     * @method Comment[] all()
     * @method Comment|null last(callable $callback = null, $default = null)
     * @method Comment|$this random(int|null $number = null)
     */
    class _IH_Comment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Comment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Comment_QB whereId($value)
     * @method _IH_Comment_QB whereUserId($value)
     * @method _IH_Comment_QB whereVideoId($value)
     * @method _IH_Comment_QB whereParentId($value)
     * @method _IH_Comment_QB whereMentionId($value)
     * @method _IH_Comment_QB whereMessage($value)
     * @method _IH_Comment_QB whereCreatedAt($value)
     * @method _IH_Comment_QB whereUpdatedAt($value)
     * @method Comment create(array $attributes = [])
     * @method _IH_Comment_C|Comment[] cursor()
     * @method Comment|null|_IH_Comment_C|Comment[] find($id, array $columns = ['*'])
     * @method _IH_Comment_C|Comment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Comment|_IH_Comment_C|Comment[] findOrFail($id, array $columns = ['*'])
     * @method Comment|_IH_Comment_C|Comment[] findOrNew($id, array $columns = ['*'])
     * @method Comment first(array|string $columns = ['*'])
     * @method Comment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Comment firstOrCreate(array $attributes, array $values = [])
     * @method Comment firstOrFail(array $columns = ['*'])
     * @method Comment firstOrNew(array $attributes = [], array $values = [])
     * @method Comment firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Comment forceCreate(array $attributes)
     * @method _IH_Comment_C|Comment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Comment_C|Comment[] get(array|string $columns = ['*'])
     * @method Comment getModel()
     * @method Comment[] getModels(array|string $columns = ['*'])
     * @method _IH_Comment_C|Comment[] hydrate(array $items)
     * @method Comment make(array $attributes = [])
     * @method Comment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Comment[]|_IH_Comment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Comment[]|_IH_Comment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Comment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Comment_QB extends _BaseBuilder {}

    /**
     * @method Language|$this shift()
     * @method Language|$this pop()
     * @method Language|null get($key, $default = null)
     * @method Language|null pull($key, $default = null)
     * @method Language|null first(callable $callback = null, $default = null)
     * @method Language|null firstWhere(string $key, $operator = null, $value = null)
     * @method Language|null find($key, $default = null)
     * @method Language[] all()
     * @method Language|null last(callable $callback = null, $default = null)
     * @method Language|$this random(int|null $number = null)
     */
    class _IH_Language_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Language[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Language_QB whereId($value)
     * @method _IH_Language_QB whereName($value)
     * @method _IH_Language_QB whereCode($value)
     * @method _IH_Language_QB whereStatus($value)
     * @method _IH_Language_QB whereCreatedAt($value)
     * @method _IH_Language_QB whereUpdatedAt($value)
     * @method Language create(array $attributes = [])
     * @method _IH_Language_C|Language[] cursor()
     * @method Language|null|_IH_Language_C|Language[] find($id, array $columns = ['*'])
     * @method _IH_Language_C|Language[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Language|_IH_Language_C|Language[] findOrFail($id, array $columns = ['*'])
     * @method Language|_IH_Language_C|Language[] findOrNew($id, array $columns = ['*'])
     * @method Language first(array|string $columns = ['*'])
     * @method Language firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Language firstOrCreate(array $attributes, array $values = [])
     * @method Language firstOrFail(array $columns = ['*'])
     * @method Language firstOrNew(array $attributes = [], array $values = [])
     * @method Language firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Language forceCreate(array $attributes)
     * @method _IH_Language_C|Language[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Language_C|Language[] get(array|string $columns = ['*'])
     * @method Language getModel()
     * @method Language[] getModels(array|string $columns = ['*'])
     * @method _IH_Language_C|Language[] hydrate(array $items)
     * @method Language make(array $attributes = [])
     * @method Language newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Language[]|_IH_Language_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Language[]|_IH_Language_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Language updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Language_QB extends _BaseBuilder {}

    /**
     * @method Monetization|$this shift()
     * @method Monetization|$this pop()
     * @method Monetization|null get($key, $default = null)
     * @method Monetization|null pull($key, $default = null)
     * @method Monetization|null first(callable $callback = null, $default = null)
     * @method Monetization|null firstWhere(string $key, $operator = null, $value = null)
     * @method Monetization|null find($key, $default = null)
     * @method Monetization[] all()
     * @method Monetization|null last(callable $callback = null, $default = null)
     * @method Monetization|$this random(int|null $number = null)
     */
    class _IH_Monetization_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Monetization[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Monetization_QB whereId($value)
     * @method _IH_Monetization_QB whereUserId($value)
     * @method _IH_Monetization_QB whereStatus($value)
     * @method _IH_Monetization_QB whereCreatedAt($value)
     * @method _IH_Monetization_QB whereUpdatedAt($value)
     * @method Monetization create(array $attributes = [])
     * @method _IH_Monetization_C|Monetization[] cursor()
     * @method Monetization|null|_IH_Monetization_C|Monetization[] find($id, array $columns = ['*'])
     * @method _IH_Monetization_C|Monetization[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Monetization|_IH_Monetization_C|Monetization[] findOrFail($id, array $columns = ['*'])
     * @method Monetization|_IH_Monetization_C|Monetization[] findOrNew($id, array $columns = ['*'])
     * @method Monetization first(array|string $columns = ['*'])
     * @method Monetization firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Monetization firstOrCreate(array $attributes, array $values = [])
     * @method Monetization firstOrFail(array $columns = ['*'])
     * @method Monetization firstOrNew(array $attributes = [], array $values = [])
     * @method Monetization firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Monetization forceCreate(array $attributes)
     * @method _IH_Monetization_C|Monetization[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Monetization_C|Monetization[] get(array|string $columns = ['*'])
     * @method Monetization getModel()
     * @method Monetization[] getModels(array|string $columns = ['*'])
     * @method _IH_Monetization_C|Monetization[] hydrate(array $items)
     * @method Monetization make(array $attributes = [])
     * @method Monetization newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Monetization[]|_IH_Monetization_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Monetization[]|_IH_Monetization_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Monetization updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Monetization_QB extends _BaseBuilder {}

    /**
     * @method Notification|$this shift()
     * @method Notification|$this pop()
     * @method Notification|null get($key, $default = null)
     * @method Notification|null pull($key, $default = null)
     * @method Notification|null first(callable $callback = null, $default = null)
     * @method Notification|null firstWhere(string $key, $operator = null, $value = null)
     * @method Notification|null find($key, $default = null)
     * @method Notification[] all()
     * @method Notification|null last(callable $callback = null, $default = null)
     * @method Notification|$this random(int|null $number = null)
     */
    class _IH_Notification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Notification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Notification_QB whereId($value)
     * @method _IH_Notification_QB whereUserId($value)
     * @method _IH_Notification_QB whereParentId($value)
     * @method _IH_Notification_QB whereBody($value)
     * @method _IH_Notification_QB whereLink($value)
     * @method _IH_Notification_QB whereStatus($value)
     * @method _IH_Notification_QB whereCreatedAt($value)
     * @method _IH_Notification_QB whereUpdatedAt($value)
     * @method Notification create(array $attributes = [])
     * @method _IH_Notification_C|Notification[] cursor()
     * @method Notification|null|_IH_Notification_C|Notification[] find($id, array $columns = ['*'])
     * @method _IH_Notification_C|Notification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Notification|_IH_Notification_C|Notification[] findOrFail($id, array $columns = ['*'])
     * @method Notification|_IH_Notification_C|Notification[] findOrNew($id, array $columns = ['*'])
     * @method Notification first(array|string $columns = ['*'])
     * @method Notification firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Notification firstOrCreate(array $attributes, array $values = [])
     * @method Notification firstOrFail(array $columns = ['*'])
     * @method Notification firstOrNew(array $attributes = [], array $values = [])
     * @method Notification firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Notification forceCreate(array $attributes)
     * @method _IH_Notification_C|Notification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Notification_C|Notification[] get(array|string $columns = ['*'])
     * @method Notification getModel()
     * @method Notification[] getModels(array|string $columns = ['*'])
     * @method _IH_Notification_C|Notification[] hydrate(array $items)
     * @method Notification make(array $attributes = [])
     * @method Notification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Notification[]|_IH_Notification_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Notification[]|_IH_Notification_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Notification updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Notification_QB extends _BaseBuilder {}

    /**
     * @method Option|$this shift()
     * @method Option|$this pop()
     * @method Option|null get($key, $default = null)
     * @method Option|null pull($key, $default = null)
     * @method Option|null first(callable $callback = null, $default = null)
     * @method Option|null firstWhere(string $key, $operator = null, $value = null)
     * @method Option|null find($key, $default = null)
     * @method Option[] all()
     * @method Option|null last(callable $callback = null, $default = null)
     * @method Option|$this random(int|null $number = null)
     */
    class _IH_Option_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Option[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Option_QB whereId($value)
     * @method _IH_Option_QB whereKey($value)
     * @method _IH_Option_QB whereValue($value)
     * @method _IH_Option_QB whereCreatedAt($value)
     * @method _IH_Option_QB whereUpdatedAt($value)
     * @method Option create(array $attributes = [])
     * @method _IH_Option_C|Option[] cursor()
     * @method Option|null|_IH_Option_C|Option[] find($id, array $columns = ['*'])
     * @method _IH_Option_C|Option[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Option|_IH_Option_C|Option[] findOrFail($id, array $columns = ['*'])
     * @method Option|_IH_Option_C|Option[] findOrNew($id, array $columns = ['*'])
     * @method Option first(array|string $columns = ['*'])
     * @method Option firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Option firstOrCreate(array $attributes, array $values = [])
     * @method Option firstOrFail(array $columns = ['*'])
     * @method Option firstOrNew(array $attributes = [], array $values = [])
     * @method Option firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Option forceCreate(array $attributes)
     * @method _IH_Option_C|Option[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Option_C|Option[] get(array|string $columns = ['*'])
     * @method Option getModel()
     * @method Option[] getModels(array|string $columns = ['*'])
     * @method _IH_Option_C|Option[] hydrate(array $items)
     * @method Option make(array $attributes = [])
     * @method Option newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Option[]|_IH_Option_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Option[]|_IH_Option_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Option updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Option_QB extends _BaseBuilder {}

    /**
     * @method Page|$this shift()
     * @method Page|$this pop()
     * @method Page|null get($key, $default = null)
     * @method Page|null pull($key, $default = null)
     * @method Page|null first(callable $callback = null, $default = null)
     * @method Page|null firstWhere(string $key, $operator = null, $value = null)
     * @method Page|null find($key, $default = null)
     * @method Page[] all()
     * @method Page|null last(callable $callback = null, $default = null)
     * @method Page|$this random(int|null $number = null)
     */
    class _IH_Page_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Page[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Page_QB whereId($value)
     * @method _IH_Page_QB whereTitle($value)
     * @method _IH_Page_QB whereDescription($value)
     * @method _IH_Page_QB whereImage($value)
     * @method _IH_Page_QB whereCreatedAt($value)
     * @method _IH_Page_QB whereUpdatedAt($value)
     * @method Page create(array $attributes = [])
     * @method _IH_Page_C|Page[] cursor()
     * @method Page|null|_IH_Page_C|Page[] find($id, array $columns = ['*'])
     * @method _IH_Page_C|Page[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOrFail($id, array $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOrNew($id, array $columns = ['*'])
     * @method Page first(array|string $columns = ['*'])
     * @method Page firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Page firstOrCreate(array $attributes, array $values = [])
     * @method Page firstOrFail(array $columns = ['*'])
     * @method Page firstOrNew(array $attributes = [], array $values = [])
     * @method Page firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Page forceCreate(array $attributes)
     * @method _IH_Page_C|Page[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Page_C|Page[] get(array|string $columns = ['*'])
     * @method Page getModel()
     * @method Page[] getModels(array|string $columns = ['*'])
     * @method _IH_Page_C|Page[] hydrate(array $items)
     * @method Page make(array $attributes = [])
     * @method Page newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Page[]|_IH_Page_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Page[]|_IH_Page_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Page updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Page_QB extends _BaseBuilder {}

    /**
     * @method Report|$this shift()
     * @method Report|$this pop()
     * @method Report|null get($key, $default = null)
     * @method Report|null pull($key, $default = null)
     * @method Report|null first(callable $callback = null, $default = null)
     * @method Report|null firstWhere(string $key, $operator = null, $value = null)
     * @method Report|null find($key, $default = null)
     * @method Report[] all()
     * @method Report|null last(callable $callback = null, $default = null)
     * @method Report|$this random(int|null $number = null)
     */
    class _IH_Report_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Report[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Report_QB whereId($value)
     * @method _IH_Report_QB whereUserId($value)
     * @method _IH_Report_QB whereBody($value)
     * @method _IH_Report_QB whereType($value)
     * @method _IH_Report_QB whereParentId($value)
     * @method _IH_Report_QB whereVideoId($value)
     * @method _IH_Report_QB whereStatus($value)
     * @method _IH_Report_QB whereCreatedAt($value)
     * @method _IH_Report_QB whereUpdatedAt($value)
     * @method Report create(array $attributes = [])
     * @method _IH_Report_C|Report[] cursor()
     * @method Report|null|_IH_Report_C|Report[] find($id, array $columns = ['*'])
     * @method _IH_Report_C|Report[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Report|_IH_Report_C|Report[] findOrFail($id, array $columns = ['*'])
     * @method Report|_IH_Report_C|Report[] findOrNew($id, array $columns = ['*'])
     * @method Report first(array|string $columns = ['*'])
     * @method Report firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Report firstOrCreate(array $attributes, array $values = [])
     * @method Report firstOrFail(array $columns = ['*'])
     * @method Report firstOrNew(array $attributes = [], array $values = [])
     * @method Report firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Report forceCreate(array $attributes)
     * @method _IH_Report_C|Report[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Report_C|Report[] get(array|string $columns = ['*'])
     * @method Report getModel()
     * @method Report[] getModels(array|string $columns = ['*'])
     * @method _IH_Report_C|Report[] hydrate(array $items)
     * @method Report make(array $attributes = [])
     * @method Report newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Report[]|_IH_Report_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Report[]|_IH_Report_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Report updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Report_QB extends _BaseBuilder {}

    /**
     * @method Role|$this shift()
     * @method Role|$this pop()
     * @method Role|null get($key, $default = null)
     * @method Role|null pull($key, $default = null)
     * @method Role|null first(callable $callback = null, $default = null)
     * @method Role|null firstWhere(string $key, $operator = null, $value = null)
     * @method Role|null find($key, $default = null)
     * @method Role[] all()
     * @method Role|null last(callable $callback = null, $default = null)
     * @method Role|$this random(int|null $number = null)
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereName($value)
     * @method _IH_Role_QB whereSlug($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method Role create(array $attributes = [])
     * @method _IH_Role_C|Role[] cursor()
     * @method Role|null|_IH_Role_C|Role[] find($id, array $columns = ['*'])
     * @method _IH_Role_C|Role[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrFail($id, array $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrNew($id, array $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes, array $values = [])
     * @method Role firstOrFail(array $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _IH_Role_C|Role[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_IH_Role_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role[]|_IH_Role_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Role_QB extends _BaseBuilder {}

    /**
     * @method Sponsor|$this shift()
     * @method Sponsor|$this pop()
     * @method Sponsor|null get($key, $default = null)
     * @method Sponsor|null pull($key, $default = null)
     * @method Sponsor|null first(callable $callback = null, $default = null)
     * @method Sponsor|null firstWhere(string $key, $operator = null, $value = null)
     * @method Sponsor|null find($key, $default = null)
     * @method Sponsor[] all()
     * @method Sponsor|null last(callable $callback = null, $default = null)
     * @method Sponsor|$this random(int|null $number = null)
     */
    class _IH_Sponsor_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Sponsor[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Sponsor_QB whereId($value)
     * @method _IH_Sponsor_QB whereImage($value)
     * @method _IH_Sponsor_QB whereTitle($value)
     * @method _IH_Sponsor_QB whereUrl($value)
     * @method _IH_Sponsor_QB whereCreatedAt($value)
     * @method _IH_Sponsor_QB whereUpdatedAt($value)
     * @method Sponsor create(array $attributes = [])
     * @method _IH_Sponsor_C|Sponsor[] cursor()
     * @method Sponsor|null|_IH_Sponsor_C|Sponsor[] find($id, array $columns = ['*'])
     * @method _IH_Sponsor_C|Sponsor[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Sponsor|_IH_Sponsor_C|Sponsor[] findOrFail($id, array $columns = ['*'])
     * @method Sponsor|_IH_Sponsor_C|Sponsor[] findOrNew($id, array $columns = ['*'])
     * @method Sponsor first(array|string $columns = ['*'])
     * @method Sponsor firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Sponsor firstOrCreate(array $attributes, array $values = [])
     * @method Sponsor firstOrFail(array $columns = ['*'])
     * @method Sponsor firstOrNew(array $attributes = [], array $values = [])
     * @method Sponsor firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Sponsor forceCreate(array $attributes)
     * @method _IH_Sponsor_C|Sponsor[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Sponsor_C|Sponsor[] get(array|string $columns = ['*'])
     * @method Sponsor getModel()
     * @method Sponsor[] getModels(array|string $columns = ['*'])
     * @method _IH_Sponsor_C|Sponsor[] hydrate(array $items)
     * @method Sponsor make(array $attributes = [])
     * @method Sponsor newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Sponsor[]|_IH_Sponsor_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Sponsor[]|_IH_Sponsor_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Sponsor updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Sponsor_QB extends _BaseBuilder {}

    /**
     * @method User|$this shift()
     * @method User|$this pop()
     * @method User|null get($key, $default = null)
     * @method User|null pull($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random(int|null $number = null)
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereRoleId($value)
     * @method _IH_User_QB whereFirstName($value)
     * @method _IH_User_QB whereLastName($value)
     * @method _IH_User_QB whereSlug($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereUsername($value)
     * @method _IH_User_QB whereCountry($value)
     * @method _IH_User_QB whereImage($value)
     * @method _IH_User_QB whereValue($value)
     * @method _IH_User_QB whereTwoFactor($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrFail($id, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes, array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}

    /**
     * @method Verification|$this shift()
     * @method Verification|$this pop()
     * @method Verification|null get($key, $default = null)
     * @method Verification|null pull($key, $default = null)
     * @method Verification|null first(callable $callback = null, $default = null)
     * @method Verification|null firstWhere(string $key, $operator = null, $value = null)
     * @method Verification|null find($key, $default = null)
     * @method Verification[] all()
     * @method Verification|null last(callable $callback = null, $default = null)
     * @method Verification|$this random(int|null $number = null)
     */
    class _IH_Verification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Verification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Verification_QB whereId($value)
     * @method _IH_Verification_QB whereUserId($value)
     * @method _IH_Verification_QB whereFirstName($value)
     * @method _IH_Verification_QB whereLastName($value)
     * @method _IH_Verification_QB whereImage($value)
     * @method _IH_Verification_QB whereMessage($value)
     * @method _IH_Verification_QB whereStatus($value)
     * @method _IH_Verification_QB whereCreatedAt($value)
     * @method _IH_Verification_QB whereUpdatedAt($value)
     * @method Verification create(array $attributes = [])
     * @method _IH_Verification_C|Verification[] cursor()
     * @method Verification|null|_IH_Verification_C|Verification[] find($id, array $columns = ['*'])
     * @method _IH_Verification_C|Verification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Verification|_IH_Verification_C|Verification[] findOrFail($id, array $columns = ['*'])
     * @method Verification|_IH_Verification_C|Verification[] findOrNew($id, array $columns = ['*'])
     * @method Verification first(array|string $columns = ['*'])
     * @method Verification firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Verification firstOrCreate(array $attributes, array $values = [])
     * @method Verification firstOrFail(array $columns = ['*'])
     * @method Verification firstOrNew(array $attributes = [], array $values = [])
     * @method Verification firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Verification forceCreate(array $attributes)
     * @method _IH_Verification_C|Verification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Verification_C|Verification[] get(array|string $columns = ['*'])
     * @method Verification getModel()
     * @method Verification[] getModels(array|string $columns = ['*'])
     * @method _IH_Verification_C|Verification[] hydrate(array $items)
     * @method Verification make(array $attributes = [])
     * @method Verification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Verification[]|_IH_Verification_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Verification[]|_IH_Verification_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Verification updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Verification_QB extends _BaseBuilder {}

    /**
     * @method Video|$this shift()
     * @method Video|$this pop()
     * @method Video|null get($key, $default = null)
     * @method Video|null pull($key, $default = null)
     * @method Video|null first(callable $callback = null, $default = null)
     * @method Video|null firstWhere(string $key, $operator = null, $value = null)
     * @method Video|null find($key, $default = null)
     * @method Video[] all()
     * @method Video|null last(callable $callback = null, $default = null)
     * @method Video|$this random(int|null $number = null)
     */
    class _IH_Video_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Video[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Video_QB whereId($value)
     * @method _IH_Video_QB whereUserId($value)
     * @method _IH_Video_QB whereTitle($value)
     * @method _IH_Video_QB whereSlug($value)
     * @method _IH_Video_QB whereUrl($value)
     * @method _IH_Video_QB whereStatus($value)
     * @method _IH_Video_QB whereView($value)
     * @method _IH_Video_QB whereCountry($value)
     * @method _IH_Video_QB whereCreatedAt($value)
     * @method _IH_Video_QB whereUpdatedAt($value)
     * @method Video create(array $attributes = [])
     * @method _IH_Video_C|Video[] cursor()
     * @method Video|null|_IH_Video_C|Video[] find($id, array $columns = ['*'])
     * @method _IH_Video_C|Video[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Video|_IH_Video_C|Video[] findOrFail($id, array $columns = ['*'])
     * @method Video|_IH_Video_C|Video[] findOrNew($id, array $columns = ['*'])
     * @method Video first(array|string $columns = ['*'])
     * @method Video firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Video firstOrCreate(array $attributes, array $values = [])
     * @method Video firstOrFail(array $columns = ['*'])
     * @method Video firstOrNew(array $attributes = [], array $values = [])
     * @method Video firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Video forceCreate(array $attributes)
     * @method _IH_Video_C|Video[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Video_C|Video[] get(array|string $columns = ['*'])
     * @method Video getModel()
     * @method Video[] getModels(array|string $columns = ['*'])
     * @method _IH_Video_C|Video[] hydrate(array $items)
     * @method Video make(array $attributes = [])
     * @method Video newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Video[]|_IH_Video_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Video[]|_IH_Video_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Video updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Video_QB extends _BaseBuilder {}

    /**
     * @method Withdraw|$this shift()
     * @method Withdraw|$this pop()
     * @method Withdraw|null get($key, $default = null)
     * @method Withdraw|null pull($key, $default = null)
     * @method Withdraw|null first(callable $callback = null, $default = null)
     * @method Withdraw|null firstWhere(string $key, $operator = null, $value = null)
     * @method Withdraw|null find($key, $default = null)
     * @method Withdraw[] all()
     * @method Withdraw|null last(callable $callback = null, $default = null)
     * @method Withdraw|$this random(int|null $number = null)
     */
    class _IH_Withdraw_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Withdraw[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Withdraw_QB whereId($value)
     * @method _IH_Withdraw_QB whereUserId($value)
     * @method _IH_Withdraw_QB whereWithdrawId($value)
     * @method _IH_Withdraw_QB whereType($value)
     * @method _IH_Withdraw_QB whereAmount($value)
     * @method _IH_Withdraw_QB whereEmail($value)
     * @method _IH_Withdraw_QB whereValue($value)
     * @method _IH_Withdraw_QB whereStatus($value)
     * @method _IH_Withdraw_QB whereCreatedAt($value)
     * @method _IH_Withdraw_QB whereUpdatedAt($value)
     * @method Withdraw create(array $attributes = [])
     * @method _IH_Withdraw_C|Withdraw[] cursor()
     * @method Withdraw|null|_IH_Withdraw_C|Withdraw[] find($id, array $columns = ['*'])
     * @method _IH_Withdraw_C|Withdraw[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Withdraw|_IH_Withdraw_C|Withdraw[] findOrFail($id, array $columns = ['*'])
     * @method Withdraw|_IH_Withdraw_C|Withdraw[] findOrNew($id, array $columns = ['*'])
     * @method Withdraw first(array|string $columns = ['*'])
     * @method Withdraw firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Withdraw firstOrCreate(array $attributes, array $values = [])
     * @method Withdraw firstOrFail(array $columns = ['*'])
     * @method Withdraw firstOrNew(array $attributes = [], array $values = [])
     * @method Withdraw firstWhere(array|\Closure|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Withdraw forceCreate(array $attributes)
     * @method _IH_Withdraw_C|Withdraw[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Withdraw_C|Withdraw[] get(array|string $columns = ['*'])
     * @method Withdraw getModel()
     * @method Withdraw[] getModels(array|string $columns = ['*'])
     * @method _IH_Withdraw_C|Withdraw[] hydrate(array $items)
     * @method Withdraw make(array $attributes = [])
     * @method Withdraw newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Withdraw[]|_IH_Withdraw_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Withdraw[]|_IH_Withdraw_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Withdraw updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Withdraw_QB extends _BaseBuilder {}
}
