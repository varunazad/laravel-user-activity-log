namespace Varunazad\UserActivityLog\Traits;

use Varunazad\UserActivityLog\Models\UserActivity;
use Illuminate\Support\Facades\Request;

trait LogsActivity
{
    /**
     * Log a custom activity message with optional extra data.
     *
     * @param string $message
     * @param array|null $extra
     * @return void
     */
    public function logActivity(string $message, array $extra = null): void
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
            'description' => $message,
            'extra_data'  => $extra ? json_encode($extra) : null,
        ]);
    }
}
