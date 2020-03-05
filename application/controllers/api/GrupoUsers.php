<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GrupoUsers extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = "grupousers";
    $this->nameId = "Id";
  }

  public function get($Id = '', $date = ''){
    parent::get($Id);
  }
  
  public function setDefaultValue(){
  }

  public function create(){
    $this->form_validation->set_rules('Nome', 'Nome', 'trim|required|is_unique[grupousers.Nome]');
    parent::create();
  }
  
  public function update($Id){
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
