<?php 

namespace App\Http\Jobs;

use App\Http\Jobs\Job;

use Illuminate\Http\Request;
use DateTime;
use DateInterval;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
// For the caching of column names
use Illuminate\Support\Facades\Cache;
    
class SendMailJob extends Jobs
{
    
}