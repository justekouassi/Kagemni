<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'nom_etudiant' => fake()->word(),
			'prenoms_etudiant' => fake()->name(),
			'sexe_etudiant' => 'Masculin',
			'tel_etudiant' => fake()->numberBetween(123456780, 987654320),
			'email_etudiant' => fake()->safeEmail(),
		];
	}
}
