<?php

namespace Tests\Feature;

use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    /**
     * Create success
     */
    public function testCreateSuccess(): void
    {
        $response = $this->post('/api/submit', [
            'name' => 'name',
            'email' => 'email@test.test',
            'message' => 'message',
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'success',
            'result',
            'message',
        ]);
    }

    /**
     * Create fail name required
     */
    public function testCreateFailNameRequired(): void
    {
        $response = $this->post('/api/submit', [
            'name' => '',
            'email' => 'email@test.test',
            'message' => 'message',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('name');
    }

    /**
     * Create fail email required
     */
    public function testCreateFailEmailRequired(): void
    {
        $response = $this->post('/api/submit', [
            'name' => 'name',
            'email' => '',
            'message' => 'message',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

    /**
     * Create fail email correct
     */
    public function testCreateFailEmailCorrect(): void
    {
        $response = $this->post('/api/submit', [
            'name' => 'name',
            'email' => 'test.test',
            'message' => 'message',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

    /**
     * Create fail message required
     */
    public function testCreateFailMessageRequired(): void
    {
        $response = $this->post('/api/submit', [
            'name' => 'name',
            'email' => 'email@test.test',
            'message' => '',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('message');
    }
}
