<?php

class Documenti_model extends DataMapper {

	public $table = 'dms_documento';
	/**
	 * nome
	 * descrizione
	 * indirizzo
	 * telefono
	 * sitoweb
	 * stelle
	 * email
	 */
    var $validation = array(
        'nome' => array(
            'label' => 'Nome',
            'rules' => array('required', 'trim', 'max_length' => 255),
        ),
    );
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
    }
}

/* End of file book.php */
/* Location: ./application/models/book.php */