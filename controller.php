<html>

<head>

<title></title>

</head>

<body>

</body>

</html>
     <?php
  defined ("BASEPATH") OR exit("no direct script acces allowed");
  
  class user extends CI_controller{
  
  function_construct (){
  parent::_construct();
  $this load->load->helper("url");
  
  }
   
   public function index(){
   $this->load->("addform.php");
   
   }
   } 
