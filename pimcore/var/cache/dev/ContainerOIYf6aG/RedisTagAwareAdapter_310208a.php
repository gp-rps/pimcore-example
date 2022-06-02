<?php

namespace ContainerOIYf6aG;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
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

    public function commit() : bool
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'commit', array(), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'deleteItems', array('keys' => $keys), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'invalidateTags', array('tags' => $tags), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'hasItem', array('key' => $key), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'clear', array('prefix' => $prefix), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'deleteItem', array('key' => $key), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'getItem', array('key' => $key), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'getItems', array('keys' => $keys), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'save', array('item' => $item), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'saveDeferred', array('item' => $item), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'enableVersioning', array('enable' => $enable), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'reset', array(), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'setLogger', array('logger' => $logger), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, 'delete', array('key' => $key), $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        return $this->valueHolder0a0de->delete($key);
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

        unset($instance->maxIdLength, $instance->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($instance);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($instance);

        $instance->initializer0ae13 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder0a0de) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder0a0de = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder0a0de->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializer0ae13 && ($this->initializer0ae13->__invoke($valueHolder0a0de, $this, '__get', ['name' => $name], $this->initializer0ae13) || 1) && $this->valueHolder0a0de = $valueHolder0a0de;

        if (isset(self::$publicPropertiesaa1a1[$name])) {
            return $this->valueHolder0a0de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);
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

    public function __destruct()
    {
        $this->initializer0ae13 || $this->valueHolder0a0de->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
