<?php /** @author Christian Calloway callowaylc@gmail christian@nomorerack */
namespace NMR\Store\Cache;

/** Honestly not a big believer in interfaces, but since we want
 ** to draw a common interface between all cache handling instances
 ** we are defining a few constracts
 **/
class Varnish extends Cache {

	/** Alias to Cache#delete; allowing for static calls as well */
	public function purge($key) { }

	public function write($key, $ttl = null, $value) {
		// @PASS
	}

	public function delete($key) {
		// @PASS 
	} 
}