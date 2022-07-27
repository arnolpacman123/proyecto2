<?php //3aa32301d283fae4d7099a30ab89fdd6
/** @noinspection all */

namespace Illuminate\Notifications {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;

    /**
     * @property int $id
     * @property int $user_id
     * @property int $parent_id
     * @property string $body
     * @property string $link
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method static _IH_DatabaseNotification_QB onWriteConnection()
     * @method _IH_DatabaseNotification_QB newQuery()
     * @method static _IH_DatabaseNotification_QB on(null|string $connection = null)
     * @method static _IH_DatabaseNotification_QB query()
     * @method static _IH_DatabaseNotification_QB with(array|string $relations)
     * @method _IH_DatabaseNotification_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DatabaseNotification_C|DatabaseNotification[] all()
     * @ownLinks user_id,\Tests\User,id|parent_id,\Tests\User,id
     * @mixin _IH_DatabaseNotification_QB
     */
    class DatabaseNotification extends Model {}
}
