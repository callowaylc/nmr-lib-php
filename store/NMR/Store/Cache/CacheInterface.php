<?php /** @author Christian Calloway callowaylc@gmail christian@nomorerack */
namespace NMR\Store\Cache;

/** Honestly not a big believer in interfaces, but since we want
 ** to draw a common interface between all cache handling instances
 ** we are defining a few constracts
 **/
interface CacheInterface {

	public function read($key, $ttl  = null, callable $lambda);
	public function write($key, $ttl = null, $value);

	public function delete($key);
}