<?php //603145151332c0b69aa922dd1cb4634c
/** @noinspection all */

namespace Tests {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Tests\_IH_User_C;
    use LaravelIdea\Helper\Tests\_IH_User_QB;

    /**
     * @property int $id
     * @property int $role_id
     * @property string|null $first_name
     * @property string|null $last_name
     * @property string $slug
     * @property string $email
     * @property string $username
     * @property string|null $country
     * @property string $image
     * @property string|null $value
     * @property string|null $two_factor
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @ownLinks role_id,\App\Role,id
     * @foreignLinks id,\App\Video,user_id|id,\App\Comment,user_id|id,\App\Comment,mention_id|id,\App\Verification,user_id|id,\App\Monetization,user_id|id,\App\Advertising,user_id|id,\App\Withdraw,user_id|id,\App\Report,user_id|id,\App\Report,parent_id|id,\Illuminate\Notifications\DatabaseNotification,user_id|id,\Illuminate\Notifications\DatabaseNotification,parent_id
     * @mixin _IH_User_QB
     */
    class User extends Model {}
}
