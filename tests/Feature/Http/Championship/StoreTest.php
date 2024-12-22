<?php

declare(strict_types=1);

use App\Models\Championship;

it('should store a championship', function () {
    $user = User::factory()->create()->fresh();

    $response = $this->actingAs($user)
        ->from(route('championships.index'))
        ->post(route('championships.store'), [
            'name' => 'PNG 8ª liga',
            'begin_date' => '2025-01-01',
            'end_date' => '2025-06-31',
            'winner' => null,
        ]);

    $response->assertRedirectToRoute('championships.index')
        ->assertSessionHasNoErrors();

    $championship = Championship::all();

    expect($championship)->toHaveCount(1)
        ->and($championship->first()->name)->toBe('PNG 8ª liga');
});
