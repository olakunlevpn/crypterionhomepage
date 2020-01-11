<?php

namespace Olakunlevpn\Crypterionhomepage\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller {

	public function auth() {
		return Auth::user();
	}

	public function index() {

		$Buytrades = DB::table('marketplace_offers')->where('type', 'buy')->where('status', 1)
			->join('wallet_addresses', 'marketplace_offers.wallet_account_id', '=', 'wallet_addresses.id')
			->join('coins', 'wallet_addresses.wallet_id', '=', 'coins.id')
			->join('users', 'marketplace_offers.user_id', '=', 'users.id')
			->select('marketplace_offers.*', 'wallet_addresses.label', 'coins.name', 'coins.identifier', 'users.name')
			->orderBy('created_at', 'desc')->get();

		$Selltrades = DB::table('marketplace_offers')->where('type', 'sell')->where('status', 1)
			->join('wallet_addresses', 'marketplace_offers.wallet_account_id', '=', 'wallet_addresses.id')
			->join('coins', 'wallet_addresses.wallet_id', '=', 'coins.id')
			->join('users', 'marketplace_offers.user_id', '=', 'users.id')
			->select('marketplace_offers.*', 'wallet_addresses.label', 'coins.name', 'coins.identifier', 'users.name')
			->orderBy('created_at', 'desc')->get();

		$user = DB::table('users')->where('name', 'John')->first();
		$configs = config('crypterionhomepage');

		return view('crypterionhomepage::homepage')->with('data', $configs)->with('trades', $Buytrades)->with('selltrade', $Selltrades);
	}

	public function terms() {
		$configs = config('crypterionhomepage');

		return view('crypterionhomepage::terms')->with('data', $configs);
	}

	public function vendor() {

		$configs = config('crypterionhomepage');
		return view('crypterionhomepage::become-vendor')->with('data', $configs);
	}

	public function page() {

		$configs = config('crypterionhomepage');
		return view('crypterionhomepage::page')->with('data', $configs);
	}

	public function privacy() {

		$configs = config('crypterionhomepage');
		return view('crypterionhomepage::privacy')->with('data', $configs);
	}

	public function cookies() {

		$configs = config('crypterionhomepage');
		return view('crypterionhomepage::cookies')->with('data', $configs);
	}

	public function about() {

		$configs = config('crypterionhomepage');
		return view('crypterionhomepage::about')->with('data', $configs);
	}
}
