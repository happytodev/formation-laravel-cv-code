<?php

it('has home page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('has text the future of your cv', function () {
    $response = $this->get('/');

    $response->assertSee('The future of your cv');
});
