<?php

namespace ContainerFfSXPuZ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb038f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer012e2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesffe39 = [
        
    ];

    public function getConnection()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getConnection', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getMetadataFactory', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getExpressionBuilder', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'beginTransaction', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getCache', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'transactional', array('func' => $func), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->transactional($func);
    }

    public function commit()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'commit', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->commit();
    }

    public function rollback()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'rollback', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getClassMetadata', array('className' => $className), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'createQuery', array('dql' => $dql), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'createNamedQuery', array('name' => $name), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'createQueryBuilder', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'flush', array('entity' => $entity), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'clear', array('entityName' => $entityName), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->clear($entityName);
    }

    public function close()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'close', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->close();
    }

    public function persist($entity)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'persist', array('entity' => $entity), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'remove', array('entity' => $entity), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'refresh', array('entity' => $entity), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'detach', array('entity' => $entity), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'merge', array('entity' => $entity), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'contains', array('entity' => $entity), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getEventManager', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getConfiguration', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'isOpen', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getUnitOfWork', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getProxyFactory', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'initializeObject', array('obj' => $obj), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'getFilters', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'isFiltersStateClean', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'hasFilters', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return $this->valueHolderb038f->hasFilters();
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

        $instance->initializer012e2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb038f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb038f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb038f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, '__get', ['name' => $name], $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        if (isset(self::$publicPropertiesffe39[$name])) {
            return $this->valueHolderb038f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb038f;

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

        $targetObject = $this->valueHolderb038f;
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
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb038f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb038f;
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
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, '__isset', array('name' => $name), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb038f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb038f;
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
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, '__unset', array('name' => $name), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb038f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb038f;
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
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, '__clone', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        $this->valueHolderb038f = clone $this->valueHolderb038f;
    }

    public function __sleep()
    {
        $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, '__sleep', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;

        return array('valueHolderb038f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer012e2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer012e2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer012e2 && ($this->initializer012e2->__invoke($valueHolderb038f, $this, 'initializeProxy', array(), $this->initializer012e2) || 1) && $this->valueHolderb038f = $valueHolderb038f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb038f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb038f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
