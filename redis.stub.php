<?php

/**
 * @generate-function-entries
 * @generate-legacy-arginfo
 * @generate-class-entries
 */

class Redis {

    public function __construct(array $options = null);

    public function __destruct();

    public function _compress(string $value): string;

    public function _pack(mixed $value): string;

    public function _prefix(string $key): string;

    public function _serialize(mixed $value): string;

    public function _uncompress(string $value): string;

    public function _unpack(string $value): mixed;

    public function _unserialize(string $value): mixed;

    public function acl(string $subcmd, string ...$args): mixed;

    public function append(string $key, mixed $value): Redis|int|false;

    public function auth(#[\SensitiveParameter] mixed $credentials): Redis|bool;

    public function bgSave(): Redis|bool;

    public function bgrewriteaof(): Redis|bool;


    public function bitcount(string $key, int $start = 0, int $end = -1, bool $bybit = false): Redis|int|false;

    public function bitop(string $operation, string $deskey, string $srckey, string ...$other_keys): Redis|int|false;

    /**
      Return the position of the first bit set to 0 or 1 in a string.

      @see https://https://redis.io/commands/bitpos/

      @param string $key   The key to check (must be a string)
      @param bool   $bit   Whether to look for an unset (0) or set (1) bit.
      @param int    $start Where in the string to start looking.
      @param int    $end   Where in the string to stop looking.
      @param bool   $bybit If true, Redis will treat $start and $end as BIT values and not bytes, so if start
                           was 0 and end was 2, Redis would only search the first two bits.
     */
    public function bitpos(string $key, bool $bit, int $start = 0, int $end = -1, bool $bybit = false): Redis|int|false;

    public function blPop(string|array $key, string|float|int $timeout_or_key, mixed ...$extra_args): Redis|array|null|false;

    public function brPop(string|array $key, string|float|int $timeout_or_key, mixed ...$extra_args): Redis|array|null|false;

    public function brpoplpush(string $src, string $dst, int $timeout): Redis|string|false;

    public function bzPopMax(string|array $key, string|int $timeout_or_key, mixed ...$extra_args): Redis|array|false;

    public function bzPopMin(string|array $key, string|int $timeout_or_key, mixed ...$extra_args): Redis|array|false;

    public function bzmpop(float $timeout, array $keys, string $from, int $count = 1): Redis|array|null|false;

    public function zmpop(array $keys, string $from, int $count = 1): Redis|array|null|false;

    public function blmpop(float $timeout, array $keys, string $from, int $count = 1): Redis|array|null|false;

    public function lmpop(array $keys, string $from, int $count = 1): Redis|array|null|false;

    public function clearLastError(): Redis|bool;

    public function client(string $opt, mixed ...$args): mixed;

    public function close(): bool;

    public function command(string $opt = null, string|array $arg): mixed;

    public function config(string $operation, ?string $key = NULL, mixed $value = null): mixed;

    public function connect(string $host, int $port = 6379, float $timeout = 0, string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, array $context = null): bool;

    public function copy(string $src, string $dst, array $options = null): Redis|bool;

    public function dbSize(): Redis|int;

    public function debug(string $key): Redis|string;

    public function decr(string $key, int $by = 1): Redis|int|false;

    public function decrBy(string $key, int $value): Redis|int|false;

    public function del(array|string $key, string ...$other_keys): Redis|int|false;

    /**
     * @deprecated
     * @alias Redis::del
     */
    public function delete(array|string $key, string ...$other_keys): Redis|int|false;

    public function discard(): Redis|bool;

    public function dump(string $key): Redis|string;

    public function echo(string $str): Redis|string|false;

    public function eval(string $script, array $keys = null, int $num_keys = 0): mixed;

    public function evalsha(string $sha1, array $keys = null, int $num_keys = 0): mixed;

    public function exec(): Redis|array|false;

    public function exists(mixed $key, mixed ...$other_keys): Redis|int|bool;

    /**
       Sets an expiration in seconds on the key in question.  If connected to
       redis-server >= 7.0.0 you may send an additional "mode" argument which
       modifies how the command will execute.

       @param string  $key  The key to set an expiration on.
       @param ?string $mode A two character modifier that changes how the
                            command works.
                            NX - Set expiry only if key has no expiry
                            XX - Set expiry only if key has an expiry
                            LT - Set expiry only when new expiry is < current expiry
                            GT - Set expiry only when new expiry is > current expiry
     */
    public function expire(string $key, int $timeout, ?string $mode = NULL): Redis|bool;

    /**
      Set a key's expiration to a specific unix timestamp in seconds.  If
      connected to Redis >= 7.0.0 you can pass an optional 'mode' argument.

      @see Redis::expire() For a description of the mode argument.

       @param string  $key  The key to set an expiration on.
       @param ?string $mode A two character modifier that changes how the
                            command works.
     */
    public function expireAt(string $key, int $timestamp, ?string $mode = NULL): Redis|bool;

    public function failover(?array $to = null, bool $abort = false, int $timeout = 0): Redis|bool;

    public function expiretime(string $key): Redis|int|false;

    public function pexpiretime(string $key): Redis|int|false;

    /**
     * Deletes every key in all Redis databases
     *
     * @param  bool  $sync Whether to perform the task in a blocking or non-blocking way.
     *               when TRUE, PhpRedis will execute `FLUSHALL SYNC`, and when FALSE we
     *               will execute `FLUSHALL ASYNC`.  If the argument is omitted, we
     *               simply execute `FLUSHALL` and whether it is SYNC or ASYNC depends
     *               on Redis' `lazyfree-lazy-user-flush` config setting.
     * @return bool
     */
    public function flushAll(?bool $sync = null): Redis|bool;

    /**
     * Deletes all the keys of the currently selected database.
     *
     * @param  bool  $sync Whether to perform the task in a blocking or non-blocking way.
     *               when TRUE, PhpRedis will execute `FLUSHDB SYNC`, and when FALSE we
     *               will execute `FLUSHDB ASYNC`.  If the argument is omitted, we
     *               simply execute `FLUSHDB` and whether it is SYNC or ASYNC depends
     *               on Redis' `lazyfree-lazy-user-flush` config setting.
     * @return bool
     */
    public function flushDB(?bool $sync = null): Redis|bool;

    public function geoadd(string $key, float $lng, float $lat, string $member, mixed ...$other_triples): Redis|int|false;

    public function geodist(string $key, string $src, string $dst, ?string $unit = null): Redis|float|false;

    public function geohash(string $key, string $member, string ...$other_members): Redis|array|false;

    public function geopos(string $key, string $member, string ...$other_members): Redis|array|false;

    public function georadius(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []): mixed;

    public function georadius_ro(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []): mixed;

    public function georadiusbymember(string $key, string $member, float $radius, string $unit, array $options = []): mixed;

    public function georadiusbymember_ro(string $key, string $member, float $radius, string $unit, array $options = []): mixed;

    public function geosearch(string $key, array|string $position, array|int|float $shape, string $unit, array $options = []): array;

    public function geosearchstore(string $dst, string $src, array|string $position, array|int|float $shape, string $unit, array $options = []): Redis|array|int|false;

    public function get(string $key): mixed;

    public function getAuth(): mixed;

    public function getBit(string $key, int $idx): Redis|int|false;

    public function getEx(string $key, array $options = []): Redis|string|bool;

    public function getDBNum(): int;

    public function getDel(string $key): Redis|string|bool;

    public function getHost(): string;

    public function getLastError(): ?string;

    public function getMode(): int;

    public function getOption(int $option): mixed;

    public function getPersistentID(): ?string;

    public function getPort(): int;

    public function getRange(string $key, int $start, int $end): Redis|string|false;

    public function lcs(string $key1, string $key2, ?array $options = NULL): Redis|string|array|int|false;

    public function getReadTimeout(): int;

    public function getset(string $key, mixed $value): Redis|string|false;

    public function getTimeout(): int;

    public function hDel(string $key, string $member, string ...$other_members): Redis|int|false;

    public function hExists(string $key, string $member): Redis|bool;

    public function hGet(string $key, string $member): mixed;

    public function hGetAll(string $key): Redis|array|false;

    public function hIncrBy(string $key, string $member, int $value): Redis|int|false;

    public function hIncrByFloat(string $key, string $member, float $value): Redis|float|false;

    public function hKeys(string $key): Redis|array|false;

    public function hLen(string $key): Redis|int|false;

    public function hMget(string $key, array $keys): Redis|array|false;

    public function hMset(string $key, array $keyvals): Redis|bool|false;

    public function hRandField(string $key, array $options = null): Redis|string|array;

    public function hSet(string $key, string $member, mixed $value): Redis|int|false;

    public function hSetNx(string $key, string $member, string $value): Redis|bool;

    public function hStrLen(string $key, string $member): Redis|int|false;

    public function hVals(string $key): Redis|array|false;

    public function hscan(string $key, ?int &$iterator, ?string $pattern = null, int $count = 0): Redis|bool|array;

    /** @return Redis|int|false */
    public function incr(string $key, int $by = 1);

    /** @return Redis|int|false */
    public function incrBy(string $key, int $value);

    /** @return Redis|int|false */
    public function incrByFloat(string $key, float $value);

    public function info(string $opt = null): Redis|array|false;

    public function isConnected(): bool;

    /** @return Redis|array|false */
    public function keys(string $pattern);

    /**
     * @param mixed $elements
     * @return Redis|int|false
     */
    public function lInsert(string $key, string $pos, mixed $pivot, mixed $value);

    public function lLen(string $key): Redis|int|false;

    public function lMove(string $src, string $dst, string $wherefrom, string $whereto): Redis|string|false;

    public function lPop(string $key, int $count = 0): Redis|bool|string|array;

    public function lPos(string $key, mixed $value, array $options = null): Redis|null|bool|int|array;

    /**
     * @param mixed $elements
     * @return int|Redis
     */
    public function lPush(string $key, ...$elements);

    /**
     * @param mixed $elements
     * @return Redis|int|false
     */
    public function rPush(string $key, ...$elements);

    /** @return Redis|int|false*/
    public function lPushx(string $key, mixed $value);

    /** @return Redis|int|false*/
    public function rPushx(string $key, mixed $value);

    public function lSet(string $key, int $index, mixed $value): Redis|bool;

    public function lastSave(): int;

    public function lindex(string $key, int $index): mixed;

    public function lrange(string $key, int $start , int $end): Redis|array|false;

    /**
     * @return int|Redis|false
     */
    public function lrem(string $key, mixed $value, int $count = 0);

    public function ltrim(string $key, int $start , int $end): Redis|bool;

    /** @return array|Redis */
    public function mget(array $keys);

    public function migrate(string $host, int $port, string|array $key, int $dstdb, int $timeout,
                            bool $copy = false, bool $replace = false,
                            #[\SensitiveParameter] mixed $credentials = NULL): Redis|bool;

    public function move(string $key, int $index): bool;

    public function mset(array $key_values): Redis|bool;

    public function msetnx(array $key_values): Redis|bool;

    public function multi(int $value = Redis::MULTI): bool|Redis;

    public function object(string $subcommand, string $key): Redis|int|string|false;

    /**
     * @deprecated
     * @alias Redis::connect
     */
    public function open(string $host, int $port = 6379, float $timeout = 0, string $persistent_id = NULL, int $retry_interval = 0, float $read_timeout = 0, array $context = NULL): bool;

    public function pconnect(string $host, int $port = 6379, float $timeout = 0, string $persistent_id = NULL, int $retry_interval = 0, float $read_timeout = 0, array $context = NULL): bool;

    public function persist(string $key): bool;

    /**
       Sets an expiration in milliseconds on a given key.  If connected to
       Redis >= 7.0.0 you can pass an optional mode argument that modifies
       how the command will execute.

       @see Redis::expire() for a description of the mode argument.

       @param string  $key  The key to set an expiration on.
       @param ?string $mode A two character modifier that changes how the
                            command works.
     */
    public function pexpire(string $key, int $timeout, ?string $mode = NULL): bool;

    /**
      Set a key's expiration to a specific unix timestamp in milliseconds.  If
      connected to Redis >= 7.0.0 you can pass an optional 'mode' argument.

      @see Redis::expire() For a description of the mode argument.

       @param string  $key  The key to set an expiration on.
       @param ?string $mode A two character modifier that changes how the
                            command works.
     */
    public function pexpireAt(string $key, int $timestamp, ?string $mode = NULL): bool;

    public function pfadd(string $key, array $elements): int;

    public function pfcount(string $key): int;

    public function pfmerge(string $dst, array $keys): bool;

    /** @return string|Redis */
    public function ping(string $key = NULL);

    public function pipeline(): bool|Redis;

    /**
     * @deprecated
     * @alias Redis::pconnect
     */
    public function popen(string $host, int $port = 6379, float $timeout = 0, string $persistent_id = NULL, int $retry_interval = 0, float $read_timeout = 0, array $context = NULL): bool;

    /** @return bool|Redis */
    public function psetex(string $key, int $expire, mixed $value);

    public function psubscribe(array $patterns, callable $cb): bool;

    public function pttl(string $key): Redis|int|false;

    public function publish(string $channel, string $message): mixed;

    public function pubsub(string $command, mixed $arg = null): mixed;

    public function punsubscribe(array $patterns): Redis|array|bool;

    public function rPop(string $key, int $count = 0): Redis|array|string|bool;

    /** @return string|Redis */
    public function randomKey();

    public function rawcommand(string $command, mixed ...$args): mixed;

    /** @return bool|Redis */
    public function rename(string $key_src, string $key_dst);

    /** @return bool|Redis */
    public function renameNx(string $key_src, string $key_dst);

    public function reset(): bool;

    public function restore(string $key, int $timeout, string $value, ?array $options = NULL): bool;

    public function role(): mixed;

    public function rpoplpush(string $src, string $dst): Redis|string|false;

    public function sAdd(string $key, mixed $value, mixed ...$other_values): Redis|int|false;

    public function sAddArray(string $key, array $values): int;

    public function sDiff(string $key, string ...$other_keys): Redis|array|false;

    public function sDiffStore(string $dst, string $key, string ...$other_keys): Redis|int|false;

    public function sInter(array|string $key, string ...$other_keys): Redis|array|false;

    public function sintercard(array $keys, int $limit = -1): Redis|int|false;

    public function sInterStore(array|string $key, string ...$other_keys): Redis|int|false;

    public function sMembers(string $key): Redis|array|false;

    public function sMisMember(string $key, string $member, string ...$other_members): array;

    public function sMove(string $src, string $dst, mixed $value): Redis|bool;

    public function sPop(string $key, int $count = 0): Redis|string|array|false;

    public function sRandMember(string $key, int $count = 0): Redis|string|array|false;

    public function sUnion(string $key, string ...$other_keys): Redis|array|false;

    public function sUnionStore(string $dst, string $key, string ...$other_keys): Redis|int|false;

    public function save(): bool;

    public function scan(?int &$iterator, ?string $pattern = null, int $count = 0, string $type = NULL): array|false;

    public function scard(string $key): Redis|int|false;

    public function script(string $command, mixed ...$args): mixed;

    public function select(int $db): Redis|bool;

    public function set(string $key, mixed $value, mixed $opt = NULL): Redis|string|bool;

    /** @return Redis|int|false*/
    public function setBit(string $key, int $idx, bool $value);

    /** @return Redis|int|false*/
    public function setRange(string $key, int $start, string $value);


    public function setOption(int $option, mixed $value): bool;

    /** @return bool|Redis */
    public function setex(string $key, int $expire, mixed $value);

    /** @return bool|array|Redis */
    public function setnx(string $key, mixed $value);

    public function sismember(string $key, mixed $value): Redis|bool;

    public function slaveof(string $host = null, int $port = 6379): bool;

    public function slowlog(string $mode, int $option = 0): mixed;

    public function sort(string $key, ?array $options = null): mixed;

    /**
     * @deprecated
     */
    public function sortAsc(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null): array;

    /**
     * @deprecated
     */
    public function sortAscAlpha(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null): array;

    /**
     * @deprecated
     */
    public function sortDesc(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null): array;

    /**
     * @deprecated
     */
    public function sortDescAlpha(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null): array;

    public function srem(string $key, mixed $value, mixed ...$other_values): Redis|int|false;

    public function sscan(string $key, ?int &$iterator, ?string $pattern = null, int $count = 0): array|false;

    /** @return Redis|int|false*/
    public function strlen(string $key);

    public function subscribe(array $channels, callable $cb): bool;

    public function swapdb(string $src, string $dst): bool;

    public function time(): array;

    public function ttl(string $key): Redis|int|false;

    /** @return Redis|int|false*/
    public function type(string $key);

    /**
     * @return Redis|int|false
     */
    public function unlink(array|string $key, string ...$other_keys);

    public function unsubscribe(array $channels): Redis|array|bool;

    /** @return bool|Redis */
    public function unwatch();

    /**
     * @return bool|Redis
     */
    public function watch(array|string $key, string ...$other_keys);

    public function wait(int $count, int $timeout): int|false;

    public function xack(string $key, string $group, array $ids): int|false;

    public function xadd(string $key, string $id, array $values, int $maxlen = 0, bool $approx = false, bool $nomkstream = false): Redis|string|false;

    public function xautoclaim(string $key, string $group, string $consumer, int $min_idle, string $start, int $count = -1, bool $justid = false): Redis|bool|array;

    public function xclaim(string $key, string $group, string $consumer, int $min_idle, array $ids, array $options): Redis|bool|array;

    public function xdel(string $key, array $ids): Redis|int|false;

    public function xgroup(string $operation, string $key = null, string $arg1 = null, string $arg2 = null, bool $arg3 = false): mixed;

    public function xinfo(string $operation, ?string $arg1 = null, ?string $arg2 = null, int $count = -1): mixed;

    public function xlen(string $key): Redis|int|false;

    public function xpending(string $key, string $group, ?string $start = null, ?string $end = null, int $count = -1, ?string $consumer = null): Redis|array|false;

    public function xrange(string $key, string $start, string $end, int $count = -1): Redis|array|bool;

    public function xread(array $streams, int $count = -1, int $block = -1): Redis|array|bool;

    public function xreadgroup(string $group, string $consumer, array $streams, int $count = 1, int $block = 1): Redis|array|bool;

    public function xrevrange(string $key, string $start, string $end, int $count = -1): Redis|array|bool;

    public function xtrim(string $key, int $maxlen, bool $approx = false, bool $minid = false, int $limit = -1): Redis|int|false;

    public function zAdd(string $key, array|float $score_or_options, mixed ...$more_scores_and_mems): Redis|int|false;

    public function zCard(string $key): Redis|int|false;

    public function zCount(string $key, string $start , string $end): Redis|int|false;

    public function zIncrBy(string $key, float $value, mixed $member): Redis|float|false;

    public function zLexCount(string $key, string $min, string $max): Redis|int|false;

    public function zMscore(string $key, string $member, string ...$other_members): Redis|array|false;

    public function zPopMax(string $key, int $value = null): Redis|array|false;

    public function zPopMin(string $key, int $value = null): Redis|array|false;

    public function zRange(string $key, int $start, int $end, mixed $scores = null): Redis|array|false;

    public function zRangeByLex(string $key, string $min, string $max, int $offset = -1, int $count = -1): Redis|array|false;

    public function zRangeByScore(string $key, string $start, string $end, array $options = []): Redis|array|false;

    public function zRandMember(string $key, array $options = null): Redis|string|array;

    public function zRank(string $key, mixed $member): Redis|int|false;

    public function zRem(mixed $key, mixed $member, mixed ...$other_members): Redis|int|false;

    public function zRemRangeByLex(string $key, string $min, string $max): Redis|int|false;

    public function zRemRangeByRank(string $key, int $start, int $end): Redis|int|false;

    public function zRemRangeByScore(string $key, string $start, string $end): Redis|int|false;

    public function zRevRange(string $key, int $start, int $end, mixed $scores = null): Redis|array|false;

    public function zRevRangeByLex(string $key, string $min, string $max, int $offset = -1, int $count = -1): Redis|array|false;

    public function zRevRangeByScore(string $key, string $start, string $end, array $options = []): Redis|array|false;

    public function zRevRank(string $key, mixed $member): Redis|int|false;

    public function zScore(string $key, mixed $member): Redis|float|false;

    public function zdiff(array $keys, array $options = null): Redis|array|false;

    public function zdiffstore(string $dst, array $keys, array $options = null): Redis|int|false;

    public function zinter(array $keys, ?array $weights = null, ?array $options = null): Redis|array|false;

    public function zintercard(array $keys, int $limit = -1): Redis|int|false;

    public function zinterstore(string $dst, array $keys, ?array $weights = null, ?string $aggregate = null): Redis|int|false;

    public function zscan(string $key, ?int &$iterator, ?string $pattern = null, int $count = 0): Redis|bool|array;

    public function zunion(array $keys, ?array $weights = null, ?array $options = null): Redis|array|false;

    public function zunionstore(string $dst, array $keys, ?array $weights = NULL, ?string $aggregate = NULL): Redis|int|false;
}

class RedisException extends RuntimeException {}
