<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ValidationTest extends TestCase
{
    use DatabaseMigrations;

    /** @test*/
    public function task_input_field_must_be_filled()
    {
      	$this->withExceptionHandling();

        //when creating a todo task without a todo task name
        $todo = factory('App\Task')->make(['task' => null]);

        //when user post the todo task list
        $response = $this->post('/todo', $todo->toArray());

        // Error should be thrown
        $response->assertSessionHasErrors('task');
    }

    /** @test*/
    public function hour_input_field_must_be_filled()
    {
        $this->withExceptionHandling();

        //when creating a todo task without a todo task hour
        $todo = factory('App\Task')->make(['hour' => null]);

        //when user post the todo task list
        $response = $this->post('/todo', $todo->toArray());

        // Error should be thrown
        $response->assertSessionHasErrors('hour');
    }

    /** @test*/
    public function minute_input_field_must_be_filled()
    {
        $this->withExceptionHandling();

        //when creating a todo task without a todo task minute
        $todo = factory('App\Task')->make(['minute' => null]);

        //when user post the todo task list
        $response = $this->post('/todo', $todo->toArray());

        // Error should be thrown
        $response->assertSessionHasErrors('minute');
    }

    /** @test*/
    public function period_input_field_must_be_filled()
    {
        $this->withExceptionHandling();

        //when creating a todo task without a todo task period
        $todo = factory('App\Task')->make(['period' => null]);

        //when user post the todo task list
        $response = $this->post('/todo', $todo->toArray());

        // Error should be thrown
        $response->assertSessionHasErrors('period');
    }

    /** @test*/
    public function hour_input_field_must_be_numeric()
    {
        $this->withExceptionHandling();

        //when creating a todo task with hour being a string
        $todo = factory('App\Task')->make(['hour' => 'choose']);

        //when user post the todo task list
        $response = $this->post('/todo', $todo->toArray());

        // Error should be thrown
        $response->assertSessionHasErrors('hour');
    }

    /** @test*/
    public function minute_input_field_must_be_numeric()
    {
        $this->withExceptionHandling();

        //when creating a todo task with minute being a string
        $todo = factory('App\Task')->make(['minute' => 'choose']);

        //when user post the todo task list
        $response = $this->post('/todo', $todo->toArray());

        // Error should be thrown
        $response->assertSessionHasErrors('minute');
    }

}
