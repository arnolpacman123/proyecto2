<?php //8b9b8503bf6ea8e450c762d3d6ed68ec
/** @noinspection all */

namespace App {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\_IH_Advertising_C;
    use LaravelIdea\Helper\App\_IH_Advertising_QB;
    use LaravelIdea\Helper\App\_IH_Comment_C;
    use LaravelIdea\Helper\App\_IH_Comment_QB;
    use LaravelIdea\Helper\App\_IH_Language_C;
    use LaravelIdea\Helper\App\_IH_Language_QB;
    use LaravelIdea\Helper\App\_IH_Monetization_C;
    use LaravelIdea\Helper\App\_IH_Monetization_QB;
    use LaravelIdea\Helper\App\_IH_Notification_C;
    use LaravelIdea\Helper\App\_IH_Notification_QB;
    use LaravelIdea\Helper\App\_IH_Option_C;
    use LaravelIdea\Helper\App\_IH_Option_QB;
    use LaravelIdea\Helper\App\_IH_Page_C;
    use LaravelIdea\Helper\App\_IH_Page_QB;
    use LaravelIdea\Helper\App\_IH_Report_C;
    use LaravelIdea\Helper\App\_IH_Report_QB;
    use LaravelIdea\Helper\App\_IH_Role_C;
    use LaravelIdea\Helper\App\_IH_Role_QB;
    use LaravelIdea\Helper\App\_IH_Sponsor_C;
    use LaravelIdea\Helper\App\_IH_Sponsor_QB;
    use LaravelIdea\Helper\App\_IH_User_C;
    use LaravelIdea\Helper\App\_IH_User_QB;
    use LaravelIdea\Helper\App\_IH_Verification_C;
    use LaravelIdea\Helper\App\_IH_Verification_QB;
    use LaravelIdea\Helper\App\_IH_Video_C;
    use LaravelIdea\Helper\App\_IH_Video_QB;
    use LaravelIdea\Helper\App\_IH_Withdraw_C;
    use LaravelIdea\Helper\App\_IH_Withdraw_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;

    /**
     * @property int $id
     * @property int $user_id
     * @property string $title
     * @property string $url
     * @property string $media
     * @property string $country
     * @property string $pricing
     * @property int $total_limit
     * @property string $status
     * @property string|null $result
     * @property string|null $total_spent
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Advertising_QB onWriteConnection()
     * @method _IH_Advertising_QB newQuery()
     * @method static _IH_Advertising_QB on(null|string $connection = null)
     * @method static _IH_Advertising_QB query()
     * @method static _IH_Advertising_QB with(array|string $relations)
     * @method _IH_Advertising_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Advertising_C|Advertising[] all()
     * @ownLinks user_id,\Tests\User,id
     * @mixin _IH_Advertising_QB
     */
    class Advertising extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int $video_id
     * @property int|null $parent_id
     * @property int|null $mention_id
     * @property string $message
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_User_C|User[] $favourite_to_user
     * @property-read int $favourite_to_user_count
     * @method BelongsToMany|_IH_User_QB favourite_to_user()
     * @property Comment|null $main_comment
     * @method BelongsTo|_IH_Comment_QB main_comment()
     * @property User|null $mention_user
     * @method BelongsTo|_IH_User_QB mention_user()
     * @property _IH_Comment_C|Comment[] $replies
     * @property-read int $replies_count
     * @method HasMany|_IH_Comment_QB replies()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @property Video $video
     * @method BelongsTo|_IH_Video_QB video()
     * @method static _IH_Comment_QB onWriteConnection()
     * @method _IH_Comment_QB newQuery()
     * @method static _IH_Comment_QB on(null|string $connection = null)
     * @method static _IH_Comment_QB query()
     * @method static _IH_Comment_QB with(array|string $relations)
     * @method _IH_Comment_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Comment_C|Comment[] all()
     * @ownLinks user_id,\Tests\User,id|video_id,\App\Video,id|parent_id,\App\Comment,id|mention_id,\Tests\User,id
     * @foreignLinks id,\App\Comment,parent_id
     * @mixin _IH_Comment_QB
     */
    class Comment extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $code
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Language_QB onWriteConnection()
     * @method _IH_Language_QB newQuery()
     * @method static _IH_Language_QB on(null|string $connection = null)
     * @method static _IH_Language_QB query()
     * @method static _IH_Language_QB with(array|string $relations)
     * @method _IH_Language_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Language_C|Language[] all()
     * @mixin _IH_Language_QB
     */
    class Language extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Monetization_QB onWriteConnection()
     * @method _IH_Monetization_QB newQuery()
     * @method static _IH_Monetization_QB on(null|string $connection = null)
     * @method static _IH_Monetization_QB query()
     * @method static _IH_Monetization_QB with(array|string $relations)
     * @method _IH_Monetization_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Monetization_C|Monetization[] all()
     * @ownLinks user_id,\Tests\User,id
     * @mixin _IH_Monetization_QB
     */
    class Monetization extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int $parent_id
     * @property string $body
     * @property string $link
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Notification_QB onWriteConnection()
     * @method _IH_Notification_QB newQuery()
     * @method static _IH_Notification_QB on(null|string $connection = null)
     * @method static _IH_Notification_QB query()
     * @method static _IH_Notification_QB with(array|string $relations)
     * @method _IH_Notification_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Notification_C|Notification[] all()
     * @ownLinks user_id,\Tests\User,id|parent_id,\Tests\User,id
     * @mixin _IH_Notification_QB
     */
    class Notification extends Model {}

