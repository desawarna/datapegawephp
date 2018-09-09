#Belajar PHP Query menampilkan data dari MySQL
###

Ini adalah scrip latihan PHP dam MySQL untuk pemula 
##Buat Database Menggunakan PHPMYAdmin
1. Buatlah database `pegawai` menggunakan phpmyadmin dan buat tabel `datapegawai`
2. Buat 4 kolom masing masing berisi :
    * nip , int , 15
    * nama , varchar , 10
    * jabatan , varchar , 25
    * golongan , varchar , 25
3. Setelah terbuat klik database `pegawai` klik tabel `datapegawai` klik menu `insert` kemudian isi data , pada form yang tambil 
4. Untuk menyimpan klik go

##Buat Folder dan Script PHP
5. Buat folder datapegawephp , kemudian buat script index.php , isi scrip : 

    ```php
    <?
    $koneksi=mysql_connect ("localhost","root","");
    mysql_select_db("pegawai");
    $query="select * from datapegawai";
    $hasil=mysql_query($query);
    while ($row=mysql_fetch_row($hasil)) {
        # code...
        echo $row[0]."-".$row[1]."-".$row[2]."-".$row[3]."<br>";
    }
    mysql_close($koneksi)
    ?>
    ```