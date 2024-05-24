<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;
use App\Models\Envelope;

class EnvelopeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Envelope::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'from_id' => Address::factory(),
            'replyto' => '{}',
            'cc' => '{}',
            'bcc' => '{}',
        ];
    }
}
