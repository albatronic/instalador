<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 16.10.2012 16:33:56
 */

/**
 * @orm:Entity(PcaeApps)
 */
class PcaeApps extends PcaeAppsEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>