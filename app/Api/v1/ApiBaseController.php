<?php

	namespace App\Api\v1;

	use Dingo\Api\Http\Request;
	use Laravel\Lumen\Routing\Controller as BaseController;
	use App\Repositories\CacheRepository;

	/**
	 * Class ApiBaseController
	 * @package App\Api\v1
	 */
	class ApiBaseController extends BaseController
	{
		/**
		 * @var ApiService
		 */
		public $api;

		/**
		 * @var ResponseService
		 */
		public $response;

		/**
		 * @var ACLService
		 */
		public $acl;

		/**
		 * @var Cache
		 */
		public $cache;

		/**
		 * @var Log
		 */
		public $log;

		public function __construct()
		{
			$this->api = app('ApiService');
			$this->response = app('ResponseService');
			$this->acl = app('ACLService');
			$this->cache = app('cache.service');
			$this->log = app('LogService');
		}
	}
