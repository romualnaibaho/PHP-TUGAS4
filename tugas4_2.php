<?php

    $jumlah_cabang = 523;
    $jumlah_air = 8891;

    //asumsi 1 cabang air dipakai oleh 1 keluarga
    $rata_rata = $jumlah_air/$jumlah_cabang;

    echo ("
        <p>Jumlah Saluran = Rp ".$jumlah_cabang."</p>
        <p>Jumlah Terpakai = ".$jumlah_air."</p>
        <p>Rata-Rata Pemakaian = ....?</p>
        <p>Jawaban : ".$rata_rata." liter/keluarga</p>
    ");

?>