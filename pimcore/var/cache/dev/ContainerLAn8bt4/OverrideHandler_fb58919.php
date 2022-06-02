<?php

namespace ContainerLAn8bt4;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Targeting\Debug\OverrideHandler|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5bb10 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9baac = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7dda8 = [
        
    ];

    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, 'getForm', array('request' => $request), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        return $this->valueHolder5bb10->getForm($request);
    }

    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, 'handleRequest', array('request' => $request), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        return $this->valueHolder5bb10->handleRequest($request);
    }

    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        return $this->valueHolder5bb10->handleForm($form, $request);
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

        $instance->initializer9baac = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolder5bb10) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolder5bb10 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolder5bb10->__construct($formFactory, $overrideHandlers);
    }

    public function & __get($name)
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, '__get', ['name' => $name], $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        if (isset(self::$publicProperties7dda8[$name])) {
            return $this->valueHolder5bb10->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bb10;

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

        $targetObject = $this->valueHolder5bb10;
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
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bb10;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5bb10;
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
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, '__isset', array('name' => $name), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bb10;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5bb10;
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
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, '__unset', array('name' => $name), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bb10;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5bb10;
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
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, '__clone', array(), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        $this->valueHolder5bb10 = clone $this->valueHolder5bb10;
    }

    public function __sleep()
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, '__sleep', array(), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        return array('valueHolder5bb10');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9baac = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9baac;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, 'initializeProxy', array(), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5bb10;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5bb10;
    }
}

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
