<?php

namespace ContainerOIYf6aG;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticatedTokenHandler.php';

class AuthenticatedTokenHandler_e3677d3 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0a0de = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0ae13 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaa1a1 = [
        
    ];

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->beginTwoFactorAuthentication($context);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($instance);

        $instance->initializer0ae13 = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, array $supportedTokens)
    {
        static $reflection;

        if (! $this->valueHolder0a0de) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');
            $this->valueHolder0a0de = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($this);

        }

        $this->valueHolder0a0de->__construct($authenticationHandler, $supportedTokens);
    }

    public function & __get($name)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, '__get', ['name' => $name], $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        if (isset(self::$publicPropertiesaa1a1[$name])) {
            return $this->valueHolder0a0de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a0de;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0a0de;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a0de;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0a0de;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, '__isset', array('name' => $name), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a0de;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0a0de;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, '__unset', array('name' => $name), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0a0de;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0a0de;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, '__clone', array(), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        $this->valueHolder0a0de = clone $this->valueHolder0a0de;
    }

    public function __sleep()
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, '__sleep', array(), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return array('valueHolder0a0de');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler $instance) {
            unset($instance->authenticationHandler, $instance->supportedTokens);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\AuthenticatedTokenHandler')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0ae13 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0ae13;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'initializeProxy', array(), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0a0de;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0a0de;
    }
}

if (!\class_exists('AuthenticatedTokenHandler_e3677d3', false)) {
    \class_alias(__NAMESPACE__.'\\AuthenticatedTokenHandler_e3677d3', 'AuthenticatedTokenHandler_e3677d3', false);
}