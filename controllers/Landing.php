<?php
    class Landing {
        public function __construct(){}
        // controladores pagina principal
        // index.view.php
        public function index(){  
            
            
           require_once "views/busines/index.view.php";
           require_once "views/busines/footer.php";
                    
            
        }
        public function olvido(){            
            
            require_once "views/olvido_contra/olvido_contra.php";  
            require_once "views/busines/footer.php";          
            
        }

        public function crearcuenta(){            
            
            require_once "views/busines/registrousers.php";  
            require_once "views/busines/footer.php";          
            
        }
    
        
        
    }
?>