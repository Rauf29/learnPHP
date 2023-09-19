<?php
// dependency inject
/*
class Authenticator
{
    // that hardcore inject its a bad practice
    function authenticate($username, $password, $external = false, $externalService)
    {
        if (true == $external && "gooogle" == $externalService) {
            $ga = new GoogleAuthenticator();
            $ga->authenticate();
        } elseif (true == $external && "github" == $externalService) {
            $ga = new GithubAuthenticator();
            $ga->authenticate();
        } else {
            $la = new LocalAuthenticator();
            $la->authenticate();
        }
    }
} */
// better way
interface AuthServiceProviderInterface
{
}
class Authenticator
{
    private $authServiceProvider;
    function __construct(AuthServiceProviderInterface $asp)
    {
        $this->authServiceProvider = $asp;
    }
    function authenticate()
    {
        $this->asp->authenticate();
    }
}

$ga = new GithubAuthenticator();
