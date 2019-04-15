<?php
//manggil url
$url='http://localhost:8000/mahasiswa/';
$json = file_get_contents($url);
 
//json decode
$mahasiswas = json_decode($json,true);
//var_dump($mahasiswas);
?>
    <table border='1'>
     <th>No</th>
     <th>nam</th>
        <th>email</th>
        <th>alamat</th>   
    <?php
    $no=1;
    foreach($mahasiswas['values'] as $mahasiswa)
    {
        
         foreach ($mahasiswa as $tes => $isi ) {
           $$tes=$isi;
       }
        ?>
        <tr>
        <td valign="top">
                <?php echo $no++ ?>
            </td>
            <td valign="top">
                <?php echo $nama ?>
            </td>
            <td valign="top">
                <?php echo $email ?>
            </td>
             
            <td valign="top">
                <?php echo $alamat ?>
            </td>
        </tr>
        <?php
    }
    
    ?>
    </table>