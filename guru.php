<?php

class Guru extends Database
{
    public function index()
    {
        $guru = mysqli_query($this->koneksi, "select * from guru");
        return $guru;
    }

    public function create($nip,$nama,$alamat)
    {
        mysqli_query($this->koneksi,
                    "insert into guru values (null,'$nip','$nama','$alamat')");
        

    }
    // memilih data guru yang akan di ubah
    public function edit($no)
    {
        $guru = mysqli_query($this->koneksi,
                    "select * from guru where no='$no'");
        return $guru;
    }
    // merubah data guru
    public function update($no, $nip, $nama, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "update guru set nip='$nip', nama='$nama' , alamat='$alamat' where no='$no'");
    }
    // menampilkan data guru berdasarkan no
    public function show($no)
    {
        $guru = mysqli_query($this->koneksi,
                    "select * from guru where no='$no'");
        return $guru;
    }
    // menghapus data guru 
    public function delete($no)
    {
        $guru = mysqli_query($this->koneksi,
                    "delete from guru where no='$no'");
        return $guru;
    }
}

?>