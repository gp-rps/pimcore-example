<?php

namespace ContainerOIYf6aG;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
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

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'build', array('params' => $params), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'getRenderer', array('alias' => $alias), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'setCharset', array('charset' => $charset), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'getCharset', array(), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->getCharset();
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

        unset($instance->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($instance);

        $instance->initializer0ae13 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolder0a0de) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolder0a0de = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolder0a0de->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, '__get', ['name' => $name], $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        if (isset(self::$publicPropertiesaa1a1[$name])) {
            return $this->valueHolder0a0de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);
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

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
