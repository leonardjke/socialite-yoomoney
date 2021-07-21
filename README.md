# Yoomoney

```bash
composer require leonardjke/socialite-yoomoney
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/), then follow the provider specific instructions below.

### Add configuration to `config/services.php`

```php
'yoomoney' => [    
  'client_id' => env('YOOMONEY_CLIENT_ID'),  
  'client_secret' => env('YOOMONEY_CLIENT_SECRET'),  
  'redirect' => env('YOOMONEY_REDIRECT_URI') 
],
```

### Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

```php
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        'SocialiteProviders\\Yoomoney\\YoomoneyExtendSocialite@handle',
    ],
];
```

### Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('yoomoney')->redirect();
```

### Returned User fields

- ``id``
- ``nickname``
