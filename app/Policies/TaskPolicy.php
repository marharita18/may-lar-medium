<?php

namespace App\Policies;

use App\Models\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
    /**
     * Create curent user is ownerof task
     * @param User $user
     * @param Task $task
     * @return bool
     */
    public function owner(User $user, Task $task){
        return$user->id===$task->user_id;
