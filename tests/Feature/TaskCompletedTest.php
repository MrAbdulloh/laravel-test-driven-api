<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskCompletedTest extends TestCase
{
<<<<<<< HEAD
    /** @test*/
=======
    /** @test */

>>>>>>> origin/master
    public function a_task_status_can_be_changed()
    {
        $task = $this->createTask();

<<<<<<< HEAD
        $this->patchJson(route('task.update', $task->id), ['status' => Task::STARTED]);
=======
    $this->patchJson(route('task.update', $task->id), ['status'=>Task::STARTED]);
>>>>>>> origin/master

        $this->assertDatabaseHas('tasks', ['status' => Task::STARTED]);
    }
}
