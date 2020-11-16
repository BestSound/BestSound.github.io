    	<? php
      memerlukan_once "aplikasi / lib / koneksi.php";
      membutuhkan_once "application / lib / config.php";
      memerlukan_once "application / functions / app.php";
      membutuhkan_once "views / header.php";
      
      $ pages_dir = 'halaman';
      if (! empty ($ _ GET ['p'])) {
        $ halaman = scandir ($ pages_dir, 0);
        belum disetel ($ halaman [0], $ halaman [1]);

        $ p = $ _GET ['p'];
        if (in_array ($ p. '. php', $ pages)) {
         sertakan ($ pages_dir. '/'. $ p. '. php');
       } lain {
         echo 'Halaman tidak ditemukan! :( ';
       }
     } lain {
      sertakan ($ pages_dir. '/ home.php');
    }
    membutuhkan_once "views / footer.php";
    ?>

