<?php

use Illuminate\Database\Seeder;

class MensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Mensagem::class, 10)
       ->create();
    }
}
