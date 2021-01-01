# UAS TST 18218006

## Instalasi Website di localhost
1. Download repository github.
2. Download dan install web server (dalam hal ini, saya gunakan XAMPP)
3. Extract filenya di folder htdocs dalam XAMPP
4. Set 'start' modul Apache dan MySQL
5. Buka localhost/phpmyadmin lalu buat database *dbtst* (bebas dinamakan sebagai apa, yang penting disesuaikan dengan file database.php pada variabel database name di https://github.com/rehuelgrace/ci-restserver ). Tabel dan atribut sesuaikan dengan gambar *tampilan database* di bagian akhir dari file ini.
6. Clone repository https://github.com/rehuelgrace/ci-restserver lalu letakkan di htdocs juga.
7. Terakhir, masukkan localhost/<path-file-yang-diekstrak> ke address bar browser

## Pengecekan API localhost di Postman
1. Download dan install Postman
2. Register akun di Postman lalu login
3. Buat folder dan request untuk pengecekan API di Postman
4. Masukkan http://127.0.0.1/rest_ci/index.php/dbtst ke address bar di Postman
5. Pilih method CRUD. Jika ingin menampilkan data tertentu dapat dimasukkan http://127.0.0.1/rest_ci/index.php/dbtst?id={id-yang-ingin-ditampilkan} ke address bar di Postman

## Endpoint, URI, Method
*../dbtst*<br>
Menampilkan GET seluruh data anggota yang ada pada database tabel daftar anggota
![testapi-get dbtst](https://user-images.githubusercontent.com/53871909/103405124-a1f8ba80-4b88-11eb-807a-484b91a7c5a4.JPG)

*../dbtst?id={id}*<br>
Menampilkan GET data dengan id anggota tertentu
![testapi-get dbtst id tertentu](https://user-images.githubusercontent.com/53871909/103405121-a02ef700-4b88-11eb-94c3-b49f5c0f2f64.JPG)

*../dbtst*<br>
Melakukan POST data anggota
![testapi-post dbtst](https://user-images.githubusercontent.com/53871909/103405125-a2915100-4b88-11eb-9114-02ab37f6fb5f.JPG)

*../dbtst?id={id}*<br>
Melakukan PUT pada salah satu data anggota yang telah terdaftar
![testapi-put dbtst](https://user-images.githubusercontent.com/53871909/103405407-8d68f200-4b89-11eb-9fad-1843573b14ea.JPG)

*../dbtst?id={id}*<br>
Melakukan DELETE pada salah satu data anggota yang telah terdaftar
![image](https://user-images.githubusercontent.com/53871909/103405473-dde04f80-4b89-11eb-96d5-307f88f23187.png)

## Deployment Website
### Github ini sebagai version control dan juga dokumentasi tugas pengganti UAS II3160 Teknologi Sistem Terintegrasi.
Dibuat oleh: Rehuel Grace Marbun (18218006)

*Tampilan Registrasi*<br>
![profiltst-register](https://user-images.githubusercontent.com/53871909/103403634-71625200-4b83-11eb-9c8c-ef0f1c0433f9.JPG)

*Tampilan Login*<br>
![profiltst-login](https://user-images.githubusercontent.com/53871909/103403809-0cf3c280-4b84-11eb-9259-eb8f8452d0d5.JPG)

*Tampilan menu Home*<br>
![profiltst-home](https://user-images.githubusercontent.com/53871909/103403630-6f988e80-4b83-11eb-9f32-5c4dacfe72e1.JPG)

*Tampilan menu About Us*<br>
![profiltst-about us](https://user-images.githubusercontent.com/53871909/103403471-cea9d380-4b82-11eb-8909-cd5c76c8bf1b.JPG)

*Tampilan menu Data Anggota*<br>
![tampilan data](https://user-images.githubusercontent.com/53871909/101059275-aa2cfc80-35c0-11eb-89df-7884a1df0494.JPG)


*Tampilan untuk menambahkan data*<br>
![tampilan menambahkan data](https://user-images.githubusercontent.com/53871909/101059394-ccbf1580-35c0-11eb-994b-017232f0e969.JPG)


*Tampilan untuk mengedit data*<br>
![tampilan mengedit data](https://user-images.githubusercontent.com/53871909/101059415-d3e62380-35c0-11eb-9e9e-54f3bfe4354f.JPG)


*Tampilan database*<br>

#### Tabel daftar anggota
![tampilan database](https://user-images.githubusercontent.com/53871909/101059431-d9dc0480-35c0-11eb-89e3-a88cd6e74a5d.JPG)

#### Tabel users website yang terdaftar
![dbtst-tabel user](https://user-images.githubusercontent.com/53871909/103402992-32330180-4b81-11eb-8245-561a353c0bd4.JPG)
