<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    // policy para restringir el paso a usuarios cuyo id es diferente al que creo el post 

    public function author(User $user, Post $post){
        return false;
        if ($user->id == $post->user_id) {
            return true;
        }else{
            return false;
        }
    }
}
