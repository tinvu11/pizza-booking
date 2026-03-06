# 🍕 Shale PIZZAzzz - Website Đặt Pizza Online

Dự án website đặt pizza trực tuyến được xây dựng bằng **Laravel 7** với hệ quản trị cơ sở dữ liệu **MySQL/MariaDB**.

---

## 📋 Mục lục

- [Yêu cầu hệ thống](#-yêu-cầu-hệ-thống)
- [Cài đặt](#-hướng-dẫn-cài-đặt)
- [Cấu hình](#-cấu-hình)
- [Import Database](#-import-database)
- [Chạy dự án](#-chạy-dự-án)
- [Tài khoản mặc định](#-tài-khoản-mặc-định)
- [Cấu trúc dự án](#-cấu-trúc-dự-án)
- [Chức năng](#-chức-năng-chính)

---

## 🔧 Yêu cầu hệ thống

Trước khi cài đặt, hãy đảm bảo máy tính của bạn đã cài đặt các phần mềm sau:

| Phần mềm | Phiên bản tối thiểu | Ghi chú |
|-----------|---------------------|---------|
| **PHP** | >= 7.2.5 | Bắt buộc |
| **Composer** | >= 1.x | Quản lý package PHP |
| **MySQL / MariaDB** | MySQL >= 5.7 hoặc MariaDB >= 10.x | Hệ quản trị CSDL |
| **Node.js & NPM** | Node >= 12.x | Biên dịch tài nguyên (CSS/JS) |
| **Git** | bất kỳ | Tùy chọn, để clone dự án |

### Cách nhanh nhất: Dùng XAMPP hoặc Laragon

- **XAMPP**: Tải tại [https://www.apachefriends.org/](https://www.apachefriends.org/) — đã bao gồm PHP, MySQL, Apache.
- **Laragon**: Tải tại [https://laragon.org/](https://laragon.org/) — nhẹ hơn, tự động cấu hình, rất phù hợp cho Laravel.

> **Lưu ý**: Nếu dùng XAMPP/Laragon, bạn vẫn cần cài thêm **Composer** và **Node.js** riêng.

### Cài đặt Composer

Tải tại: [https://getcomposer.org/download/](https://getcomposer.org/download/)

Kiểm tra sau khi cài:
```bash
composer --version
```

### Cài đặt Node.js

Tải tại: [https://nodejs.org/](https://nodejs.org/)

Kiểm tra sau khi cài:
```bash
node --version
npm --version
```

### PHP Extensions cần thiết

Đảm bảo các extension sau được bật trong file `php.ini`:

- `pdo_mysql`
- `mbstring`
- `openssl`
- `tokenizer`
- `xml`
- `ctype`
- `json`
- `bcmath`
- `gd` (cần thiết cho package `intervention/image`)

> Nếu dùng XAMPP, hầu hết các extension đã được bật sẵn. Kiểm tra file `php.ini` (thường ở `C:\xampp\php\php.ini`) và bỏ dấu `;` trước các dòng extension nếu cần.

---

## 📥 Hướng dẫn cài đặt

### Bước 1: Tải mã nguồn

**Cách 1** — Clone từ Git:
```bash
git clone <repository-url>
cd Shale-PIZZAzzz-master
```

**Cách 2** — Giải nén file ZIP đã tải về, sau đó mở terminal/cmd và `cd` vào thư mục dự án:
```bash
cd đường-dẫn-tới/Shale-PIZZAzzz-master
```

### Bước 2: Cài đặt các package PHP (Composer)

```bash
composer install
```

> Lệnh này sẽ tải tất cả thư viện PHP cần thiết vào thư mục `vendor/`. Có thể mất vài phút tùy tốc độ mạng.

### Bước 3: Cài đặt các package JavaScript (NPM)

```bash
npm install
```

### Bước 4: Tạo file cấu hình `.env`

Sao chép file `.env.example` thành `.env`:

**Windows (CMD):**
```cmd
copy .env.example .env
```

**Windows (PowerShell):**
```powershell
Copy-Item .env.example .env
```

**Linux/macOS:**
```bash
cp .env.example .env
```

> ⚠️ Nếu không tìm thấy file `.env.example`, hãy tạo file `.env` thủ công với nội dung ở [phần Cấu hình](#-cấu-hình) bên dưới.

### Bước 5: Tạo Application Key

```bash
php artisan key:generate
```

---

## ⚙️ Cấu hình

Mở file `.env` bằng trình soạn thảo (VS Code, Notepad++,...) và chỉnh sửa các thông số sau:

```env
APP_NAME="Shale PIZZAzzz"
APP_ENV=local
APP_KEY=  # (sẽ được tự động điền sau khi chạy php artisan key:generate)
APP_DEBUG=true
APP_URL=http://localhost:8000

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eproject-sem1
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
```

### Giải thích các thông số quan trọng:

| Thông số | Giá trị | Mô tả |
|----------|---------|-------|
| `DB_DATABASE` | `eproject-sem1` | Tên database (phải trùng với tên DB bạn tạo) |
| `DB_USERNAME` | `root` | Tên đăng nhập MySQL (mặc định XAMPP là `root`) |
| `DB_PASSWORD` | _(để trống)_ | Mật khẩu MySQL (mặc định XAMPP không có mật khẩu) |
| `DB_PORT` | `3306` | Cổng MySQL mặc định |
| `APP_DEBUG` | `true` | Bật chế độ debug khi phát triển |

---

## 🗄️ Import Database

### Bước 1: Tạo database

1. Mở **phpMyAdmin** (nếu dùng XAMPP: truy cập `http://localhost/phpmyadmin`)
2. Nhấn **"New"** (Tạo mới) ở panel bên trái
3. Nhập tên database: **`eproject-sem1`**
4. Chọn Collation: **`utf8mb4_unicode_ci`**
5. Nhấn **"Create"** (Tạo)

### Bước 2: Import dữ liệu

1. Chọn database **`eproject-sem1`** vừa tạo
2. Chọn tab **"Import"**
3. Nhấn **"Choose File"** và chọn file **`eproject-sem1.sql`** nằm trong thư mục gốc của dự án
4. Nhấn **"Go"** (Thực thi)

**Hoặc import bằng dòng lệnh:**

```bash
mysql -u root -p eproject-sem1 < eproject-sem1.sql
```

> Sau khi import thành công, database sẽ có các bảng: `tbl_admin`, `tbl_category`, `tbl_combo`, `tbl_delivery`, `tbl_feedback`, `tbl_gallery`, `tbl_order`, `tbl_order_details`, `tbl_product`, `tbl_user`.

---

## 🚀 Chạy dự án

### Bước 1: Khởi động MySQL

- **XAMPP**: Mở XAMPP Control Panel → Nhấn **Start** ở dòng **MySQL**
- **Laragon**: Mở Laragon → Nhấn **Start All**

### Bước 2: Biên dịch tài nguyên frontend (tùy chọn)

```bash
npm run dev
```

Hoặc chạy ở chế độ theo dõi thay đổi (tự động biên dịch khi bạn sửa file CSS/JS):
```bash
npm run watch
```

### Bước 3: Khởi động server Laravel

```bash
php artisan serve
```

Sau khi chạy thành công, bạn sẽ thấy thông báo:
```
Laravel development server started: http://127.0.0.1:8000
```

### Bước 4: Truy cập website

| Trang | URL |
|-------|-----|
| **Trang chủ** | http://localhost:8000/home |
| **Đăng nhập Admin** | http://localhost:8000/backend/login |
| **Menu Pizza** | http://localhost:8000/pizza |
| **Giỏ hàng** | http://localhost:8000/CartShow |

---

## 👤 Tài khoản mặc định

### Tài khoản Admin (Backend)

| Username | Password | Quyền |
|----------|----------|-------|
| `ThangNguyen` | _(mật khẩu đã hash trong DB)_ | Owner |
| `AnNguyen` | _(mật khẩu đã hash trong DB)_ | Owner |
| `hello` | _(mật khẩu đã hash trong DB)_ | Admin |

> **Lưu ý**: Mật khẩu admin được lưu dưới dạng hash trong database. Nếu không biết mật khẩu, bạn có thể tạo tài khoản mới bằng cách thêm trực tiếp vào bảng `tbl_admin` qua phpMyAdmin, hoặc sử dụng Tinker:
>
> ```bash
> php artisan tinker
> ```
> ```php
> $admin = new \App\Model\tbl_admin();
> $admin->user_name = 'admin';
> $admin->password = hash('sha256', 'matkhau123') . hash('sha256', 'matkhau123');
> $admin->permission = 'Owner';
> $admin->save();
> ```

### Tài khoản User (Frontend)

| Username | Email | Password |
|----------|-------|----------|
| `hello` | `orionazo9@gmail.com` | _(mật khẩu đã hash)_ |

> Bạn có thể đăng ký tài khoản mới trực tiếp trên giao diện website.

---

## 📁 Cấu trúc dự án

```
Shale-PIZZAzzz-master/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Backend/        # Controllers cho trang admin
│   │   │   ├── Login/          # Controllers xử lý đăng nhập/đăng ký
│   │   │   └── CartController  # Controller giỏ hàng
│   │   └── Middleware/         # Middleware (xác thực admin, CSRF,...)
│   └── Model/                  # Các model (tbl_admin, tbl_product, tbl_order,...)
├── config/                     # File cấu hình ứng dụng
├── database/
│   ├── migrations/             # File migration database
│   └── seeds/                  # Seeder dữ liệu mẫu
├── public/                     # Thư mục public (CSS, JS, Images)
│   ├── css/                    # File CSS
│   ├── product/                # Ảnh sản phẩm
│   ├── combo/                  # Ảnh combo
│   └── gallery/                # Ảnh gallery
├── resources/views/
│   ├── Backend/                # View trang admin
│   ├── Frontend/               # View trang người dùng
│   ├── master.blade.php        # Layout chính
│   └── masterTwo.blade.php     # Layout phụ
├── routes/
│   └── web.php                 # Định nghĩa routes
├── eproject-sem1.sql           # File SQL để import database
├── composer.json               # Danh sách package PHP
├── package.json                # Danh sách package JS
└── .env                        # File cấu hình môi trường (tự tạo)
```

---

## 🎯 Chức năng chính

### Trang người dùng (Frontend)
- 🏠 Trang chủ giới thiệu pizza
- 🍕 Xem menu: Pizza, Garlic Breads, Pizza Sandwiches, Desserts, Beverages
- 🛒 Thêm sản phẩm vào giỏ hàng
- 💳 Đặt hàng và thanh toán
- 📍 Xem địa điểm cửa hàng
- 📸 Xem gallery hình ảnh
- 💬 Gửi feedback
- 👤 Đăng ký / Đăng nhập tài khoản

### Trang quản trị (Backend - `/backend`)
- 📊 Dashboard tổng quan
- 👥 Quản lý Admin (thêm/sửa/xóa)
- 👤 Quản lý User (thêm/sửa/xóa)
- 📦 Quản lý sản phẩm (Product)
- 📂 Quản lý danh mục (Category)
- 🛵 Quản lý đơn giao hàng (Delivery)
- 📋 Quản lý đơn hàng (Order)
- 🎁 Quản lý Combo Weekend Special
- 📸 Quản lý Gallery
- 💬 Quản lý Feedback

---

## ❓ Xử lý sự cố thường gặp

### 1. Lỗi "No application encryption key has been specified"
```bash
php artisan key:generate
```

### 2. Lỗi kết nối database "SQLSTATE[HY000] [1049] Unknown database"
- Đảm bảo đã tạo database `eproject-sem1` trong phpMyAdmin
- Kiểm tra lại thông tin `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` trong file `.env`

### 3. Lỗi "Class not found" sau khi clone
```bash
composer dump-autoload
```

### 4. Lỗi "The page has expired due to inactivity" (419)
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### 5. Lỗi liên quan đến thư viện `intervention/image`
Đảm bảo extension `gd` đã được bật trong `php.ini`:
```ini
extension=gd
```
Sau đó khởi động lại Apache/PHP.

### 6. Trang trắng hoặc lỗi 500
- Kiểm tra file `.env` đã được tạo chưa
- Chạy lại: `php artisan key:generate`
- Kiểm tra quyền thư mục `storage/` và `bootstrap/cache/`:
  ```bash
  # Linux/macOS:
  chmod -R 775 storage bootstrap/cache
  ```
  Trên Windows, đảm bảo thư mục không bị chỉ đọc (Read-only).

---

## 📝 Ghi chú thêm

- Dự án sử dụng **Laravel 7** và **PHP >= 7.2.5**
- Package giỏ hàng: [darryldecode/cart](https://github.com/darryldecode/laravelshoppingcart)
- Package xử lý ảnh: [intervention/image](http://image.intervention.io/)
- Database sử dụng **MariaDB 10.4** (tương thích MySQL)

---

## 📜 License

Dự án được phát triển phục vụ mục đích học tập (eProject Semester 1).
