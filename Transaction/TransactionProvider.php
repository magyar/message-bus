<?php

declare(strict_types=1);

namespace Telephantast\MessageBus\Transaction;

/**
 * @api
 */
interface TransactionProvider
{
    /**
     * @template TResult
     * @param callable(): TResult $operation
     * @return TResult
     */
    public function wrapInTransaction(callable $operation): mixed;
}
