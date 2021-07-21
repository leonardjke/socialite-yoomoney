<?php

namespace SocialiteProviders\Yoomoney;

use SocialiteProviders\Manager\SocialiteWasCalled;

class YoomoneyExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('yoomoney', Provider::class);
    }
}
