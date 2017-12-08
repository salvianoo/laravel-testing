<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Contato;
use Mockery as m;

class ContatoTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();

        $this->silva = factory(Contato::class)->create([ 'lastname' => 'Silva' ]);
        $this->jones = factory(Contato::class)->create([ 'lastname' => 'Jones' ]);
    }

    /**
     * @test
     */
    public function get_contatos_by_letter()
    {
        $params = m::mock('ParameterBag');
        $params->shouldReceive('get')->times(1)->andReturn('S');

        $contatos = (new Contato)->search_by_letter($params);

        dd($contatos->toArray());

        // $this->assertArrayHasKey( 'lastname' , $contatos->toArray()[0]);
    }

//     /**
//     * @test
//     */
//     public function get_contatos_without_letter()
//     {
//         $contatos = (new Contato)->get_contatos();

//     }
}
