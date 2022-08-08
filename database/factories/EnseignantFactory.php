<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enseignant>
 */
class EnseignantFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'nom_enseignant' => fake()->word(),
			'prenoms_enseignant' => fake()->name(),
			'sexe_enseignant' => 'Masculin',
			'tel_enseignant' => fake()->numberBetween(123456780, 987654320),
			'email_enseignant' => fake()->safeEmail(),
		];
	}
}
