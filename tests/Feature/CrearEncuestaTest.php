<?php

namespace Tests\Feature;

use Tests\FeatureTestCase;

class CrearEncuestaTest extends FeatureTestCase
{
    /** @test */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
