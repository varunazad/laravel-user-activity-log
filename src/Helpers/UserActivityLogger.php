namespace Varunazad\LaravelUserActivityLog\Helpers;

use Varunazad\LaravelUserActivityLog\Models\UserActivity;
use Illuminate\Support\Facades\Request;

class UserActivityLogger
{
    /**
     * Log an activity entry for the authenticated user.
     *
     * @param string $description A short description of the activity.
     * @param array|null $extra Optional extra data to include with the log.
     * @return void
     */
    public static function log(string $description, array $extra = null): void
    {
        if (!auth()->check()) {
            return;
        }

        UserActivity::create([
            'user_id'     => auth()->id(),
            'url'         => Request::fullUrl(),
            'method'      => Request::method(),
            'ip_address'  => Request::ip(),
            'user_agent'  => Request::userAgent(),
            'route'       => Request::route() ? Request::route()->getName() : null,
            'description' => $description,
            'extra_data'  => $extra ? json_encode($extra) : null,
        ]);
    }
}
