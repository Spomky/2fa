<?php

declare(strict_types=1);

namespace Scheb\TwoFactorBundle\Security\TwoFactor\Event;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Contracts\EventDispatcher\Event;

class TwoFactorAuthenticationEvent extends Event
{
    /**
     * @var Request
     */
    private $request;

    /**
     * @var TokenInterface
     */
    private $token;

    public function __construct(Request $request, TokenInterface $token)
    {
        $this->request = $request;
        $this->token = $token;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function getToken(): TokenInterface
    {
        return $this->token;
    }
}
