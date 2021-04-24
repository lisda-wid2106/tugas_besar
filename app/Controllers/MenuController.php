<?php

namespace App\Controllers;

class MenuController extends BaseController
{
	public function home()
	{
		$data = [
			'title' => 'Home | Web Bootcamp 404'

		];
		return view('beranda', $data);
	}

	public function info_kegiatan()
	{
		$data = [
			'title' => 'Info Kegiatan | Web Bootcamp 404'
		];
		return view('info-kegiatan', $data);
	}

	public function data_siswa()
	{
		$data = [
			'title' => 'Data Siswa | Web Bootcamp 404'
		];
		return view('siswa', $data);
	}

	//--------------------------------------------------------------------

}
