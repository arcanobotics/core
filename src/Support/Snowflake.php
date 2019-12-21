<?php

namespace Ollieread\MMO\Support;

final class Snowflake
{
    protected int  $timestamp;

    protected int  $workerId;

    protected int  $processId;

    protected int  $increment;

    private string $id;

    public function __construct(string $id)
    {
        $this->id        = $id;
        $this->timestamp = ($this->id >> SnowflakeGenerator::SHIFT_TS) + SnowflakeGenerator::EPOCH;
        $this->workerId  = ($this->id & SnowflakeGenerator::AND_WORKER) >> SnowflakeGenerator::SHIFT_WORKER;
        $this->processId = ($this->id & SnowflakeGenerator::AND_PROCESS) >> SnowflakeGenerator::SHIFT_PROCESS;
        $this->increment = $this->id & SnowflakeGenerator::AND_INCREMENT;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function timestamp(): int
    {
        return $this->timestamp;
    }

    public function worker(): int
    {
        return $this->workerId;
    }

    public function process(): int
    {
        return $this->processId;
    }

    public function increment(): int
    {
        return $this->increment;
    }

    public function __toString(): string
    {
        return $this->id();
    }

    public function __debugInfo()
    {
        return [
            'id'    => $this->id(),
            'parts' => [
                'timestamp' => $this->timestamp(),
                'worker'    => $this->worker(),
                'process'   => $this->process(),
                'increment' => $this->increment(),
            ],
        ];
    }

    public function is(Snowflake $snowflake): bool
    {
        return $this->id === $snowflake->id();
    }
}