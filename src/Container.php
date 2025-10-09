<?php

namespace Amdadulhaq\PhpFramework;

use Closure;
use Exception;
use ReflectionClass;

class Container
{
    private array $registry = [];

    public function set(string $name, Closure $value): void
    {
        $this->registry[$name] = $value;
    }

    /**
     * @throws \ReflectionException
     * @throws \Exception
     */
    public function get(string $class): object
    {
        if (array_key_exists($class, $this->registry)) {
            return $this->registry[$class]();
        }

        $reflector = new ReflectionClass($class);

        if (!$reflector->isInstantiable()) {
            throw new Exception("Target [$class] is not instantiable.");
        }

        $constructor = $reflector->getConstructor();

        if ($constructor === null) {
            return new $class;
        }

        $parameters = $constructor->getParameters();
        $dependencies = [];

        foreach ($parameters as $parameter) {
            $type = $parameter->getType();
            if ($type === null || $type->isBuiltin()) {
                throw new Exception("Cannot resolve untyped or built-in parameter: {$parameter->getName()}");
            }
            $dependencies[] = $this->get($type->getName());
        }

        return new $class(...$dependencies);
    }
}