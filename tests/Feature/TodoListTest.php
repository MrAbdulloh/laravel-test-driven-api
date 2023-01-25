<?php

namespace Tests\Feature;

use App\Models\TodoList;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function fetch_all_todo_list()
    {
        TodoList::factory()->create();

        $response = $this->getJson('api/todo-list');

        $this->assertEquals(1, count($response->json()));
    }

    /** @test */
    public function fetch_single_todo_list()
    {
        $response = $this->getJson(route('todo-list.show', 1))->json();

        $response->assertStatus(200);
    }
}

