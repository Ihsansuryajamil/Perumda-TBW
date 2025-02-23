<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('m_data');
		$this->load->library('form_validation');

		// cek session yang login, 
		// jika session status tidak sama dengan session telah_login, berarti pengguna belum login
		// maka halaman akan di alihkan kembali ke halaman login.
		if($this->session->userdata('status')!="telah_login"){
			redirect(base_url().'login?alert=belum_login');
		}
	}

	public function index()
	{
		// hitung jumlah artikel
		$data['jumlah_artikel'] = $this->m_data->get_data('artikel')->num_rows();
		// hitung jumlah kategori
		$data['jumlah_kategori'] = $this->m_data->get_data('kategori')->num_rows();
		// hitung jumlah pengguna
		$data['jumlah_pengguna'] = $this->m_data->get_data('pengguna')->num_rows();
		// hitung jumlah halaman
		$data['jumlah_halaman'] = $this->m_data->get_data('halaman')->num_rows();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_index',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('login?alert=logout');
	}

	public function ganti_password()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_ganti_password');
		$this->load->view('dashboard/v_footer');
	}

	public function ganti_password_aksi()
	{

		// form validasi
		$this->form_validation->set_rules('password_lama','Password Lama','required');
		$this->form_validation->set_rules('password_baru','Password Baru','required|min_length[8]');
		$this->form_validation->set_rules('konfirmasi_password','Konfirmasi Password Baru','required|matches[password_baru]');

		// cek validasi
		if($this->form_validation->run() != false){

			// menangkap data dari form
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru');
			$konfirmasi_password = $this->input->post('konfirmasi_password');

			// cek kesesuaian password lama dengan id pengguna yang sedang login dan password lama
			$where = array(
				'pengguna_id' => $this->session->userdata('id'),
				'pengguna_password' => md5($password_lama)
			);
			$cek = $this->m_data->cek_login('pengguna', $where)->num_rows();

			// cek kesesuaikan password lama
			if($cek > 0){

				// update data password pengguna
				$w = array(
					'pengguna_id' => $this->session->userdata('id')
				);
				$data = array(
					'pengguna_password' => md5($password_baru)
				);
				$this->m_data->update_data($where, $data, 'pengguna');

				// alihkan halaman kembali ke halaman ganti password
				redirect('dashboard/ganti_password?alert=sukses');
			}else{
				// alihkan halaman kembali ke halaman ganti password
				redirect('index.php/dashboard/ganti_password?alert=gagal');
			}

		}else{
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_ganti_password');
			$this->load->view('dashboard/v_footer');
		}

	}

	// CRUD KATEGORI
	public function kategori()
	{
		$data['kategori'] = $this->m_data->get_data('kategori')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_kategori',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function kategori_tambah()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_kategori_tambah');
		$this->load->view('dashboard/v_footer');
	}

	public function kategori_aksi()
	{
		$this->form_validation->set_rules('kategori','Kategori','required');

		if($this->form_validation->run() != false){

			$kategori = $this->input->post('kategori');

			$data = array(
				'kategori_nama' => $kategori,
				'kategori_slug' => strtolower(url_title($kategori))
			);

			$this->m_data->insert_data($data,'kategori');

			redirect(base_url().'index.php/dashboard/kategori');
			
		}else{
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_kategori_tambah');
			$this->load->view('dashboard/v_footer');
		}
	}

	public function kategori_edit($id)
	{
		$where = array(
			'kategori_id' => $id
		);
		$data['kategori'] = $this->m_data->edit_data($where,'kategori')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_kategori_edit',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function kategori_update()
	{
		$this->form_validation->set_rules('kategori','Kategori','required');

		if($this->form_validation->run() != false){

			$id = $this->input->post('id');
			$kategori = $this->input->post('kategori');

			$where = array(
				'kategori_id' => $id
			);

			$data = array(
				'kategori_nama' => $kategori,
				'kategori_slug' => strtolower(url_title($kategori))
			);

			$this->m_data->update_data($where, $data,'kategori');

			redirect(base_url().'index.php/dashboard/kategori');
			
		}else{

			$id = $this->input->post('id');
			$where = array(
				'kategori_id' => $id
			);
			$data['kategori'] = $this->m_data->edit_data($where,'kategori')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_kategori_edit',$data);
			$this->load->view('dashboard/v_footer');
		}
	}


	public function kategori_hapus($id)
	{
		$where = array(
			'kategori_id' => $id
		);

		$this->m_data->delete_data($where,'kategori');

		redirect(base_url().'index.php/dashboard/kategori');
	}
	// END CRUD KATEGORI

	// CRUD ARTIKEL
	public function artikel()
	{
		$data['artikel'] = $this->db->query("SELECT * FROM artikel,kategori,pengguna WHERE artikel_kategori=kategori_id and artikel_author=pengguna_id order by artikel_id desc")->result();	
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_artikel',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function artikel_tambah()
	{
		$data['kategori'] = $this->m_data->get_data('kategori')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_artikel_tambah',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function artikel_aksi()
	{
		// Wajib isi judul,konten dan kategori
		$this->form_validation->set_rules('judul','Judul','required|is_unique[artikel.artikel_judul]');
		$this->form_validation->set_rules('konten','Konten','required');
		$this->form_validation->set_rules('kategori','Kategori','required');

		// Membuat gambar wajib di isi
		if (empty($_FILES['sampul']['name'])){
			$this->form_validation->set_rules('sampul', 'Gambar Sampul', 'required');
		}

		if($this->form_validation->run() != false){

			$config['upload_path']   = './gambar/artikel/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('sampul')) {

				// mengambil data tentang gambar
				$gambar = $this->upload->data();

				$tanggal = date('Y-m-d H:i:s');
				$judul = $this->input->post('judul');
				$slug = strtolower(url_title($judul));
				$konten = $this->input->post('konten');
				$sampul = $gambar['file_name'];
				$author = $this->session->userdata('id');
				$kategori = $this->input->post('kategori');
				$status = $this->input->post('status');

				$data = array(
					'artikel_tanggal' => $tanggal,
					'artikel_judul' => $judul,
					'artikel_slug' => $slug,
					'artikel_konten' => $konten,
					'artikel_sampul' => $sampul,
					'artikel_author' => $author,
					'artikel_kategori' => $kategori,
					'artikel_status' => $status,
				);

				$this->m_data->insert_data($data,'artikel');

				redirect(base_url().'index.php/dashboard/artikel');	
				
			} else {

				$this->form_validation->set_message('sampul', $data['gambar_error'] = $this->upload->display_errors());

				$data['kategori'] = $this->m_data->get_data('kategori')->result();
				$this->load->view('dashboard/v_header');
				$this->load->view('dashboard/v_artikel_tambah',$data);
				$this->load->view('dashboard/v_footer');
			}

		}else{
			$data['kategori'] = $this->m_data->get_data('kategori')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_artikel_tambah',$data);
			$this->load->view('dashboard/v_footer');
		}
	}


	public function artikel_edit($id)
	{
		$where = array(
			'artikel_id' => $id
		);
		$data['artikel'] = $this->m_data->edit_data($where,'artikel')->result();
		$data['kategori'] = $this->m_data->get_data('kategori')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_artikel_edit',$data);
		$this->load->view('dashboard/v_footer');
	}


	public function artikel_update()
	{
		// Wajib isi judul,konten dan kategori
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('konten','Konten','required');
		$this->form_validation->set_rules('kategori','Kategori','required');
		
		if($this->form_validation->run() != false){

			$id = $this->input->post('id');

			$judul = $this->input->post('judul');
			$slug = strtolower(url_title($judul));
			$konten = $this->input->post('konten');
			$kategori = $this->input->post('kategori');
			$status = $this->input->post('status');

			$where = array(
				'artikel_id' => $id
			);

			$data = array(
				'artikel_judul' => $judul,
				'artikel_slug' => $slug,
				'artikel_konten' => $konten,
				'artikel_kategori' => $kategori,
				'artikel_status' => $status,
			);

			$this->m_data->update_data($where,$data,'artikel');


			if (!empty($_FILES['sampul']['name'])){
				$config['upload_path']   = './gambar/artikel/';
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('sampul')) {

					// mengambil data tentang gambar
					$gambar = $this->upload->data();

					$data = array(
						'artikel_sampul' => $gambar['file_name'],
					);

					$this->m_data->update_data($where,$data,'artikel');

					redirect(base_url().'index.php/dashboard/artikel');	

				} else {
					$this->form_validation->set_message('sampul', $data['gambar_error'] = $this->upload->display_errors());
					
					$where = array(
						'artikel_id' => $id
					);
					$data['artikel'] = $this->m_data->edit_data($where,'artikel')->result();
					$data['kategori'] = $this->m_data->get_data('kategori')->result();
					$this->load->view('dashboard/v_header');
					$this->load->view('dashboard/v_artikel_edit',$data);
					$this->load->view('dashboard/v_footer');
				}
			}else{
				redirect(base_url().'index.php/dashboard/artikel');	
			}

		}else{
			$id = $this->input->post('id');
			$where = array(
				'artikel_id' => $id
			);
			$data['artikel'] = $this->m_data->edit_data($where,'artikel')->result();
			$data['kategori'] = $this->m_data->get_data('kategori')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_artikel_edit',$data);
			$this->load->view('dashboard/v_footer');
		}
	}

	public function artikel_hapus($id)
	{
		$where = array(
			'artikel_id' => $id
		);

		$this->m_data->delete_data($where,'artikel');

		redirect(base_url().'index.php/dashboard/artikel');
	}
	// end crud artikel

	// CRUD MITRA
	
	// Menampilkan daftar mitra
	public function mitra() {
		$data['mitra'] = $this->db->query("SELECT * FROM daftarMitra ORDER BY mitra_id DESC")->result();    
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_mitra', $data);
		$this->load->view('dashboard/v_footer');
	}

	// Menampilkan form tambah mitra
	public function mitra_tambah() {
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_mitra_tambah');
		$this->load->view('dashboard/v_footer');
	}

	// Aksi untuk menambah mitra
	public function mitra_aksi() {
		// Wajib isi nama dan deskripsi
		$this->form_validation->set_rules('nama_mitra', 'Nama Mitra', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

		// Cek validasi form
		if ($this->form_validation->run() != false) {

			// Cek apakah ada file gambar yang diupload
			if (!empty($_FILES['gambar']['name'])) {
				$config['upload_path']   = './gambar/artikel/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$gambar = $this->upload->data();
					$gambar_mitra = $gambar['file_name'];
				} else {
					$data['gambar_error'] = $this->upload->display_errors();
					$this->load->view('dashboard/v_header');
					$this->load->view('dashboard/v_mitra_tambah', $data);
					$this->load->view('dashboard/v_footer');
					return;
				}
			} else {
				// Jika tidak ada gambar yang diupload, berikan gambar default
				$gambar_mitra = 'default.jpg';
			}

			// Proses input data
			$nama_mitra = $this->input->post('nama_mitra');
			$deskripsi = $this->input->post('deskripsi');
			$kategori = $this->input->post('kategori');

			$data = array(
				'nama_mitra' => $nama_mitra,
				'deskripsi' => $deskripsi,
				'kategori' => $kategori,
				'gambar' => $gambar_mitra
			);

			$this->m_data->insert_data($data, 'daftarMitra');
			redirect(base_url().'index.php/dashboard/mitra');

		} else {
			// Jika validasi gagal, tampilkan form tambah kembali
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_mitra_tambah');
			$this->load->view('dashboard/v_footer');
		}
	}

	// Menampilkan form edit mitra
	public function mitra_edit($id) {
		$where = array('mitra_id' => $id);
		$data['mitra'] = $this->m_data->edit_data($where, 'daftarMitra')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_mitra_edit', $data);
		$this->load->view('dashboard/v_footer');
	}

	// Aksi untuk update mitra
	public function mitra_update() {
		$this->form_validation->set_rules('nama_mitra', 'Nama Mitra', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

		if ($this->form_validation->run() != false) {
			$id = $this->input->post('id');
			$nama_mitra = $this->input->post('nama_mitra');
			$deskripsi = $this->input->post('deskripsi');
			$kategori = $this->input->post('kategori');

			$where = array('mitra_id' => $id);

			$data = array(
				'nama_mitra' => $nama_mitra,
				'deskripsi' => $deskripsi,
				'kategori' => $kategori,
			);

			$this->m_data->update_data($where, $data, 'daftarMitra');

			// Cek apakah ada file gambar yang diupload saat update
			if (!empty($_FILES['gambar']['name'])) {
				$config['upload_path']   = './gambar/artikel/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$gambar = $this->upload->data();
					$data = array('gambar' => $gambar['file_name']);
					$this->m_data->update_data($where, $data, 'daftarMitra');
				} else {
					$data['gambar_error'] = $this->upload->display_errors();
					$data['mitra'] = $this->m_data->edit_data($where, 'daftarMitra')->result();
					$this->load->view('dashboard/v_header');
					$this->load->view('dashboard/v_mitra_edit', $data);
					$this->load->view('dashboard/v_footer');
					return;
				}
			}

			redirect(base_url().'index.php/dashboard/mitra');

		} else {
			$id = $this->input->post('id');
			$where = array('mitra_id' => $id);
			$data['mitra'] = $this->m_data->edit_data($where, 'daftarMitra')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_mitra_edit', $data);
			$this->load->view('dashboard/v_footer');
		}
	}

	// Menghapus mitra
	public function mitra_hapus($id) {
		$where = array('mitra_id' => $id);
		$this->m_data->delete_data($where, 'daftarMitra');
		redirect(base_url().'index.php/dashboard/mitra');
	}

	//untuk foto header yang ada di homepage
	public function foto_header() {
		// Get all records from the fotoHeader table, ordered by id descending
		$data['fotoHeader'] = $this->db->query("SELECT * FROM fotoHeader ORDER BY id ASC")->result();
		
		// Load views with the data
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_foto_header', $data);
		$this->load->view('dashboard/v_footer');
	}
	
	
	// Display form to add new foto header
	public function foto_header_tambah() {
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_foto_header_tambah');
		$this->load->view('dashboard/v_footer');
	}
	
	// Handle form submission for adding new foto header
	public function foto_header_aksi() {
		// Validate that deskripsi can be optional, but the image and title are required
		$this->form_validation->set_rules('judul_foto_header', 'Judul Foto Header', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim');
	
		// Check form validation
		if ($this->form_validation->run() != false) {
	
			// Check if there is an image file uploaded
			if (!empty($_FILES['gambar']['name'])) {
				$config['upload_path']   = './gambar/artikel/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
	
				if ($this->upload->do_upload('gambar')) {
					$gambar = $this->upload->data();
					$gambar_foto_header = $gambar['file_name'];
				} else {
					$data['gambar_error'] = $this->upload->display_errors();
					$this->load->view('dashboard/v_header');
					$this->load->view('dashboard/v_foto_header_tambah', $data);
					$this->load->view('dashboard/v_footer');
					return;
				}
			} else {
				// If no image is uploaded, set a default image
				$gambar_foto_header = 'default.jpg';
			}
	
			// Get the deskripsi and judul_foto_header input
			$deskripsi = $this->input->post('deskripsi');
			$judul_foto_header = $this->input->post('judul_foto_header');
	
			// Insert data into the fotoHeader table
			$data = array(
				'gambar' => $gambar_foto_header,
				'deskripsi' => $deskripsi,
				'judul_foto_header' => $judul_foto_header // New field
			);
	
			$this->m_data->insert_data($data, 'fotoHeader');
			redirect(base_url().'index.php/dashboard/foto_header');
		} else {
			// If validation fails, reload the form
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_foto_header_tambah');
			$this->load->view('dashboard/v_footer');
		}
	}
	
	
	// Display form to edit existing foto header
	public function foto_header_edit($id) {
		$where = array('id' => $id);
		$data['fotoHeader'] = $this->m_data->edit_data($where, 'fotoHeader')->result();
		
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_foto_header_edit', $data);
		$this->load->view('dashboard/v_footer');
	}
	
	// Handle form submission for updating foto header
	public function foto_header_update() {
		// Validation
		$this->form_validation->set_rules('judul_foto_header', 'Judul Foto Header', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim');
	
		if ($this->form_validation->run() != false) {
			$id = $this->input->post('id');
			$judul_foto_header = $this->input->post('judul_foto_header');
			$deskripsi = $this->input->post('deskripsi');
	
			$where = array('id' => $id);
	
			// Data to update
			$data = array(
				'judul_foto_header' => $judul_foto_header, // Update title
				'deskripsi' => $deskripsi
			);
	
			$this->m_data->update_data($where, $data, 'fotoHeader');
	
			// Check if a new image is uploaded
			if (!empty($_FILES['gambar']['name'])) {
				$config['upload_path']   = './gambar/artikel/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
	
				if ($this->upload->do_upload('gambar')) {
					$gambar = $this->upload->data();
					$data = array('gambar' => $gambar['file_name']);
					$this->m_data->update_data($where, $data, 'fotoHeader');
				} else {
					$data['gambar_error'] = $this->upload->display_errors();
					$data['fotoHeader'] = $this->m_data->edit_data($where, 'fotoHeader')->result();
					$this->load->view('dashboard/v_header');
					$this->load->view('dashboard/v_foto_header_edit', $data);
					$this->load->view('dashboard/v_footer');
					return;
				}
			}
	
			redirect(base_url().'index.php/dashboard/foto_header');
		} else {
			$id = $this->input->post('id');
			$where = array('id' => $id);
			$data['fotoHeader'] = $this->m_data->edit_data($where, 'fotoHeader')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_foto_header_edit', $data);
			$this->load->view('dashboard/v_footer');
		}
	}
	
	
	// Delete foto header
	public function foto_header_hapus($id) {
		$where = array('id' => $id);
		$this->m_data->delete_data($where, 'fotoHeader');
		redirect(base_url().'index.php/dashboard/foto_header');
	}
	

	// CRUD PAGES
	public function pages()
	{
		$data['halaman'] = $this->m_data->get_data('halaman')->result();	
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_pages',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function pages_tambah()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_pages_tambah');
		$this->load->view('dashboard/v_footer');
	}

	public function pages_aksi()
	{
		// Wajib isi judul,konten
		$this->form_validation->set_rules('judul','Judul','required|is_unique[halaman.halaman_judul]');
		$this->form_validation->set_rules('konten','Konten','required');

		if($this->form_validation->run() != false){

			$judul = $this->input->post('judul');
			$slug = strtolower(url_title($judul));
			$konten = $this->input->post('konten');

			$data = array(
				'halaman_judul' => $judul,
				'halaman_slug' => $slug,
				'halaman_konten' => $konten
			);

			$this->m_data->insert_data($data,'halaman');

			// alihkan kembali ke method pages
			redirect(base_url().'index.php/dashboard/pages');	

		}else{
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_pages_tambah');
			$this->load->view('dashboard/v_footer');
		}
	}

	public function pages_edit($id)
	{
		$where = array(
			'halaman_id' => $id
		);
		$data['halaman'] = $this->m_data->edit_data($where,'halaman')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_pages_edit',$data);
		$this->load->view('dashboard/v_footer');
	}


	public function pages_update()
	{
		// Wajib isi judul,konten 
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('konten','Konten','required');
		
		if($this->form_validation->run() != false){

			$id = $this->input->post('id');

			$judul = $this->input->post('judul');
			$slug = strtolower(url_title($judul));
			$konten = $this->input->post('konten');
			
			$where = array(
				'halaman_id' => $id
			);

			$data = array(
				'halaman_judul' => $judul,
				'halaman_slug' => $slug,
				'halaman_konten' => $konten
			);

			$this->m_data->update_data($where,$data,'halaman');

			redirect(base_url().'index.php/dashboard/pages');
		}else{
			$id = $this->input->post('id');
			$where = array(
				'halaman_id' => $id
			);
			$data['halaman'] = $this->m_data->edit_data($where,'halaman')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_pages_edit',$data);
			$this->load->view('dashboard/v_footer');
		}
	}

	public function pages_hapus($id)
	{
		$where = array(
			'halaman_id' => $id
		);
		
		$this->m_data->delete_data($where,'halaman');

		redirect(base_url().'index.php/dashboard/pages');
	}
	// end crud pages


	public function profil()
	{
		// id pengguna yang sedang login
		$id_pengguna = $this->session->userdata('id');

		$where = array(
			'pengguna_id' => $id_pengguna
		);

		$data['profil'] = $this->m_data->edit_data($where,'pengguna')->result();

		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_profil',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function profil_update()
	{
		// Wajib isi nama dan email
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		
		if($this->form_validation->run() != false){

			$id = $this->session->userdata('id');

			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			
			$where = array(
				'pengguna_id' => $id
			);

			$data = array(
				'pengguna_nama' => $nama,
				'pengguna_email' => $email
			);

			$this->m_data->update_data($where,$data,'pengguna');

			redirect(base_url().'index.php/dashboard/profil/?alert=sukses');
		}else{
			// id pengguna yang sedang login
			$id_pengguna = $this->session->userdata('id');

			$where = array(
				'pengguna_id' => $id_pengguna
			);

			$data['profil'] = $this->m_data->edit_data($where,'pengguna')->result();

			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_profil',$data);
			$this->load->view('dashboard/v_footer');
		}
	}


	public function pengaturan()
	{
		$data['pengaturan'] = $this->m_data->get_data('pengaturan')->result();

		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_pengaturan',$data);
		$this->load->view('dashboard/v_footer');
	}


	public function pengaturan_update()
	{
		// Validasi form
		$this->form_validation->set_rules('nama','Nama Website','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi Website','required');
		$this->form_validation->set_rules('email_perusahaan', 'Email Perusahaan', 'required');
		$this->form_validation->set_rules('lokasi_perusahaan', 'Lokasi Perusahaan', 'required');
		$this->form_validation->set_rules('no_telp_perusahaan', 'No Telp Perusahaan', 'required');
		$this->form_validation->set_rules('jam_pelayanan', 'Jam Pelayanan', 'required');
		
		if($this->form_validation->run() != false){
			// Ambil inputan dari form
			$nama = $this->input->post('nama');
			$deskripsi = $this->input->post('deskripsi');
			$link_facebook = $this->input->post('link_facebook');
			$link_twitter = $this->input->post('link_twitter');
			$link_instagram = $this->input->post('link_instagram');
			$link_github = $this->input->post('link_github');
			$email_perusahaan = $this->input->post('email_perusahaan');
			$lokasi_perusahaan = $this->input->post('lokasi_perusahaan');
			$no_telp_perusahaan = $this->input->post('no_telp_perusahaan');
			$jam_pelayanan = $this->input->post('jam_pelayanan');

			// Tentukan ID atau kondisi WHERE untuk mengupdate
			$where = array(
				'id' => 1 // Gantilah 1 dengan ID pengaturan yang sesuai jika ada.
			);

			$data = array(
				'nama' => $nama,
				'deskripsi' => $deskripsi,
				'link_facebook' => $link_facebook,
				'link_twitter' => $link_twitter,
				'link_instagram' => $link_instagram,
				'link_github' => $link_github,
				'email_perusahaan' => $email_perusahaan,
				'lokasi_perusahaan' => $lokasi_perusahaan,
				'no_telp_perusahaan' => $no_telp_perusahaan,
				'jam_pelayanan' => $jam_pelayanan
			);

			// Update data di database
			$this->m_data->update_data($where, $data, 'pengaturan');

			// Proses upload logo jika ada
			if (!empty($_FILES['logo']['name'])){
				$config['upload_path'] = './gambar/website/';
				$config['allowed_types'] = 'jpg|png';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('logo')) {
					$gambar = $this->upload->data();
					$logo = $gambar['file_name'];
					$this->db->query("UPDATE pengaturan SET logo='$logo' WHERE id=1"); // Pastikan untuk menyesuaikan ID di sini
				}
			}

			redirect(base_url().'index.php/dashboard/pengaturan/?alert=sukses');
		} else {
			$data['pengaturan'] = $this->m_data->get_data('pengaturan')->result();

			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_pengaturan',$data);
			$this->load->view('dashboard/v_footer');
		}
	}

	public function statistik() {
		$data['statistik'] = $this->m_data->get_data('statistik')->result(); // Fetch data from the 'statistik' table
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_statistik', $data);
		$this->load->view('dashboard/v_footer', $data);  // Pastikan data juga dikirim ke v_footer
	}
	

    // Function to handle the update of statistik data
    public function statistik_update() {
        // Form validation rules
        $this->form_validation->set_rules('jumlah_pelanggan', 'Jumlah Pelanggan', 'required');
        $this->form_validation->set_rules('area_pelayanan', 'Area Pelayanan', 'required');
        $this->form_validation->set_rules('jumlah_produksi_air', 'Jumlah Produksi Air', 'required');
        $this->form_validation->set_rules('kehilangan_air', 'Kehilangan Air', 'required');

        if($this->form_validation->run() != false){
            // Collect form data
            $data = array(
                'jumlah_pelanggan' => $this->input->post('jumlah_pelanggan'),
                'area_pelayanan' => $this->input->post('area_pelayanan'),
                'jumlah_produksi_air' => $this->input->post('jumlah_produksi_air'),
                'kehilangan_air' => $this->input->post('kehilangan_air')
            );

            // Update the 'statistik' table
            $this->db->update('statistik', $data);

            // Redirect back to the statistik page with a success message
            redirect(base_url('index.php/dashboard/statistik?alert=sukses'));
        } else {
            // If validation fails, reload the statistik page with errors
            $data['statistik'] = $this->m_data->get_data('statistik')->result();

			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_statistik', $data);
			$this->load->view('dashboard/v_footer');
        }
    }

	// CRUD PENGGUNA
	public function pengguna()
	{
		$data['pengguna'] = $this->m_data->get_data('pengguna')->result();	
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_pengguna',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function pengguna_tambah()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_pengguna_tambah');
		$this->load->view('dashboard/v_footer');
	}

	public function pengguna_aksi()
	{
		// Wajib isi
		$this->form_validation->set_rules('nama','Nama Pengguna','required');
		$this->form_validation->set_rules('email','Email Pengguna','required');
		$this->form_validation->set_rules('username','Username Pengguna','required');
		$this->form_validation->set_rules('password','Password Pengguna','required|min_length[8]');
		$this->form_validation->set_rules('level','Level Pengguna','required');
		$this->form_validation->set_rules('status','Status Pengguna','required');

		if($this->form_validation->run() != false){

			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$level = $this->input->post('level');
			$status = $this->input->post('status');

			$data = array(
				'pengguna_nama' => $nama,
				'pengguna_email' => $email,
				'pengguna_username' => $username,
				'pengguna_password' => $password,
				'pengguna_level' => $level,
				'pengguna_status' => $status
			);


			$this->m_data->insert_data($data,'pengguna');

			redirect(base_url().'index.php/dashboard/pengguna');	

		}else{
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_pengguna_tambah');
			$this->load->view('dashboard/v_footer');
		}
	}

	public function pengguna_edit($id)
	{
		$where = array(
			'pengguna_id' => $id
		);
		$data['pengguna'] = $this->m_data->edit_data($where,'pengguna')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_pengguna_edit',$data);
		$this->load->view('dashboard/v_footer');
	}


	public function pengguna_update()
	{
		// Wajib isi
		$this->form_validation->set_rules('nama','Nama Pengguna','required');
		$this->form_validation->set_rules('email','Email Pengguna','required');
		$this->form_validation->set_rules('username','Username Pengguna','required');
		$this->form_validation->set_rules('level','Level Pengguna','required');
		$this->form_validation->set_rules('status','Status Pengguna','required');

		if($this->form_validation->run() != false){

			$id = $this->input->post('id');

			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$level = $this->input->post('level');
			$status = $this->input->post('status');

			if($this->input->post('password') == ""){
				$data = array(
					'pengguna_nama' => $nama,
					'pengguna_email' => $email,
					'pengguna_username' => $username,
					'pengguna_level' => $level,
					'pengguna_status' => $status
				);
			}else{
				$data = array(
					'pengguna_nama' => $nama,
					'pengguna_email' => $email,
					'pengguna_username' => $username,
					'pengguna_password' => $password,
					'pengguna_level' => $level,
					'pengguna_status' => $status
				);
			}
			
			$where = array(
				'pengguna_id' => $id
			);

			$this->m_data->update_data($where,$data,'pengguna');

			redirect(base_url().'index.php/dashboard/pengguna');
		}else{
			$id = $this->input->post('id');
			$where = array(
				'pengguna_id' => $id
			);
			$data['pengguna'] = $this->m_data->edit_data($where,'pengguna')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_pengguna_edit',$data);
			$this->load->view('dashboard/v_footer');
		}
	}

	public function pengguna_hapus($id)
	{
		$where = array(
			'pengguna_id' => $id
		);
		$data['pengguna_hapus'] = $this->m_data->edit_data($where,'pengguna')->row();
		$data['pengguna_lain'] = $this->db->query("SELECT * FROM pengguna WHERE pengguna_id != $id")->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_pengguna_hapus',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function pengguna_hapus_aksi()
	{
		$pengguna_hapus = $this->input->post('pengguna_hapus');
		$pengguna_tujuan = $this->input->post('pengguna_tujuan');

		// hapus pengguna
		$where = array(
			'pengguna_id' => $pengguna_hapus
		);

		$this->m_data->delete_data($where,'pengguna');

		// pindahkan semua artikel pengguna yang dihapus ke pengguna yang dipilih
		$w = array(
			'artikel_author' => $pengguna_hapus
		);

		$d = array(
			'artikel_author' => $pengguna_tujuan
		);

		$this->m_data->update_data($w,$d,'artikel');

		redirect(base_url().'index.php/dashboard/pengguna');
	}
	// end crud pengguna
	
}
