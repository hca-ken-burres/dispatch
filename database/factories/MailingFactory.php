<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Dataset;
use App\Models\Envelope;
use App\Models\Mailing;
use App\Models\Message;

class MailingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mailing::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'subject' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'envelope_id' => Envelope::factory(),
            'message_id' => Message::factory(),
            'dataset_id' => Dataset::factory(),
        ];
    }
}
