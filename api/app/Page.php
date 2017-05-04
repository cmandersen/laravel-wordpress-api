<?php

namespace App;

use App\Traits\Wordpress;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Wordpress;

    protected $table = 'posts';

    protected static $post_type = 'page';
}
