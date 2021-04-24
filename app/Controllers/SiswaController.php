<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SiswaModel;

class SiswaController extends BaseController
{
	
  
	public function index()
	{
		$model= new SiswaModel();
		$data=[
			'title' => 'Data Siswa | Web Bootcamp 404',
			'siswa' => $model->getSiswa()->getResult(),
			'nama' => session()->get('nama'),
			'nis' => session()->get('nis'),
			'email' => session()->get('email'),
		];

		// var_dump($data['siswa']);die;
		return view('siswa',$data);
	}

	  public function save()
    {
        $model = new SiswaModel();
        $data = array(
            'nama'        => $this->request->getPost('nama'),
            'nis'       => $this->request->getPost('nis'),
            'email' => $this->request->getPost('email'),
			'password'=> password_hash('12345',PASSWORD_DEFAULT),
            'role' => 'siswa'
        );
		// var_dump($data);die;
        $model->saveSiswa($data);
		session()->setFlashdata('success', 'Data Siswa Berhasil Ditambah');
        return redirect()->to('/data-siswa');
    }

	public function update()
    {
        $model = new SiswaModel();
        $id = $this->request->getPost('id');
        $data = array(
			'nama'        => $this->request->getPost('nama'),
            'nis'       => $this->request->getPost('nis'),
            'email' => $this->request->getPost('email'),
			'password'=> password_hash('12345',PASSWORD_DEFAULT),
            'role' => 'siswa'
        );
        $model->updateSiswa($data, $id);
		session()->setFlashdata('warning', 'Data Siswa Berhasil Diubah');
        return redirect()->to('/data-siswa');
    }
	public function delete()
    {
        $model = new SiswaModel();
        $id = $this->request->getPost('id');
        $model->deleteSiswa($id);
		session()->setFlashdata('info', 'Data Siswa Berhasil Dihapus');
        return redirect()->to('/data-siswa');
    }

	

}