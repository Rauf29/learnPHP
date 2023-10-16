<?php
// dependency inject
/*
class Authenticator
{
    // that hardcore inject its a bad practice
    function authenticate($username, $password, $external = false, $externalService=false)
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
    function authenticate();
}

class GithubAuthenticator implements AuthServiceProviderInterface
{
    function authenticate()
    {
        // Implement GitHub authentication logic here
        echo "GitHub authentication successful.\n";
    }
}

class LocalAuthenticator implements AuthServiceProviderInterface
{
    private $username;
    private $password;

    function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    function authenticate()
    {
        // Implement local authentication logic here using $this->username and $this->password
        echo "Local authentication successful for {$this->username}.\n";
    }
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
        $this->authServiceProvider->authenticate();
    }
}

// Example usage:

$ga = new GithubAuthenticator();
$auth = new Authenticator($ga);
$auth->authenticate(); // This will use GitHub authentication

$username = "myuser";
$password = "mypassword";
$la = new LocalAuthenticator($username, $password);
$auth = new Authenticator($la);
$auth->authenticate(); // This will use Local authentication
