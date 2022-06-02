<?php

namespace ContainerOIYf6aG;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Targeting\Debug\OverrideHandler|null wrapped object, if the proxy is initialized
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

    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'getForm', array('request' => $request), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->getForm($request);
    }

    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'handleRequest', array('request' => $request), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->handleRequest($request);
    }

    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->handleForm($form, $request);
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

        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $instance, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($instance);

        $instance->initializer0ae13 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolder0a0de) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolder0a0de = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolder0a0de->__construct($formFactory, $overrideHandlers);
    }

    public function & __get($name)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, '__get', ['name' => $name], $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        if (isset(self::$publicPropertiesaa1a1[$name])) {
            return $this->valueHolder0a0de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
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

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
