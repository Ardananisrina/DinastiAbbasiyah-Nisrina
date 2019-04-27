<?php
    include "connect.php";

    $sql = "INSERT INTO soal(
      id_soal,
      soal,
      a,
      b,
      c,
      d,
      knc_jwbn,
      gambar,
      tanggal,
      aktif
    ) value
    ('1', 'Ilmuwan muslim yang dikenal sebagai penulis ensiklopedi kedokteran pertama adalah...', 'Al-Kindi', 'Ibnu Sina', 'Ar-Razi', 'Ali bin Rabbani attabari', 'd', '', '0000-00-00', 'Y'),
    ('2', 'Ibnu Sina adalah ilmuwan paling produktif yang penemuannya dalam bidang kedokteran sangat berpengaruh di dunia Barat. Salah satu karya menumentalnya di bidang kedokteran adalah... ', 'Qanun Fi Al-Tibb', 'Al-Madinah Al-Fadhilah', 'Kitabu al-Hudud ', 'Uyun-ul Hikmah', 'a', '', '0000-00-00', 'Y'),
    ('3', 'Ilmuwan muslim yang membahas penyakit cacar dan campak, dan bukunya dalam bidang ini diterjemahkan ke dalam bahasa Eropa adalah...', 'Ibnu Sina', 'Al-Farabi', 'Ar-Razi', 'Al-Kindi', 'a', '', '0000-00-00', 'Y'),
    ('4', 'Penggagas pertama berdirinya Dinasti Abbasiyah adalah...', 'Ali bin Abdullah', 'Ibrahim bin Ali', 'Abu Muslim al-Khurasani', 'Abdullah bin Ali', 'a', '', '0000-00-00', 'Y'),
    ('5', 'Berikut ini adalah salah satu nama tokoh ilmuwan muslim bidang Filsafat yang terkenal pada masa Abbasiyah adalah ...', 'Al-Quda i', 'Al-Kindi', 'Al-Khawarizmi', 'Al-Biruni', 'b', '', '0000-00-00', 'Y'),
    ('6', 'Tokoh kedokteran pada masa Abbasiyah yang mengarang kitab al-Qonun fi Tibb yaitu .... ', 'Ibnu Thufail', 'Ibnu Rusyd', 'Ibnu Baitar', 'Ibnu Sina', 'd', '', '0000-00-00', 'Y'),
    ('7', 'Filosof besar pertama Islam, dikenal berilmu pengetahuan luas dan mendalam serta memiliki 200 karya ilmiah  adalah ....', 'Al-Ghazali', 'Ar-Rozi', 'Al-Kindi', 'Ibnu Sina', 'b', '', '0000-00-00', 'Y'),
    ('8', 'Kesesuaian antara ilmuwan muslim dengan perannya dalam kemajuan kebudayaan/peradaban Islam pada masa Bani Abbasiyah adalah ....', 'At-Tabari : Sejarah', 'Bukhari dan Muslim : Hadist', 'Ibnu Hisyam : Teologi', 'Washil bin Atha : Tafsir', 'b', '', '0000-00-00', 'Y'),
    ('9', 'Faktor penyebab terbentuknya pemerintahan Dinasti Abbasiyah adalah....', 'Terbunuhnya khalifah terakhir Dinasti Umayah', 'Banyak muncul faham-faham Syi’ah di masa Umayah ', 'Melemahnya kekuasaan kedaulatan Umayah', 'Mendapat serangan dari kelompok oposisi dari Dinas', 'c', '', '0000-00-00', 'Y'),
    ('10', 'Ibnu Musawaih, Ar-Razi & Avicenna merupakan para ilmuwan muslim di masa Daulah Abbasiyah bidang....', 'Astronomi', 'Tasawuf', 'Kedokteran', 'Fiqih', 'c', '', '0000-00-00', 'Y')";

    if ($connect->query($sql) == TRUE){
      echo "Insert data telah berhasil";
    } else {
      echo "Insert data gagal".$connect->error;
    }
?>
