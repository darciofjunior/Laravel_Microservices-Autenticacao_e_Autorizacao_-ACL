<?php

namespace Database\Factories;

use App\Models\Permission;
use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = Permission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'resource_id' => Resource::factory(),
            'name' => $this->faker->unique()->name()
        ];
    }
}
