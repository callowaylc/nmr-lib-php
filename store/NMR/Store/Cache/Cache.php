<?php /** @author Christian Calloway callowaylc@gmail christian@nomorerack */
namespace NMR\Store\Cache;

/** Defines generic behavior for cache responsible classes */
abstract class Cache implements CacheInterface {

	/** Reads key value from cache and applies ttl if necessary */
	public function read($key, $ttl = null, callable $lambda) {
		// @PASS
	}
}