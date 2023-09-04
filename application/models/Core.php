<?php
class Core extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function setMassage($pesan, $aksi, $type)
    {
        $_SESSION['msg'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'type'  => $type
        ];   
    }

  public function massage(){
    if(isset($_SESSION['msg']))
    {
        $pesan = $_SESSION['msg']['pesan'];
        $aksi = $_SESSION['msg']['aksi'];
        $type = $_SESSION['msg']['type'];
        
        echo '<div class="alert alert-'.$type.' alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            <strong>'.$pesan.',</strong> '.$aksi.'
      </div>';

        unset($_SESSION['msg']);
    }
  
  }
}