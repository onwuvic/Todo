<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TodoListTest extends TestCase
{
    use DatabaseMigrations;

    /** @test*/
    public function a_user_can_create_todo_list_task()
    {
        //given a todo task
        $todo = factory('App\Task')->make();

        //when user visit this endpoint todo should be created
        $this->post('/todo', $todo->toArray());

        //user should see the todo task created in the database
        $this->assertDatabaseHas('tasks', [
            'task' => $todo->task, 
            'hour' => $todo->hour, 
            'minute' => $todo->minute,
            'period' => $todo->period, 
        ]);
    }

    /** @test*/
    public function a_user_can_see_all_todo_task_created()
    {
        //given a todo task
        $todo = factory('App\Task')->create();

        //when a user visit this endpoint
        $response = $this->get('/');

        // the user should see all todo task created
        $response->assertSee($todo->task)
                ->assertSee($todo->hour)
                ->assertSee($todo->minute)
                ->assertSee($todo->period);
    }

    /** @test*/
    public function a_user_can_delete_a_todo_task()
    {
        $this->withExceptionHandling();

        //given a todo task created
        $todo = factory('App\Task')->create();

        //when a user visit this endpoint to delete a todo task
        $this->delete('/todo/'.$todo->id);

       //the todo task should be deleted from the database
       $this->assertDatabaseMissing('tasks', ['id' => $todo->id]);
    }
}
