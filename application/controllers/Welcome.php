<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as DB;

use application\eloquents\Orang;
use application\eloquents\Barang;

class Welcome extends CI_Controller {

	public function index()
	{
		$orang = Orang::with('barangs.orang.barangs')->get();
		$barang = Barang::with('orang.barangs.orang')->get();
		dd([
			$orang,
			$barang,
			base_url(),
			getenv('HTTPS_ONLY')
		]);

		return blade('welcome', compact(['orang']));
	}
}
