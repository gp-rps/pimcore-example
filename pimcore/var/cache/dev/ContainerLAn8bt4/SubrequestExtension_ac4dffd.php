<?php

namespace ContainerLAn8bt4;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/SubrequestExtension.php';

class SubrequestExtension_ac4dffd extends \Pimcore\Twig\Extension\SubrequestExtension implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\SubrequestExtension|null wrapped object, if the proxy is initialized
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

    public function getFunctions() : array
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, 'getFunctions', array(), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        return $this->valueHolder5bb10->getFunctions();
    }

    public function getTokenParsers()
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, 'getTokenParsers', array(), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        return $this->valueHolder5bb10->getTokenParsers();
    }

    public function getNodeVisitors()
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, 'getNodeVisitors', array(), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        return $this->valueHolder5bb10->getNodeVisitors();
    }

    public function getFilters()
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, 'getFilters', array(), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        return $this->valueHolder5bb10->getFilters();
    }

    public function getTests()
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, 'getTests', array(), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        return $this->valueHolder5bb10->getTests();
    }

    public function getOperators()
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, 'getOperators', array(), $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        return $this->valueHolder5bb10->getOperators();
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

        unset($instance->incHelper);

        $instance->initializer9baac = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Twig\Extension\Templating\Inc $incHelper)
    {
        static $reflection;

        if (! $this->valueHolder5bb10) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');
            $this->valueHolder5bb10 = $reflection->newInstanceWithoutConstructor();
        unset($this->incHelper);

        }

        $this->valueHolder5bb10->__construct($incHelper);
    }

    public function & __get($name)
    {
        $this->initializer9baac && ($this->initializer9baac->__invoke($valueHolder5bb10, $this, '__get', ['name' => $name], $this->initializer9baac) || 1) && $this->valueHolder5bb10 = $valueHolder5bb10;

        if (isset(self::$publicProperties7dda8[$name])) {
            return $this->valueHolder5bb10->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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
        unset($this->incHelper);
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

if (!\class_exists('SubrequestExtension_ac4dffd', false)) {
    \class_alias(__NAMESPACE__.'\\SubrequestExtension_ac4dffd', 'SubrequestExtension_ac4dffd', false);
}
