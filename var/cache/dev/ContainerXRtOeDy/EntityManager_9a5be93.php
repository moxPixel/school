<?php

namespace ContainerXRtOeDy;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9b14c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer711a8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese23a6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getConnection', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getMetadataFactory', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getExpressionBuilder', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'beginTransaction', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getCache', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'transactional', array('func' => $func), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'commit', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->commit();
    }

    public function rollback()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'rollback', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getClassMetadata', array('className' => $className), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'createQuery', array('dql' => $dql), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'createNamedQuery', array('name' => $name), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'createQueryBuilder', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'flush', array('entity' => $entity), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'clear', array('entityName' => $entityName), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->clear($entityName);
    }

    public function close()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'close', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->close();
    }

    public function persist($entity)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'persist', array('entity' => $entity), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'remove', array('entity' => $entity), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'refresh', array('entity' => $entity), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'detach', array('entity' => $entity), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'merge', array('entity' => $entity), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'contains', array('entity' => $entity), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getEventManager', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getConfiguration', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'isOpen', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getUnitOfWork', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getProxyFactory', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'initializeObject', array('obj' => $obj), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'getFilters', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'isFiltersStateClean', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'hasFilters', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return $this->valueHolder9b14c->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer711a8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9b14c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9b14c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9b14c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, '__get', ['name' => $name], $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        if (isset(self::$publicPropertiese23a6[$name])) {
            return $this->valueHolder9b14c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b14c;

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

        $targetObject = $this->valueHolder9b14c;
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
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b14c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9b14c;
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
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, '__isset', array('name' => $name), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b14c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9b14c;
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
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, '__unset', array('name' => $name), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b14c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9b14c;
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
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, '__clone', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        $this->valueHolder9b14c = clone $this->valueHolder9b14c;
    }

    public function __sleep()
    {
        $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, '__sleep', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;

        return array('valueHolder9b14c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer711a8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer711a8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer711a8 && ($this->initializer711a8->__invoke($valueHolder9b14c, $this, 'initializeProxy', array(), $this->initializer711a8) || 1) && $this->valueHolder9b14c = $valueHolder9b14c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9b14c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9b14c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
