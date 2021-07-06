<?php

    $beli = 8000;
    $jual = 7500;

    //seharusnya dia rugi, bukan untung
    $kerugian = 300;

    $jumlah_kambing = ($beli - $jual) / $kerugian;

    echo ("
        <p>Harga Beli = Rp ".$beli."</p>
        <p>Harga Jual = ".$jual."</p>
        <p>Kerugian = ".$kerugian."</p>
        <p>Berapa Jumlah kambing yang diberi? Jawaban : ".number_format($jumlah_kambing)." ekor</p>
    ");

?>