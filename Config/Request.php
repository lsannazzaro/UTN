<?php namespace Config;

    class Request {
        private $controlador;
        private $metodo;
        private $parametros;
        
        public function __construct() {
            $metodoRequest = $this->getMetodoRequest();

            

                $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL); //Levanta la Url en la barra


                /**
                 * La función filter_input() obtiene una variable externa y opcionalmente la filtra.
                 * Esta función se utiliza para validar las variables de fuentes inseguras, como la entrada de un usuario.
                 */


                $urlToArray = explode("/", $url);


                /**
                 * Devuelve un array de string, siendo cada uno un substring del segundo parametro pasado formado  
                 * por la división realizada por los delimitadores indicados en el primer paramtro.
                 */


                $ArregloUrl = array_filter($urlToArray);

                /*echo '<pre>';
                print_r($ArregloUrl);
                echo '</pre>';*/
                /**
                 * Filtra elementos de un array usando una función de devolución de llamada.
                 * Recorre cada valor de array, pasándolos a la función callback. 
                 * Si la función callback devuelve true, el valor actual desde array es devuelto al array resultante. 
                 * Las claves del array se conservan.
                 */


                if(empty($ArregloUrl)) {
                    // Si Arreglo Url esta vacio, cargo el controlador por defecto
                    $this->controlador = 'TipoCerveza'; //www.asdasd.com
                } else {
                    // Quito el primer elemento del array y lo uso como controlador
                    $this->controlador = ucwords(array_shift($ArregloUrl)); //www.asdasd.com/controlpersona
                    //ucword convierte la primer letra a mayuscula
                    //sacala el primer elemento del arreglo para que el proximo if vea que onda
                    //Es porque sus controladoras estaban en mayuscula
                }

                if(empty($ArregloUrl)) {
                    // Si Arreglo Url esta vacio, cargo el index por defecto
                    $this->metodo = 'login';//www.asdasd.com/controlpersona/index.php
                } else {
                    // Quito el primer elemento del array y lo uso como metodo
                    $this->metodo = array_shift($ArregloUrl);//www.asdasd.com/controlpersona/eliminar
                }
                
            if($metodoRequest == 'GET') {
                if(!empty($ArregloUrl)) {
                    $this->parametros = $ArregloUrl;//www.asdasd.com/controlpersona/eliminar/id=97
                    }
                }
            else{
                $this->parametros = $_POST;
            }
        }
            
        

        /**
        * Devuelve el método HTTP
        * con el que se hizo el
        * Request
        * 
        * @return String
        */
        public static function getMetodoRequest()
        {
            return $_SERVER['REQUEST_METHOD'];
        }
        /**
        * Devuelve el controlador
        * con el que se hizo el
        * Request
        * 
        * @return String
        */
        public function getControlador() {
            return $this->controlador;
        }
        /**
        * Devuelve el método 
        * con el que se hizo el
        * Request
        * 
        * @return String
        */
        public function getMetodo() {
            return $this->metodo;
        }
        /**
        * Devuelve los atributos
        * con el que se hizo el
        * Request
        * 
        * @return Array
        */
        public function getParametros() {
            return $this->parametros;
        }
    }