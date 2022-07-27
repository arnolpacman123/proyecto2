<?php //9c2413e5f5716ca94135bdb75f1647ab
/** @noinspection all */

namespace Overtrue\LaravelFollow {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Overtrue\LaravelFollow\_IH_UserFollower_C;
    use LaravelIdea\Helper\Overtrue\LaravelFollow\_IH_UserFollower_QB;

    /**
     * @property int $id
     * @property int $following_id
     * @property int $follower_id
     * @property Carbon|null $accepted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_UserFollower_QB onWriteConnection()
     * @method _IH_UserFollower_QB newQuery()
     * @method static _IH_UserFollower_QB on(null|string $connection = null)
     * @method static _IH_UserFollower_QB query()
     * @method static _IH_UserFollower_QB with(array|string $relations)
     * @method _IH_UserFollower_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserFollower_C|UserFollower[] all()
     * @mixin _IH_UserFollower_QB
     */
    class UserFollower extends Model {}
}
