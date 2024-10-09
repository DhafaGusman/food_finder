<p align="center">
  <a href="#">
    <img src="https://github.com/user-attachments/assets/0a156329-4e10-4599-903c-67c6b4f13481" alt="Logo Food Finder" width="400">
  </a>
</p>

<p align="center">
  Find your food at Food Finder
</p>

---

Food Finder adalah aplikasi layanan pengantaran makanan yang dirancang untuk memudahkan pengguna dalam mencari, memilih, dan memesan makanan dari berbagai restoran yang tersedia. Aplikasi ini berfungsi sebagai platform penghubung antara pengguna (customer) dan penyedia layanan makanan (restaurant owner/admin), dengan tujuan untuk memberikan pengalaman yang nyaman dan efisien dalam memenuhi kebutuhan kuliner sehari-hari.

## Daftar isi

- [Instalasi](#instalasi)
- [Panduan Dalam Koding](#panduan-dalam-koding)
- [Push ke GitHub](#push-ke-github)

## Instalasi

Untuk proses instalasi adalah sebagai berikut.

- Clone kodingan ini dengan cara `🗃️ Download ZIP`.

  ![Download Aplikasi](https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExcnpwZ3NzeGxteXZtbHhmcXVtZGhjeWV2c3hrd2E2c3RlM3ZyMGk0cyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/ABwL3b68E26LsqALSX/giphy.gif)

  Lalu simpan di tempat yang kamu inginkan.

- Clone kodingan ini di Git Bash atau Terminal

  ```bash
  git clone https://github.com/DhafaGusman/food_finder.git
  ```

## Panduan Dalam Koding

Untuk tata cara atau panduan ketika anda koding web ini adalah sebagai berikut.

- Untuk menaruh file berupa image atau foto, harap masukkan di folder `assets/img/`. Contoh:

  ```markdown
  assets/img/%FOLDER_ANDA%/file.jpg
  ```

  NB: %FOLDER_ANDA% hanyalah contoh. Kamu bisa ubah atau bikin folder dengan cara `nama_folder` sesuai nama yang kamu inginkan.

- Untuk menaruh file HTML seperti about_us.html dll, taruh di folder `page` dan buat folder berdasarkan halaman. Contoh:

  ```markdown
  page/nama_folder/nama_file.html
  ```

  Nama folder harus seperti diatas, dengan huruf kecil semua dan dihubungkan dengan _underscore_ (\_) jika terdiri dari 2 kata atau lebih

- Untuk menaruh file CSS dan Javascript, taruh di folder node_modules dan taruh di tempat yang sudah disediakan. Contoh:

  CSS

  ```markdown
  node_modules/css/nama_file.css
  ```

  Javascript

  ```markdown
  node_modules/js/nama_file.js
  ```

- Untuk menamai file, dibagi menjadi 3 bagian:

  - File HTML

    Untuk penamaan, harus diawali dengan `nama_file.jenis`, dengan huruf kecil semua dan dihubungkan dengan _underscore_ (\_) jika terdiri dari 2 kata atau lebih. Contoh:

    ```markdown
    about_us.html
    ```

  - File CSS & JS

    Untuk penamaan, harus diawali dengan `tipe_nama_file.jenis`, dengan huruf kecil semua dan dihubungkan dengan _underscore_ (\_) jika terdiri dari 2 kata atau lebih. Contoh:

    Style/CSS

    ```markdown
    style_about_us.css
    ```

    Script/Javascript

    ```markdown
    script_about_us.js
    ```

  - File assets berupa foto/image dan lainnya

    Untuk penamaan file assets, harus seperti `nama-file.jenis`, dengan huruf kecil semua dan dihubungkan dengan _strip_ (-) jika terdiri dari 2 kata atau lebih. Contoh:

    ```markdown
    logo-food.png
    ```

- Untuk pembuatan selector seperti id, class, dll, adalah sebagai berikut.

  - Class

    ```markdown
    <p class="text-center">Hai</p>
    ```

    Dengan huruf kecil semua dan dihubungkan dengan _strip_ (-) jika terdiri dari 2 kata atau lebih.

  - Id

    ```markdown
    <p id="textCenter">Hai</p>
    ```

    Dengan huruf kecil dibagian depan dan bagian tengah adalah huruf kapital, seperti `hurufBesar`

## Push ke Github

Untuk panduan mengenai push ke GitHub adalah sebagai berikut.

- Buka Git Bash atau Terminal

  Buka Git Bash atau Terminal di folder utama food_finder, dengan cara klik kanan di dalam folder, lalu pilih `Open Git Bash here` untuk Git Bash atau pilih `Open Terminal here` untuk Terminal.

- Tambah branch

  Tambahkan branch untuk menyimpan perubahan kamu ke dalam branch kamu sendiri.

  ```bash
  git branch [nama_kamu]
  ```

  Jika sudah menambahkan branch, pindah ke branch yang sudah kamu buat.

  ```bash
  git checkout [branch_kamu]
  ```

- Tambah perubahan

  Jika kamu menambahkan perubahan di kodingan, lakukan `git add [file kamu]`. Contoh saya ingin menambahkan file `home.html`

  ```bash
  git add page/home/home.html
  ```

  Di mana `page` merupakan folder pertama/awalan, lalu `home` merupakann folder kedua, dan `home.html` merupakan file-nya.

  Jika kamu ingin menambahkan seluruh folder yang berisi file kodingan kamu, gunakan '\*' untuk menambahkan semua file yang ada di dalam folder.

  ```bash
  git add page/home/*
  ```

  Jika kamu ingin menambahkan semua perubahan yang kamu lakukan, gunakan '.' untuk menambahkan semua file yang sudah dirubah. Contoh:

  ```bash
  git add .
  ```

- Commit

  Setelah menambahkan perubahan/file/kodingan, lakukan `git commit` untuk commit dan menambahkan komentar pada perubahan yang telah dibuat. Contoh:

  ```bash
  git commit -m "Inisialisasi file home.html (Progres: 10%)"
  ```

  Ada beberapa hal yang harus diperhatikan ketika menambahkan komentar:

  - Untuk penambahan file, kamu harus memulai dengan kata `Inisialisasi` lalu dibarengi dengan nama file yang ditambahkan dan diakhiri dengan progres kodingan berupa persen.

  - Untuk update/perubahan file, kamu harus memulai dengan kata `Update: ` lalu dibarengi dengan nama file yang ditambahkan dan diakhiri dengan progres kodingan berupa persen. Contoh:

  ```bash
  git commit -m "Update: halaman home (Progres: 65%)"
  ```

  - Jika progres kodingan kamu udah mencapai 100% atau selesai, maka yang perlu ditambahkan adalah:

  ```bash
  git commit -m "Update: halaman home (Progres: 100% Selesai)"
  ```

- Remote repository

  Setelah melakukan commit, tambahkan repository ini ke dalam Git Bash kamu.

  ```bash
  git remote add origin https://github.com/DhafaGusman/food_finder.git
  ```

- Push

  Setelah melakukan remote repository, push ke branch kamu di repositori.

  ```bash
  git push -u origin [branch_kamu]
  ```

Jika langkah-langkah tersebut sudah kamu lakukan dan selesai, silahkan chat di grup bahwa kamu sudah menyelesaikan proses kodingan dan sudah push ke GitHub.

Jika ada kendala, mohon informasikan di grup.
