<?php

namespace ContainerXjUG7iq;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder623f5 = null;
    private $initializerc24ec = null;
    private static $publicProperties510de = [
        
    ];
    public function getConnection()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getConnection', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getMetadataFactory', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getExpressionBuilder', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'beginTransaction', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getCache', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'transactional', array('func' => $func), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'commit', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->commit();
    }
    public function rollback()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'rollback', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getClassMetadata', array('className' => $className), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'createQuery', array('dql' => $dql), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'createNamedQuery', array('name' => $name), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'createQueryBuilder', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'flush', array('entity' => $entity), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'clear', array('entityName' => $entityName), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->clear($entityName);
    }
    public function close()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'close', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->close();
    }
    public function persist($entity)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'persist', array('entity' => $entity), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'remove', array('entity' => $entity), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'refresh', array('entity' => $entity), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'detach', array('entity' => $entity), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'merge', array('entity' => $entity), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'contains', array('entity' => $entity), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getEventManager', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getConfiguration', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'isOpen', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getUnitOfWork', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getProxyFactory', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'initializeObject', array('obj' => $obj), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'getFilters', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'isFiltersStateClean', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'hasFilters', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return $this->valueHolder623f5->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc24ec = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder623f5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder623f5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder623f5->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, '__get', ['name' => $name], $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        if (isset(self::$publicProperties510de[$name])) {
            return $this->valueHolder623f5->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder623f5;
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
        $targetObject = $this->valueHolder623f5;
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
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder623f5;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder623f5;
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
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, '__isset', array('name' => $name), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder623f5;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder623f5;
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
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, '__unset', array('name' => $name), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder623f5;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder623f5;
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
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, '__clone', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        $this->valueHolder623f5 = clone $this->valueHolder623f5;
    }
    public function __sleep()
    {
        $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, '__sleep', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
        return array('valueHolder623f5');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc24ec = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc24ec;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc24ec && ($this->initializerc24ec->__invoke($valueHolder623f5, $this, 'initializeProxy', array(), $this->initializerc24ec) || 1) && $this->valueHolder623f5 = $valueHolder623f5;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder623f5;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder623f5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
