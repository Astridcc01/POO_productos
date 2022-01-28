<?php
    class Productos{
        public String $id;
        public String $nombre;
        public int $unidades;
        public float $precio;
        private float $iva=0.21;

        public function __construct(string $id, string $nombre, int $unidades, float $precio){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->unidades=$unidades;
            $this->precio=$precio;
        }

        public function setId(string $id):void{
            $this->id=$id;
        }

        public function getId():string{
            return $this->id;
        }

        public function setNombre(string $nombre):void{
            $this->nombre=$nombre;
        }

        public function getNombre():string{
            return $this->nombre;
        }

        public function setUnidades(int $unidades):void{
            $this->unidades=$unidades;
        }

        public function getUnidades():int{
            return $this->unidades;
        }

        public function setPrecio(float $precio):void{
            $this->precio=$precio;
        }

        public function getPrecio():float{
            return $this->precio;
        }
    }
?>