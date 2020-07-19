<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    $data = [
        'user_id' => \Auth::id(), 
        'title' => $post['title'], 
        'body' => $post['body']
      ];
}
