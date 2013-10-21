<?php

class Categorie_model extends DataMapper {

	public $table = 'dms_categoria';
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
        'descrizione' => array(
            'label' => 'Descrizione',
            'rules' => array('required', 'trim', 'max_length' => 45),
        ),
    );
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
    }
}

/* End of file book.php */
/* Location: ./application/models/book.php */