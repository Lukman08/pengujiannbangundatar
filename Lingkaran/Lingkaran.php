<?php
include 'BangunDatar.php';
    class Lingkaran extends BangunDatar{

        function hitungkeliling($r){
            if ($r == '') {
                return "Tidak Boleh kosong!";
            }else{
                return 2*3.14*$r;
            }
        }

        function hitungLuas($r){
            if($r == '' ){
                return "Tidak Boleh kosong!";
            }else{
                return 3.14*$r*$r;
            }
        }

    }

?>