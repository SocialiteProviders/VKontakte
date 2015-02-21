<?php
namespace SocialiteProviders\VKontakte;

use SocialiteProviders\Manager\SocialiteWasCalled;

class VKontakteExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('vkontakte', __NAMESPACE__.'\Provider');
    }
}
