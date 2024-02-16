<?php

describe("events", function () {
    it("should have '/event/create' route", function () {
        $response = $this->get('/event/create');

        $response->assertStatus(200);
    });

    it("should have '/event/store' route", function () {
        $response = $this->post('/event/store');

        $response->assertStatus(200);
    });
});

describe("archives", function () {
    it("should have '/archive/create' route", function () {
        $response = $this->get('/archive/create');

        $response->assertStatus(200);
    });

    it("should have '/archive/store' route", function () {
        $response = $this->post('/archive/store');

        $response->assertStatus(200);
    });
});
