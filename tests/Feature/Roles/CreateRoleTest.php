<?php

namespace Tests\Feature\Roles;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class CreateRoleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_user_cannot_create_a_role()
    {
        $car = Role::factory()->raw();

        $this->jsonApi()->withData([
            'type' => 'cars',
            'attributes' => $car,
        ])->post(route('api.v1.cars.create'))
            ->assertStatus(401); //Not authorized

        $this->assertDatabaseMissing('cars', $car);

    }
}
