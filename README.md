📌 Laravel Kullanıcı Yönetim Sistemi | Laravel User Management System

Bu proje, Laravel framework kullanılarak geliştirilmiş bir kullanıcı yönetim sistemidir. Projede normal kullanıcılar ve adminler için ayrı giriş sistemleri bulunmaktadır.This project is a user management system developed using the Laravel framework. It includes separate login systems for regular users and admins.

🚀 Özellikler | Features

✅ Kullanıcı Girişi ve Kayıt Olma | User Login and Registration

✅ Admin Girişi (Özel Kod ile) | Admin Login (With Special Code)

✅ Admin Paneli | Admin Panel

🔹 Kullanıcı listesini görüntüleme | View user list

🔹 Kullanıcıların isim ve mail adreslerini düzenleme | Edit user names and email addresses

🔹 Kullanıcı mesajlarını okuma | Read user messages

✅ Normal Kullanıcı Paneli | Regular User Panel

🔹 Admin’e mesaj gönderme | Send messages to the admin

📦 Kurulum | Installation

Aşağıdaki adımları takip ederek projeyi yerel ortamınızda çalıştırabilirsiniz.Follow the steps below to run the project locally.

1️⃣ Bağımlılıkları Yükleyin | Install Dependencies

Laravel ve diğer bağımlılıkları yüklemek için terminalde şu komutu çalıştırın:Run the following command in the terminal to install Laravel and other dependencies:

composer install

2️⃣ .env Dosyasını Güncelleyin | Update the .env File

.env.example dosyasını .env olarak kopyalayın ve MySQL bağlantı bilgilerini güncelleyin:Copy the .env.example file to .env and update the MySQL connection details:

3️⃣ Veritabanı Migrasyonlarını Çalıştırın | Run Database Migrations

php artisan migrate

4️⃣ Kullanıcı ve Admin Verilerini Ekleyin | Seed Users and Admin Data

php artisan db:seed

Bu işlem örnek kullanıcı ve admin hesapları oluşturacaktır.This will create sample user and admin accounts.

5️⃣ Geliştirme Sunucusunu Başlatın | Start the Development Server

php artisan serve

Artık uygulamanız http://127.0.0.1:8000 adresinde çalışacaktır.Your application will now be running at http://127.0.0.1:8000.


🔍 Kullanıcı Rolleri ve Giriş Bilgileri | User Roles and Login Information

📌 Normal Kullanıcı | Regular User

Kullanıcılar kendi hesaplarını oluşturabilir ve giriş yapabilir.Users can create their own accounts and log in.

Kullanıcılar admin’e mesaj gönderebilir.Users can send messages to the admin.

📌 Admin Girişi | Admin Login

Admin hesabına giriş yapabilmek için özel bir kod girilmelidir.Admin login requires a special code.

Admin, kullanıcı listesini görüntüleyebilir, bilgilerini düzenleyebilir ve gelen mesajları okuyabilir.The admin can view user lists, edit user details, and read messages.
