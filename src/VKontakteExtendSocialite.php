<?php
namespace SocialiteProviders\VKontakte;

use SocialiteProviders\Manager\SocialiteWasCalled;

class VKontakteExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'vkontakte', __NAMESPACE__.'\Provider'
        );
    }
}
