<?php

    class A {
        private $sinhvien;
        private $masv;
        private $diem;
        function __construct($sinhvien,$masv,$diem){
            $this->sinhvien=$sinhvien;
            $this->masv=$masv;
            $this->diem=$diem;
        }
        function laygiatri(){
            echo $this->sinhvien;
            echo $this->masv;
            echo $this->diem;
        }
    }
    $sinhvien= New A('Vu','123','8');
    $sinhvien->laygiatri();
?>