<?php
namespace App\Helpers;
 
class Daymahar {

    public static function bulan(){
        $bulan = [     
       ['id' =>'01',
       'bulan' => 'januari'
       ],
       [
        'id' =>'02',
       'bulan' => 'ferbuari'
       ],
        [
        'id' =>'03',
       'bulan' => 'maret'
       ],
        [
        'id' =>'04',
       'bulan' => 'april'
       ],
        [
        'id' =>'05',
       'bulan' => 'mei'
       ],
        [
        'id' =>'06',
       'bulan' => 'juni'
       ],
        [
        'id' =>'07',
       'bulan' => 'juli'
       ],
        [
        'id' =>'08',
       'bulan' => 'agustus'
       ],
        [
        'id' =>'09',
       'bulan' => 'september'
       ],
        [
        'id' =>'10',
       'bulan' => 'oktober'
       ],
        [
        'id' =>'11',
       'bulan' => 'november'
       ],
        [
        'id' =>'12',
       'bulan' => 'desember'
       ],
       ];
return $bulan;
    }

    public static function tanggal_indo($tanggal, $cetak_hari = false, $hari=false)
    {
        $hari = array ( 1 =>    'Senin',
                    'Selasa',
                    'Rabu',
                    'Kamis',
                    'Jumat',
                    'Sabtu',
                    'Minggu'
                );
                
        $bulan = array (1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
        $split 	  = explode('-', $tanggal);
        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
        
        if ($cetak_hari) {
            $num = date('N', strtotime($tanggal));
            return $hari[$num] . ', ' . $tgl_indo;
        }
        return $tgl_indo;
    }

}