    /**
     * @property int $id
     * @property string|null $key
     * @property string|null $value
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Option_QB onWriteConnection()
     * @method _IH_Option_QB newQuery()
     * @method static _IH_Option_QB on(null|string $connection = null)
     * @method static _IH_Option_QB query()
     * @method static _IH_Option_QB with(array|string $relations)
     * @method _IH_Option_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Option_C|Option[] all()
     * @mixin _IH_Option_QB
     */
    class Option extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $description
     * @property string $image
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Page_QB onWriteConnection()
     * @method _IH_Page_QB newQuery()
     * @method static _IH_Page_QB on(null|string $connection = null)
     * @method static _IH_Page_QB query()
     * @method static _IH_Page_QB with(array|string $relations)
     * @method _IH_Page_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Page_C|Page[] all()
     * @mixin _IH_Page_QB
     */
    class Page extends Model {}

    /**
     * @property int $id
     * @property int|null $user_id
     * @property string $body
     * @property string|null $type
     * @property int|null $parent_id
     * @property int|null $video_id
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Report_QB onWriteConnection()
     * @method _IH_Report_QB newQuery()
     * @method static _IH_Report_QB on(null|string $connection = null)
     * @method static _IH_Report_QB query()
     * @method static _IH_Report_QB with(array|string $relations)
     * @method _IH_Report_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Report_C|Report[] all()
     * @ownLinks user_id,\Tests\User,id|parent_id,\Tests\User,id|video_id,\App\Video,id
     * @mixin _IH_Report_QB
     */
    class Report extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_User_C|User[] $users
     * @property-read int $users_count
     * @method HasMany|_IH_User_QB users()
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Role_C|Role[] all()
     * @foreignLinks id,\Tests\User,role_id
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}

    /**
     * @property int $id
     * @property string $image
     * @property string $title
     * @property string $url
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Sponsor_QB onWriteConnection()
     * @method _IH_Sponsor_QB newQuery()
     * @method static _IH_Sponsor_QB on(null|string $connection = null)
     * @method static _IH_Sponsor_QB query()
     * @method static _IH_Sponsor_QB with(array|string $relations)
     * @method _IH_Sponsor_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Sponsor_C|Sponsor[] all()
     * @mixin _IH_Sponsor_QB
     */
    class Sponsor extends Model {}

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
     * @property _IH_User_C|User[] $block_users
     * @property-read int $block_users_count
     * @method BelongsToMany|_IH_User_QB block_users()
     * @property _IH_Comment_C|Comment[] $favourite_comments
     * @property-read int $favourite_comments_count
     * @method BelongsToMany|_IH_Comment_QB favourite_comments()
     * @property _IH_Video_C|Video[] $favourite_videos
     * @property-read int $favourite_videos_count
     * @method BelongsToMany|_IH_Video_QB favourite_videos()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property Role $role
     * @method BelongsTo|_IH_Role_QB role()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @property _IH_Video_C|Video[] $videos
     * @property-read int $videos_count
     * @method HasMany|_IH_Video_QB videos()
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

    /**
     * @property int $id
     * @property int $user_id
     * @property string $first_name
     * @property string $last_name
     * @property string $image
     * @property string $message
     * @property string|null $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Verification_QB onWriteConnection()
     * @method _IH_Verification_QB newQuery()
     * @method static _IH_Verification_QB on(null|string $connection = null)
     * @method static _IH_Verification_QB query()
     * @method static _IH_Verification_QB with(array|string $relations)
     * @method _IH_Verification_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Verification_C|Verification[] all()
     * @ownLinks user_id,\Tests\User,id
     * @mixin _IH_Verification_QB
     */
    class Verification extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property string|null $title
     * @property string|null $slug
     * @property string $url
     * @property string|null $status
     * @property int $view
     * @property string|null $country
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property _IH_User_C|User[] $favourite_to_user
     * @property-read int $favourite_to_user_count
     * @method BelongsToMany|_IH_User_QB favourite_to_user()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Video_QB onWriteConnection()
     * @method _IH_Video_QB newQuery()
     * @method static _IH_Video_QB on(null|string $connection = null)
     * @method static _IH_Video_QB query()
     * @method static _IH_Video_QB with(array|string $relations)
     * @method _IH_Video_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Video_C|Video[] all()
     * @ownLinks user_id,\Tests\User,id
     * @foreignLinks id,\App\Comment,video_id|id,\App\Report,video_id
     * @mixin _IH_Video_QB
     */
    class Video extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property string $withdraw_id
     * @property string $type
     * @property int $amount
     * @property string|null $email
     * @property string|null $value
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Withdraw_QB onWriteConnection()
     * @method _IH_Withdraw_QB newQuery()
     * @method static _IH_Withdraw_QB on(null|string $connection = null)
     * @method static _IH_Withdraw_QB query()
     * @method static _IH_Withdraw_QB with(array|string $relations)
     * @method _IH_Withdraw_QB newModelQuery()
     * @method int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Withdraw_C|Withdraw[] all()
     * @ownLinks user_id,\Tests\User,id
     * @mixin _IH_Withdraw_QB
     */
    class Withdraw extends Model {}
}
