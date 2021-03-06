<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/stats.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>grpc.testing.ServerStats</code>
 */
class ServerStats extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * wall clock time change in seconds since last reset
     * </pre>
     *
     * <code>double time_elapsed = 1;</code>
     */
    private $time_elapsed = 0.0;
    /**
     * <pre>
     * change in user time (in seconds) used by the server since last reset
     * </pre>
     *
     * <code>double time_user = 2;</code>
     */
    private $time_user = 0.0;
    /**
     * <pre>
     * change in server time (in seconds) used by the server process and all
     * threads since last reset
     * </pre>
     *
     * <code>double time_system = 3;</code>
     */
    private $time_system = 0.0;
    /**
     * <pre>
     * change in total cpu time of the server (data from proc/stat)
     * </pre>
     *
     * <code>uint64 total_cpu_time = 4;</code>
     */
    private $total_cpu_time = 0;
    /**
     * <pre>
     * change in idle time of the server (data from proc/stat)
     * </pre>
     *
     * <code>uint64 idle_cpu_time = 5;</code>
     */
    private $idle_cpu_time = 0;

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Testing\Stats::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * wall clock time change in seconds since last reset
     * </pre>
     *
     * <code>double time_elapsed = 1;</code>
     */
    public function getTimeElapsed()
    {
        return $this->time_elapsed;
    }

    /**
     * <pre>
     * wall clock time change in seconds since last reset
     * </pre>
     *
     * <code>double time_elapsed = 1;</code>
     */
    public function setTimeElapsed($var)
    {
        GPBUtil::checkDouble($var);
        $this->time_elapsed = $var;
    }

    /**
     * <pre>
     * change in user time (in seconds) used by the server since last reset
     * </pre>
     *
     * <code>double time_user = 2;</code>
     */
    public function getTimeUser()
    {
        return $this->time_user;
    }

    /**
     * <pre>
     * change in user time (in seconds) used by the server since last reset
     * </pre>
     *
     * <code>double time_user = 2;</code>
     */
    public function setTimeUser($var)
    {
        GPBUtil::checkDouble($var);
        $this->time_user = $var;
    }

    /**
     * <pre>
     * change in server time (in seconds) used by the server process and all
     * threads since last reset
     * </pre>
     *
     * <code>double time_system = 3;</code>
     */
    public function getTimeSystem()
    {
        return $this->time_system;
    }

    /**
     * <pre>
     * change in server time (in seconds) used by the server process and all
     * threads since last reset
     * </pre>
     *
     * <code>double time_system = 3;</code>
     */
    public function setTimeSystem($var)
    {
        GPBUtil::checkDouble($var);
        $this->time_system = $var;
    }

    /**
     * <pre>
     * change in total cpu time of the server (data from proc/stat)
     * </pre>
     *
     * <code>uint64 total_cpu_time = 4;</code>
     */
    public function getTotalCpuTime()
    {
        return $this->total_cpu_time;
    }

    /**
     * <pre>
     * change in total cpu time of the server (data from proc/stat)
     * </pre>
     *
     * <code>uint64 total_cpu_time = 4;</code>
     */
    public function setTotalCpuTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->total_cpu_time = $var;
    }

    /**
     * <pre>
     * change in idle time of the server (data from proc/stat)
     * </pre>
     *
     * <code>uint64 idle_cpu_time = 5;</code>
     */
    public function getIdleCpuTime()
    {
        return $this->idle_cpu_time;
    }

    /**
     * <pre>
     * change in idle time of the server (data from proc/stat)
     * </pre>
     *
     * <code>uint64 idle_cpu_time = 5;</code>
     */
    public function setIdleCpuTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->idle_cpu_time = $var;
    }

}

