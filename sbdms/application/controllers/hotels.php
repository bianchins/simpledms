<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotels extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->index();
	}
	
	public function abilita($id) {
		$hotel = new Hotels_model();
		$hotel->get_by_id($id);
		$hotel->abilitato=TRUE;
		$hotel->save();
		redirect('hotels/elenco/');
	}

	public function disabilita($id) {
		$hotel = new Hotels_model();
		$hotel->get_by_id($id);
		$hotel->abilitato=FALSE;
		$hotel->save();
		redirect('hotels/elenco/');
	}
	
	public function elenco() {
		$this->load->view('common/header');
		$data = array();
		
		$data['hotels'] = new Hotels_model();
		$data['hotels']->order_by("stelle", "desc");
		$data['hotels']->order_by("nome", "asc");
		$data['hotels']->get();
		
		$this->load->view('hotels/elenco', $data);
		$this->load->view('common/footer');
	}

	public function modifica($id) {
			
		$hotel = new Hotels_model();
		$hotel->get_by_id($id);
		$data = array();
		$data['hotel'] = $hotel;
		$this->form_validation->set_rules('nome', 'Nome Hotel', 'required|xss_clean|strip_tags');
        $this->form_validation->set_rules('descrizione', 'Descrizione', 'xss_clean|strip_tags');
		if ($this->form_validation->run()) 
		{	
			$hotel->nome = $this->input->post('nome');
			$hotel->descrizione = nl2br($this->input->post('descrizione'));
			$hotel->indirizzo = $this->input->post('indirizzo');
			$hotel->sitoweb = $this->input->post('sitoweb');
			$hotel->email = $this->input->post('email');
			$hotel->stelle = $this->input->post('stelle');
			$hotel->telefono = $this->input->post('telefono');
			$hotel->abilitato = $this->input->post('abilitato') ? TRUE : FALSE;
			//die($this->input->post('abilitato'));
			$hotel->latitudine = $this->input->post('latitudine');
			$hotel->longitudine = $this->input->post('longitudine');
			$hotel->flag_stelle_superior = $this->input->post('flag_stelle_superior') ? TRUE : FALSE;
			$hotel->convenzione_inps = $this->input->post('convenzione_inps') ? TRUE : FALSE;
			$hotel->convenzione_inail = $this->input->post('convenzione_inail') ? TRUE : FALSE;
			$hotel->convenzione_enasarco = $this->input->post('convenzione_enasarco') ? TRUE : FALSE;
			$hotel->save();
			
			//Salvataggio allegati
			$config_u['upload_path'] = './images/';
			$config_u['allowed_types'] = 'gif|jpg|png';
			$config_u['file_name']	= $hotel->id.'.jpg';
			$config_u['overwrite'] = TRUE;
			//$config['max_width']  = '1024';
			//$config['max_height']  = '768';
	
			$this->load->library('upload', $config_u);
	
			if ($this->upload->do_upload('immagine'))
			{
				$upload_data = $this->upload->data();	
					
				$config['image_library'] = 'gd2';
				$config['source_image'] = $upload_data['full_path'];
				$config['master_dim'] = 'width';
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 120;
				$config['height'] = 50;
				
				$this->load->library('image_lib', $config);
				
				$this->image_lib->resize();
			}
			
			
			redirect('hotels/elenco/');
		}
		else 
		{
			$this->load->view('common/header');
			$this->load->view('hotels/modifica', $data);
			$this->load->view('common/footer');
		}
	}
	
	public function nuovo() {
		
		$this->form_validation->set_rules('nome', 'Nome Hotel', 'required|xss_clean|strip_tags');
        $this->form_validation->set_rules('descrizione', 'Descrizione', 'xss_clean|strip_tags');
		 $this->form_validation->set_rules('stelle', 'Stelle', 'xss_clean|strip_tags');
		if ($this->form_validation->run()) 
		{
			$hotel = new Hotels_model();
			$hotel->nome = $this->input->post('nome');
			$hotel->descrizione = nl2br($this->input->post('descrizione'));
			$hotel->indirizzo = $this->input->post('indirizzo');
			$hotel->sitoweb = $this->input->post('sitoweb');
			$hotel->email = $this->input->post('email');
			$hotel->stelle = $this->input->post('stelle');
			$hotel->telefono = $this->input->post('telefono');
			$hotel->abilitato = $this->input->post('abilitato') ? TRUE : FALSE;
			$hotel->latitudine = $this->input->post('latitudine');
			$hotel->longitudine = $this->input->post('longitudine');
			$hotel->flag_stelle_superior = $this->input->post('flag_stelle_superior') ? TRUE : FALSE;
			$hotel->convenzione_inps = $this->input->post('convenzione_inps') ? TRUE : FALSE;
			$hotel->convenzione_inail = $this->input->post('convenzione_inail') ? TRUE : FALSE;
			$hotel->convenzione_enasarco = $this->input->post('convenzione_enasarco') ? TRUE : FALSE;
			$hotel->save();
			
			//Salvataggio allegati
			$config_u['upload_path'] = './images/';
			$config_u['allowed_types'] = 'gif|jpg|png';
			$config_u['file_name']	= $hotel->id.'.jpg';
			$config_u['overwrite'] = TRUE;
			//$config['max_width']  = '1024';
			//$config['max_height']  = '768';
	
			$this->load->library('upload', $config_u);
	
			if ($this->upload->do_upload('immagine'))
			{
		
				$upload_data = $this->upload->data();	
					
				$config['image_library'] = 'gd2';
				$config['source_image'] = $upload_data['full_path'];
				$config['master_dim'] = 'width';
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 120;
				$config['height'] = 50;
				
				$this->load->library('image_lib', $config);
				
				$this->image_lib->resize();
			}
			
			
			redirect('hotels/elenco/');
		}
		else 
		{
			$this->load->view('common/header');
			$this->load->view('hotels/nuovo');
			
			$this->load->view('common/footer');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */