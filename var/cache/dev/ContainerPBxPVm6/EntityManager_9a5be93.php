<?php

namespace ContainerPBxPVm6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb3612 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb8f3b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5523a = [
        
    ];

    public function getConnection()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getConnection', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getMetadataFactory', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getExpressionBuilder', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'beginTransaction', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getCache', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'transactional', array('func' => $func), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->transactional($func);
    }

    public function commit()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'commit', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->commit();
    }

    public function rollback()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'rollback', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getClassMetadata', array('className' => $className), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'createQuery', array('dql' => $dql), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'createNamedQuery', array('name' => $name), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'createQueryBuilder', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'flush', array('entity' => $entity), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'clear', array('entityName' => $entityName), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->clear($entityName);
    }

    public function close()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'close', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->close();
    }

    public function persist($entity)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'persist', array('entity' => $entity), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'remove', array('entity' => $entity), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'refresh', array('entity' => $entity), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'detach', array('entity' => $entity), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'merge', array('entity' => $entity), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'contains', array('entity' => $entity), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getEventManager', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getConfiguration', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'isOpen', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getUnitOfWork', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getProxyFactory', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'initializeObject', array('obj' => $obj), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'getFilters', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'isFiltersStateClean', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'hasFilters', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return $this->valueHolderb3612->hasFilters();
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

        $instance->initializerb8f3b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb3612) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb3612 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb3612->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, '__get', ['name' => $name], $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        if (isset(self::$publicProperties5523a[$name])) {
            return $this->valueHolderb3612->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb3612;

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

        $targetObject = $this->valueHolderb3612;
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
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb3612;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb3612;
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
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, '__isset', array('name' => $name), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb3612;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb3612;
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
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, '__unset', array('name' => $name), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb3612;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb3612;
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
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, '__clone', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        $this->valueHolderb3612 = clone $this->valueHolderb3612;
    }

    public function __sleep()
    {
        $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, '__sleep', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;

        return array('valueHolderb3612');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb8f3b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb8f3b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb8f3b && ($this->initializerb8f3b->__invoke($valueHolderb3612, $this, 'initializeProxy', array(), $this->initializerb8f3b) || 1) && $this->valueHolderb3612 = $valueHolderb3612;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb3612;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb3612;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
