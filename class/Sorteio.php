<?php
    class Sorteio
    {
        private $name;
        private $roll;
        private $nMin;
        private $nMax;
        private $date;

        public function __construct($name = null, $roll = null, $nMin = null, $nMax = null, $date= null)
        {
            $this->name = $name;
            $this->roll = $roll;
            $this->nMin = $nMin;
            $this->nMax = $nMax;
            $this->date = $date;

        }
        

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        

        /**
         * Get the value of roll
         */ 
        public function getRoll()
        {
                return $this->roll;
        }

        /**
         * Set the value of roll
         *
         * @return  self
         */ 
        public function setRoll($roll)
        {
                $this->roll = $roll;

                return $this;
        }

        

        /**
         * Get the value of nMin
         */ 
        public function getNMin()
        {
                return $this->nMin;
        }

        /**
         * Set the value of nMin
         *
         * @return  self
         */ 
        public function setNMin($nMin)
        {
                $this->nMin = $nMin;

                return $this;
        }

        

        /**
         * Get the value of nMax
         */ 
        public function getNMax()
        {
                return $this->nMax;
        }

        /**
         * Set the value of nMax
         *
         * @return  self
         */ 
        public function setNMax($nMax)
        {
                $this->nMax = $nMax;

                return $this;
        }



        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }
    }