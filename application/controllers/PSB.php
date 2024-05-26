<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PSB extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/PSB
	 *	- or -
	 * 		http://example.com/index.php/PSB/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/PSB/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// login logout register user

	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}


	public function do_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('M_admin');
		$hasil = $this->M_admin->read_admin_by_email_password($email, md5($password));
		if ($hasil->num_rows() > 0) {
			$hasil = $hasil->row_array();
			$this->session->set_userdata('masuk', true);
			$this->session->set_userdata('status', $hasil['status']);
			$this->session->set_userdata('username', $hasil['nama']);
			$this->session->set_userdata('email', $hasil['email']);
			$this->session->set_userdata('id_user', $hasil['id_user']);
			if ($hasil['status'] == '1') {
				echo "<script>alert('This card was approved, Thanks.');</script>";
				redirect('PSB/index_admin');
			}else{
				redirect('PSB/login');
			}

		}
	}


	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('PSB/login');
	}

	// indexs

	public function index_admin()
	{
		if ($this->session->userdata('status') == 1 && $this->session->userdata('masuk') == true) {
			$this->load->view('admin_header');
			$this->load->model('M_berita');
			$this->load->model('M_product');
			$this->load->model('M_admin');
	
			$berita_hasil = $this->M_berita->read_berita();
			$product_hasil = $this->M_product->read_product();
			$admin_hasil = $this->M_admin->read_admin();
			$count_product = $this->M_product->count_product();
			$count_berita = $this->M_berita->count_berita();
			$count_admin = $this->M_admin->count_admin();
			$data = [
				'berita_hasil' => $berita_hasil,
				'product_hasil' => $product_hasil,
				'admin_hasil' => $admin_hasil,
				'count_product' => $count_product,
				'count_berita' => $count_berita,
				'count_admin' => $count_admin
			];
			$this->load->view('admin_index', $data);
			$this->load->view('admin_footer');
		} else {
			redirect('PSB/login');
		}
	}


	public function index()
	{
		$this->load->view('user_header');
		$this->load->model('M_berita');
		$this->load->model('M_product');

		$berita_hasil = $this->M_berita->read_berita();
		$product_hasil = $this->M_product->read_product();

		$data = ['berita_hasil' => $berita_hasil, 'product_hasil' => $product_hasil];
		$this->load->view('index', $data);
		$this->load->view('user_footer');
	}



	public function admin()
	{
		if ($this->session->userdata('status') == 1 && $this->session->userdata('masuk') == true) {
			$this->load->view('admin_header');
			$this->load->model('M_admin');
			$x['hasil'] = $this->M_admin->read_admin();
			$this->load->view('admin_manage', $x);
			$this->load->view('admin_footer');
		}
	}

	public function tambah_admin()
	{
		if ($this->session->userdata('status') == 1 && $this->session->userdata('masuk') == true) {
			$this->load->view('admin_header');
			$this->load->view('tambah_admin');
			$this->load->view('admin_footer');
		}
	}

	public function do_input_admin()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('M_admin');
		$hasil = $this->M_admin->create_admin($nama, $email, md5($password));
		redirect('PSB/admin');
	}



	public function update_admin()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('M_admin');
		$hasil = $this->M_admin->update_admin($id_user, $nama, $email, $password);
		redirect('PSB/admin');
	}

	public function delete_admin()
	{
		$id_user = $this->input->post('id_user');
		$this->load->model('M_admin');
		$hasil = $this->M_admin->delete_admin($id_user);
		redirect('PSB/admin');
	}

    public function lihat_produk($id_product)
    {
		$this->load->model("M_product");
		$product_hasil = $this->M_product->read_product();

		$data = ['product_hasil' => $product_hasil];

		$this->load->view('user_header_detail');
        $data["produk"] = $this->M_product->get_by_id($id_product);
        $this->load->view("lihat_produk", $data);
		$this->load->view('user_footer');
    }



	public function produk()
	{
		if ($this->session->userdata('status') == 1 && $this->session->userdata('masuk') == true) {
			$this->load->view('admin_header');
			$this->load->model('M_product');
			$x['hasil'] = $this->M_product->read_product();
			$this->load->view('admin_produk', $x);
			$this->load->view('admin_footer');
		}
	}

	public function tambah_produk()
	{
		if ($this->session->userdata('status') == 1 && $this->session->userdata('masuk') == true) {
			$this->load->view('admin_header');
			$this->load->view('tambah_product');
			$this->load->view('admin_footer');
		}
	}

	public function do_input_produk()
	{
		// Load the file helper
		$this->load->helper('file');

		// Configure the file upload settings
		$config['upload_path'] = 'uploads/'; // Directory where the uploaded files will be stored
		$config['allowed_types'] = 'gif|jpg|png'; // Allowed file types
		$config['max_size'] = 20480; // Maximum file size (in kilobytes)

		// Load the upload library and initialize it with the configuration
		$this->load->library('upload', $config);

		// Check if the file was uploaded successfully
		if ($this->upload->do_upload('foto_produk')) {
			// File was uploaded successfully, so you can now save the file name to the database
			$foto_produk = $this->upload->data('file_name');
		} else {
			// File was not uploaded successfully
			$foto_produk = '';
		}

		// Save the other form data to the database
		$release_date = $this->input->post('release_date');
		$nama_product = $this->input->post('nama_product');
		$deskripsi = $this->input->post('deskripsi');
		$this->load->model('M_product');
		$hasil = $this->M_product->create_product($release_date, $nama_product, $deskripsi, $foto_produk);

		// Redirect to the product list page
		redirect('PSB/produk');
	}



	public function update_product()
	{
		// Load the file helper
		$this->load->helper('file');

		// Configure the file upload settings
		$config['upload_path'] = 'uploads/'; // Directory where the uploaded files will be stored
		$config['allowed_types'] = 'gif|jpg|png'; // Allowed file types
		$config['max_size'] = 20480; // Maximum file size (in kilobytes)

		// Load the upload library and initialize it with the configuration
		$this->load->library('upload', $config);

		// Check if the file was uploaded successfully
		if ($this->upload->do_upload('foto_produk')) {
			// File was uploaded successfully, so you can now save the file name to the database
			$foto_produk = $this->upload->data('file_name');
		} else {
			// File was not uploaded successfully
			$foto_produk = '';
		}

		// Update the other form data in the database
		$id_product = $this->input->post('id_product');
		$release_date = $this->input->post('release_date');
		$nama_product = $this->input->post('nama_product');
		$deskripsi = $this->input->post('deskripsi');
		$this->load->model('M_product');
		$hasil = $this->M_product->update_product($id_product, $release_date, $nama_product, $deskripsi, $foto_produk);
		redirect('PSB/produk');
	}

	public function delete_product()
	{
		$id_product = $this->input->post('id_product');
		$this->load->model('M_product');
		$hasil = $this->M_product->delete_product($id_product);
		redirect('PSB/produk');
	}

    public function lihat_berita($id_berita)
    {
		$this->load->model("M_berita");
		$berita_hasil = $this->M_berita->read_berita();

		$data = ['berita_hasil' => $berita_hasil];

		$this->load->view('user_header_detail');
        $data["berita"] = $this->M_berita->get_by_id($id_berita);
        $this->load->view("lihat_berita", $data);
		$this->load->view('user_footer');
    }

	public function berita()
	{
		if ($this->session->userdata('status') == 1 && $this->session->userdata('masuk') == true) {
			$this->load->view('admin_header');
			$this->load->model('M_berita');
			$x['hasil'] = $this->M_berita->read_berita();
			$this->load->view('admin_berita', $x);
			$this->load->view('admin_footer');
		}
	}


	public function do_input_berita()
	{
		$judul = $this->input->post('judul');
		$waktu = $this->input->post('waktu');
		$isi = $this->input->post('isi');
		// Load the file helper
		$this->load->helper('file');

		// Configure the file upload settings
		$config['upload_path'] = 'uploads-berita/'; // Directory where the uploaded files will be stored
		$config['allowed_types'] = 'gif|jpg|png'; // Allowed file types
		$config['max_size'] = 20480; // Maximum file size (in kilobytes)

		// Load the upload library and initialize it with the configuration
		$this->load->library('upload', $config);

		// Check if the file was uploaded successfully
		if ($this->upload->do_upload('foto_berita')) {
			// File was uploaded successfully, so you can now save the file name to the database
			$foto_berita = $this->upload->data('file_name');
		} else {
			// File was not uploaded successfully
			$foto_berita = '';
		}
		$this->load->model('M_berita');
		$hasil = $this->M_berita->create_berita($judul, $waktu, $isi, $foto_berita);
		redirect('PSB/berita');
	}

	public function tambah_berita()
	{
		if ($this->session->userdata('status') == 1 && $this->session->userdata('masuk') == true) {
			$this->load->view('admin_header');
			$this->load->view('tambah_berita');
			$this->load->view('admin_footer');
		}
	}


	public function update_berita()
	{
		// Load the file helper
		$this->load->helper('file');

		// Configure the file upload settings
		$config['upload_path'] = 'uploads-berita/'; // Directory where the uploaded files will be stored
		$config['allowed_types'] = 'gif|jpg|png'; // Allowed file types
		$config['max_size'] = 20480; // Maximum file size (in kilobytes)

		// Load the upload library and initialize it with the configuration
		$this->load->library('upload', $config);

		// Check if the file was uploaded successfully
		if ($this->upload->do_upload('foto_berita')) {
			// File was uploaded successfully, so you can now save the file name to the database
			$foto_berita = $this->upload->data('file_name');
		} else {
			// File was not uploaded successfully
			$foto_berita = '';
		}

		$id_berita = $this->input->post('id_berita');
		$judul = $this->input->post('judul');
		$waktu = $this->input->post('waktu');
		$isi = $this->input->post('isi');
		$this->load->model('M_berita');
		$hasil = $this->M_berita->update_berita($id_berita,$judul, $waktu, $isi, $foto_berita);
		redirect('PSB/berita');
	}

	public function delete_berita()
	{
		$id_berita = $this->input->post('id_berita');
		$this->load->model('M_berita');
		$hasil = $this->M_berita->delete_berita($id_berita);
		redirect('PSB/berita');
	}
}
