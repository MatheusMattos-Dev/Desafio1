<?php

namespace App\Policies;

use App\Models\News;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewsPolicy
{
    use HandlesAuthorization;

    public function view(User $user, News $news): bool
    {
        return $news->user_id === $user->id;
    }

    public function update(User $user, News $news): bool
    {
        return $news->user_id === $user->id;
    }

    public function delete(User $user, News $news): bool
    {
        return $news->user_id === $user->id;
    }
}
