namespace Varunazad\UserActivityLog\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $fillable = [
        'user_id', 'url', 'method', 'ip_address', 'user_agent', 'route',
    ];
}
