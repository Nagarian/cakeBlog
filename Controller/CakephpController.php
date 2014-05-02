<?php
class CakephpController extends AppController {
	public function index() {
		$this->set('cakephp', $this->Paginator->paginate());
	}
}