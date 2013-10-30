<?php /** @author Christian Calloway callowaylc@gmail christian@nomorerack */
namespace NMR\Store\Cache;
use Guzzle\Http\Client;

/** Honestly not a big believer in interfaces, but since we want
 ** to draw a common interface between all cache handling instances
 ** we are defining a few constracts
 **/
class Varnish extends Cache {

	/** Alias to Cache#delete; allowing for static calls as well */
	public function purge($key) {

		// create a guzzle client user current server
		// @TODO we need to abstract this into a varnish client, since
		// hosting server will NOT be localhost and $_SERVER can be 
		// spoofed anyways
		// @TODO need to do error checking against key
		// @TODO add asynch to request
		$client = new Client(
			"http://{$_SERVER['SERVER_ADDR']}/"
		);
		
		//echo $client->createRequest('PURGE', $key)->getUrl(); exit;
		$response = $client->createRequest('PURGE', $key)->send();

		// check response and manage exception in the event that
		// request could not be fulfilled
		// @PASS
	}

	public function write($key, $ttl = null, $value) {
		// @PASS
	}

	public function delete($key) {
		// @PASS 
	} 
}