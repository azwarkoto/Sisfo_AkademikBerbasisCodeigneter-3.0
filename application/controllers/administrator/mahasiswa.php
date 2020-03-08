<?php

class Mahasiswa extends CI_Controller{

	public function index()
{
      $data['mahasiswa']  = $this->mahasiswa_model->tampil_data('mahasiswa')->result();
       $data['prodi']  = $this->prodi_model->tampil_data('prodi')->result();   
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/mahasiswa',$data);
		$this->load->view('templates_administrator/footer');
}

public function detail($id)
	{
		$data['detail'] = $this->mahasiswa_model->ambil_id_mahasiswa($id);
        $this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/mahasiswa_detail',$data);
		$this->load->view('templates_administrator/footer');
	}


public function tambah_mahasiswa()

{       
	   $data['prodi']  = $this->mahasiswa_model->tampil_data('prodi')->result();
	    $this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/mahasiswa_form',$data);
		$this->load->view('templates_administrator/footer');
}

public function tambah_mahasiswa_aksi()

{
	$this->_rules();
	if($this->form_validation->run() == FALSE) {
		$this->tambah_mahasiswa();
	}else{
		$nim = $this->input->post('nim');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$telepon = $this->input->post('telepon');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nama_prodi= $this->input->post('nama_prodi');
		$photo = $_FILES['photo'];
			if ($photo =''){}else{
			$config['upload_path']  ='./assets/uploads';
			$config['allowed_types'] ='jpg|png|gif';
             
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('photo')){
            	echo "upload Gagal"; die();
            }else{
            	$photo=$this->upload->data('file_name');
            }
		}

		$data = array (
			'nim'             => $nim,
			'nama_lengkap'    => $nama_lengkap,
			'alamat'          => $alamat,
			'email'           => $email,
			'telepon'         => $telepon,
			'tempat_lahir'    => $tempat_lahir,
			'tanggal_lahir'   => $tanggal_lahir,
			'jenis_kelamin'   => $jenis_kelamin,
			'nama_prodi'      => $nama_prodi,
			'photo'           => $photo

	);

	$this->mahasiswa_model->insert_data($data, 'mahasiswa');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data Mahasiswa  Berhasil Di Tambahkan !!! 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>');
			redirect('administrator/mahasiswa');
		}
	

        }

	
	public function _rules()
	{
		$this->form_validation->set_rules('nim','Nim','required',[
        'required'  => 'NIM Wajib Di Isi'
		]);

			$this->form_validation->set_rules('nama_lengkap','NAMA LENGKAP','required',[
        'required'  => 'NAMA LENGKAP LENGWajib Di Isi'
		]);
				$this->form_validation->set_rules('alamat','ALAMAT','required',[
        'required'  => 'ALAMAT Wajib Di Isi'
		]);
					$this->form_validation->set_rules('email','EMAIL','required',[
        'required'  => 'EMAIL Wajib Di Isi'
		]);
						$this->form_validation->set_rules('telepon','TELEPON','required',[
        'required'  => 'TELEPON Wajib Di Isi'
		]);
							$this->form_validation->set_rules('tempat_lahir','TEMPAT LAHIR','required',[
        'required'  => 'TEMPAT LAHIR Wajib Di Isi'
		]);
								$this->form_validation->set_rules('tanggal_lahir','TANGGAL LAHIR','required',[
        'required'  => 'TANGGAL LAHIR Wajib Di Isi'
		]);
									$this->form_validation->set_rules('jenis_kelamin','JENIS KELAMIN','required',[
        'required'  => 'JENIS KELAMIN Wajib Di Isi'
		]);
										$this->form_validation->set_rules('nama_prodi','NAMA PRODI','required',[
        'required'  => 'NAMA PRODI Wajib Di Isi'
		]);


}

     	public function update($id)
     	{
     		$where =array('id' => $id);
     		$data['mahasiswa'] = $this->db->query("select * from mahasiswa mhs,prodi prd where
     		 mhs.nama_prodi=prd.nama_prodi and mhs.id='$id'")->result();
     		$data['prodi'] = $this->matakuliah_model->tampil_data('prodi')->result();
     		$data['detail'] = $this->mahasiswa_model->ambil_id_mahasiswa($id);
     	    $this->load->view('templates_administrator/header');
		    $this->load->view('templates_administrator/sidebar');
		    $this->load->view('administrator/mahasiswa_update',$data);
		    $this->load->view('templates_administrator/footer');
     	}

	        public function update_mahasiswa_aksi()
	        {
	        	$this->_rules();

	        	if($this->form_validation->run() == FALSE)
	        	{
	        		 $this->update();
	        		}else{
        $id = $this->input->post('id');
	    $nim = $this->input->post('nim');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$telepon = $this->input->post('telepon');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nama_prodi= $this->input->post('nama_prodi');
		$photo = $_FILES['userfile']['name'];
		if ($photo){
			$config['upload_path']  ='./assets/uploads';
			$config['allowed_types'] ='jpg|png|gif';
             
            $this->load->library('upload',$config);
            if($this->upload->do_upload('userfile')){
            	$userfile = $this->upload->data('file_name');
            	$this->db->set('photo', $userfile);
            }else{
            	echo "Gagal Upload";
            }

	        	}
		$data = array (
			'nim'             => $nim,
			'nama_lengkap'    => $nama_lengkap,
			'alamat'          => $alamat,
			'email'           => $email,
			'telepon'         => $telepon,
			'tempat_lahir'    => $tempat_lahir,
			'tanggal_lahir'   => $tanggal_lahir,
			'jenis_kelamin'   => $jenis_kelamin,
			'nama_prodi'      => $nama_prodi,
			
	);


		$where = array (
			'id' => $id


		);

	$this->mahasiswa_model->update_data($where,$data, 'mahasiswa');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data Mahasiswa  Berhasil Di Update !!! 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>');
			redirect('administrator/mahasiswa');
	        }

	    }

	    public function delete($id)
	{
		$where = array('id' => $id);
		$this->mahasiswa_model->hapus_data($where,'mahasiswa');

		 $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
               Data Mahasiswa Berhasil Di Hapus !!! 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>');
			redirect('administrator/mahasiswa');

	}

	}
