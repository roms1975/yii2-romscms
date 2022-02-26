<?php 

  namespace roms;

  class Installer
  {
    public function install() 
    {
      file_put_contents(__DIR__ . "install.log", "It work!");
    }
  
  }

?>
