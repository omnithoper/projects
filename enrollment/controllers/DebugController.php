<?php
class DebugController {
	public function indexAction() {
		phpinfo();
		die();
	}
}