<?php

namespace Src\Builder\RequestBuilder;

class ApiService
{
    public function fetchUsers()
    {
        $request = RequestBuilder::forge()
            ->withUri('https://api-services.com/users')
            ->withMethod('GET')
            ->withData([
                'user_name' => 'some_user_name',
                'user_password' => 'some_user_password'
            ])
            ->build();

        $response = $request->run();
    }
}
