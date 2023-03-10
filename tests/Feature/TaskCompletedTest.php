<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskCompletedTest extends TestCase
{
    /** @test */

    public function a_task_status_can_be_changed()
    {
        $task = $this->createTask();

        $this->patchJson(route('task.update', $task->id), ['status'=>Task::STARTED]);

        $this->assertDatabaseHas('tasks', ['status' => Task::STARTED]);
    }
}
