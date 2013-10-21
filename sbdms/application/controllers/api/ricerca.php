<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ricerca extends CI_Controller {

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
	public function percategoria($idcategoria)
	{
		$documenti = new Documenti_model();
		$documenti->order_by("nome", "asc");
		$documenti->get_where(array('idcategoria' => $idcategoria));
		$lista_d = array();
		
		foreach($documenti as $doc) {
			$obj = new StdClass;
			$obj->id = $doc->id;
			$obj->nome = $doc->nome;
			$obj->descrizione = $doc->descrizione;
			$obj->modificato = $doc->modificato;
			array_push($lista_d, $obj);
		}
		
		echo json_encode($lista_d);
	}
	
	public function perparolachiave()
	{
		// Execute our SQL statement and return the result
        $sql = "SELECT id,nome,descrizione,modificato, MATCH (nome,descrizione) AGAINST (? IN BOOLEAN MODE) AS rilevanza
                    FROM dms_documento
                    WHERE MATCH (nome,descrizione) AGAINST (? IN BOOLEAN MODE) ORDER BY rilevanza DESC";
        $query = $this->db->query($sql, array($this->input->post('terms'), $this->input->post('terms')));
		$lista_d = array();
		foreach($query->result() as $doc) {
			$obj = new StdClass;
			$obj->id = $doc->id;
			$obj->nome = $doc->nome;
			$obj->descrizione = $doc->descrizione;
			$obj->modificato = $doc->modificato;
			array_push($lista_d, $obj);
		}
		
		echo json_encode($lista_d);
        //return $query->result();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/elenco.php */