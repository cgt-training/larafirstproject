<?php

namespace App\Policies;

use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  Task  $task
     * @return bool
     */
    public function destroy(User $user, Task $task)
    {
        // print_r($user->id); exit();
        // return $user->id === $task->user_id;
        if($user->id == $task->user_id) {
            return true;
         }else {
            return false;
         }
    }
}