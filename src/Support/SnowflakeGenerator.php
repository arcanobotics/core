<?php

namespace Arcanobotics\Core\Support;

use Generator;
use InvalidArgumentException;
use RuntimeException;

class SnowflakeGenerator
{
    public const AND_INCREMENT = 0xFFF;

    public const AND_PROCESS   = 0x1F000;

    public const AND_WORKER    = 0x3E0000;

    public const EPOCH         = 1_576_866_143;

    public const SHIFT_PROCESS = 12;

    public const SHIFT_TS      = 22;

    public const SHIFT_WORKER  = 17;

    private static int $lastTimestamp = 0;

    private static int $lastIncrement = 0;

    public static function generateMultiple(int $worker, int $process, int $count): ?Generator
    {
        if ($count > 0) {
            for ($i = 0; $i < $count; $i++) {
                yield self::generate($worker, $process);
            }
        }

        throw new InvalidArgumentException('Multiple generation requires more than 0');
    }

    public static function generate(int $worker, int $process): Snowflake
    {
        $timestamp = self::currentTimestamp();

        if ($timestamp < self::$lastTimestamp) {
            throw new RuntimeException('Time is backwards, you\'ve got bigger issues!');
        }

        if ($timestamp === self::$lastTimestamp) {
            self::$lastIncrement++;

            if (self::$lastIncrement > 4095) {
                usleep(1);
                $timestamp           = self::currentTimestamp();
                self::$lastIncrement = 0;
            }
        } else {
            self::$lastIncrement = 0;
        }

        self::$lastTimestamp = $timestamp;

        $id = ((($timestamp - self::EPOCH) << self::SHIFT_TS)
            | ($process << self::SHIFT_PROCESS)
            | ($worker << self::SHIFT_WORKER)
            | self::$lastIncrement);

        self::$lastIncrement++;

        return new Snowflake($id);
    }

    private static function currentTimestamp(): int
    {
        return round(microtime(true) * 1000);
    }
}