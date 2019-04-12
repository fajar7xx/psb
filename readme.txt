PROSEDUR PENERIMAAN SISWA BARU
------------------------------------------------------------------------------------------------------------

(Prosedur pada halaman web portal calon siswa)

1. Lakukan pendaftaran calon siswa dengan meng-klik link
    Pendaftaran Siswa Baru.
2. Isi formulir blanko dengan lengkap.
3. Cek email calon siswa untuk link aktivasi dan password. 
    (disini email menggunakan fake email dengan aplikasi Thunderbird untuk dapat melihat
    link aktivasi dan password yang dikirimkan via email calon siswa)

    cara setting akun email pada Thunderbird telah dibahas pada buku sebelumnya, yaitu
    "Sistem Informasi Pendaftaran Event Dengan PHP Untuk Panduan Skripsi"

4. Lakukan aktivasi dengan meng-klik link aktivasi yang terdapat di email calon siswa.

(Prosedur pada ruang calon siswa setelah calon siswa melakukan login)
Calon siswa login menggunakan nomor pendaftaran dan password yang dikirimkan ke email calon siswa

5. Lengkapi data profil siswa dengan meng-klik menu Profil Siswa. Kemudian klik aksi
    Lengkapi Data Siswa.

    Apabila data calon siswa telah dilengkapi dan dilakukan verifikasi oleh admin.
    calon siswa dapat mencetak data profil siswa sebagai bukti bahwa siswa telah melakukan
    pendaftaran secara online.

    Pencetakan data profil siswa dapat dilakukan apabila admin telah memverifikasi semua data dan dokumen
    yang telah dilengkapi oleh calon siswa. 

    Calon siswa dapat melakukan perubahan data dengan meng-klik tombol aksi
    Cek Data Siswa.
 
6. Lengkapi/unggah dokumen yang diperlukan (Kartu Keluarga, ijazah/SKHU/SKL, foto) dengan 
    meng-klik menu Unggah Dokumen.
7. Input mata pelajaran dari sekolah sebelumnya dengan meng-klik menu Input Mata
    Pelajaran
    (pilih satu kali untuk setiap mata pelajaran)

8. Input nilai raport dari mata pelajaran yang telah dipilih sebelumnya.
9. Cek jadwal ujian saringan masuk untuk mengikuti ujian secara offline disekolah di menu
    Ujian Saringan Masuk.
    
    Apabila waktu ujian dan ruang ujian masih kosong, calon siswa belum dapat
    mencetak kartu peserta ujian saringan masuk.

    Namun apabila waktu ujian dan ruang ujian telah di set oleh admin, maka
    calon siswa dapat segera mencetak kartu peserta ujian saringan masuk.

10. Calon siswa dapat mengetahui informasi keterangan hasil ujian.

     Apabila calon siswa dinyatakan LULUS dalam ujian saringan masuk, maka calon siswa
     mendapatkan NIS baru yang akan digunakan pada sekolah tersebut.

     Informasi NIS baru dapat calon siswa lihat pada menu Ujian Saringan Masuk.

==========================================================

Akses halaman administrator : http://localhost/psb/cfg/dist
username : 2016050001
password : qwerty

==========================================================

PROSEDUR HALAMAN ADMINISTRATOR
------------------------------------------------------------------------------------------------------------

1. Setiap petugas yang akan menggunakan sistem harus terdaftar terlebih dahulu
    didalam sistem.

    Pada halaman login, pilih menu Sign Up untuk mendaftar sebagai admin dgn status "user".

    Lakukan aktivasi dengan meng-klik link aktivasi yang dikirimkan via email bersamaan
    dengan password.

    Lengkapi data admin, klilk menu Pengaturan -> Pengguna.

2. Berikut kebutuhan admin:

    MENU KONTEN
    - mengelola data identitas website.
    - mengelola informasi cara pendaftaran.
    - mengelola informasi PSB.

    MENU MANAJEMEN
    - dapat melihat dan mencetak laporan data penerimaan siswa baru.
      (menu Manajemen -> Penerimaan Siswa Baru)

    - dapat melihat data nilai raport calon siswa. (menu Manajemen -> Nilai Raport Siswa)

    - dapat melihat data kelengkapan dokumen yang terdiri dari dokumen kartu keluarga (KK),
      ijazah/SKHU/SKL, dan foto. (menu Manajemen -> Kelengkapan Dokumen)

    - dapat mengatur jam dan ruangan untuk keperluan ujian saringan masuk.
      (menu Manajemen -> Ujian Saringan Masuk)

    MENU PENGATURAN
    - merubah data admin/pengguna (data pengguna yg tampil sesuai dengan admin yg login)
    - mengelola data kompetensi.
    - mengelola data mata pelajaran.

    KEBUTUHAN ADMIN TERKAIT PSB
    - admin dapat merubah status verifikasi yg terdapat didalam menu Manajemen -> PSB.
      apabila status verifikasi menunjukkan "Sudah", maka calon siswa dapat mencetak
      data profil siswa sebagai bukti telah melakukan pendaftaran secara online.

    - dapat mengatur jam dan ruangan untuk ujian saringan masuk. apabila admin telah
      mengatur jam dan ruangan untuk ujian saringan masuk, maka calon siswa dapat segera
      menetak kartu peserta ujian saringan masuk.

=============================================================

KETENTUAN NILAI UJIAN SARINGAN MASUK
-----------------------------------------------------------------------------------------------------------------

Calon siswa dinyatakan LULUS ujian saringan masuk apabila nilai/score ujian yang diperoleh >=75.

=============================================================







    