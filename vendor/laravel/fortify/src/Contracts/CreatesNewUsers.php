<?php

namespace Laravel\Fortify\Contracts;

// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

interface CreatesNewUsers
{
    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \Illuminate\Foundation\Auth\User
     */
     public function create(array $input);
}
