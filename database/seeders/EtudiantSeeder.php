<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Etudiant::factory(30)->create();
	}
}
