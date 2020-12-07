<?php

namespace FWhat\PHPCodePerformance\Bench\MethodExists;

use FWhat\PHPCodePerformance\Bench\MethodExists\Stub\TestClass;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

class MethodExistsBench {
    /**
     * @Revs(100000)
     * @Iterations(5)
     */
    public function benchMethodExists() {
        method_exists(new TestClass(), 'jsonSerialize');
    }

    /**
     * @Revs(100000)
     * @Iterations(5)
     */
    public function benchClassInstanceof() {
        ((new TestClass()) instanceof \JsonSerializable);
    }
}