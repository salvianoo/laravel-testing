<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Contato;
use Illuminate\Support\Facades\Artisan;

class ExampleTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        Artisan::call('migrate');

        $this->smith = factory(Contato::class)->create([ 'lastname' => 'Silva' ]);

        $this->jones = factory(Contato::class)->create([ 'lastname' => 'Jones' ]);
    }

    /**
     * @test
     */
    public function get_contatos_with_params_letter()
    {
        $letter = 'S';
        $response = $this->get('/api/contatos?letter=' . $letter);

        $response
            ->assertStatus(200)
            ->assertJson([

                [
                    "lastname"  => "Silva",
                ]

            ]);
    }

    /**
     * @test
     */
    public function get_contatos_without_params_letter()
    {
        $smith = $this->smith->lastname;
        $jones = $this->jones->lastname;

        $response = $this->get('/api/contatos');

        $data = $response
            ->assertStatus(200)
            ->decodeResponseJson();

        $contatos = collect($data)->map(function ($contato) {
            return $contato['lastname'];
        })->toArray();

        $this->assertEquals($contatos, [ $jones, $smith ]);
    }

}
