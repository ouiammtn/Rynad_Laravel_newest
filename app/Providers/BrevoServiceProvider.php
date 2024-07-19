<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Brevo\Client\Api\ContactsApi;
use Brevo\Client\ApiException;
use Brevo\Client\Configuration;
use Brevo\Client\Model\CreateContact;
use GuzzleHttp\Client;

class BrevoServiceProvider extends ServiceProvider
{
    private $apiInstance;

    public function __construct()
    {
        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY'));
        $this->apiInstance = new ContactsApi(
            new Client(),
            $config
        );
    }

    public function addContactToList($email, $attributes = [], $listIds = [])
    {
        $createContact = new CreateContact([
            'email' => $email,
            'attributes' => $attributes,
            'listIds' => $listIds
        ]);

        try {
            $result = $this->apiInstance->createContact($createContact);
            return $result;
        } catch (ApiException $e) {
            return $e->getMessage();
        }
    }
}
