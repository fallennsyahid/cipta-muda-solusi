# 🏢 Cipta Muda Solusi - Company Profile Website

Website company profile dan sistem manajemen untuk **PT Cipta Muda Solusi**, sebuah perusahaan yang bergerak di bidang IT Solution, Software Development, dan layanan teknologi informasi lainnya.

## 📋 Deskripsi Project

Aplikasi web full-stack yang dibangun menggunakan Laravel 12 dengan fitur:

- **Landing Page** - Halaman utama perusahaan dengan informasi layanan
- **Job Vacancy System** - Sistem lowongan kerja dengan fitur pencarian dan aplikasi online
- **Blog Management** - CMS untuk artikel dan berita perusahaan
- **Portfolio Showcase** - Galeri project dan portofolio perusahaan
- **Partner Management** - Manajemen data mitra dan klien
- **Contact Form** - Formulir kontak dengan notifikasi
- **FAQ System** - Sistem tanya jawab untuk pengunjung
- **Admin Dashboard** - Panel admin untuk mengelola seluruh konten

## 🛠️ Tech Stack

### Backend

- **PHP** ^8.2
- **Laravel** ^12.0
- **Laravel Scout** dengan TNTSearch - Full-text search engine
- **Laravel Breeze** - Authentication scaffolding
- **Maatwebsite Excel** - Export data ke Excel
- **Intervention Image** - Image processing
- **Mews Purifier** - HTML sanitization

### Frontend

- **Tailwind CSS** ^4.1 dengan plugin forms & typography
- **Alpine.js** ^3.4 - Reactive JavaScript framework
- **Vite** ^7.0 - Build tool
- **Swiper.js** ^12.0 - Touch slider

### Testing

- **Pest PHP** ^3.8 - Testing framework

## 📁 Struktur Project

```
├── app/
│   ├── Enums/              # Enum definitions (Status, JobType, etc.)
│   ├── Exports/            # Excel export classes
│   ├── Http/
│   │   ├── Controllers/    # Web & Admin controllers
│   │   ├── Middleware/     # Custom middleware
│   │   └── Requests/       # Form request validation
│   ├── Models/             # Eloquent models
│   ├── Notifications/      # Notification classes
│   ├── Observers/          # Model observers
│   └── View/Components/    # Blade components
├── database/
│   ├── factories/          # Model factories
│   ├── migrations/         # Database migrations
│   └── seeders/            # Database seeders
├── resources/
│   ├── css/                # Stylesheets
│   ├── js/                 # JavaScript files
│   └── views/              # Blade templates
├── routes/
│   ├── web.php             # Web routes
│   └── auth.php            # Authentication routes
└── tests/                  # Pest tests
```

## 🚀 Instalasi

### Persyaratan Sistem

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL / MariaDB / SQLite

### Langkah Instalasi

1. **Clone repository**

    ```bash
    git clone <repository-url>
    cd cipta-muda-solusi
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Install Node.js dependencies**

    ```bash
    npm install
    ```

4. **Setup environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Konfigurasi database** di file `.env`

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=cipta_muda_solusi
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. **Jalankan migrasi dan seeder**

    ```bash
    php artisan migrate --seed
    ```

7. **Create storage link**

    ```bash
    php artisan storage:link
    ```

8. **Build assets**
    ```bash
    npm run build
    ```

## 💻 Menjalankan Aplikasi

### Development Mode (Recommended)

Jalankan semua service sekaligus dengan satu command:

```bash
composer dev
```

Command ini akan menjalankan secara bersamaan:

- Laravel development server (`php artisan serve`)
- Queue listener (`php artisan queue:listen`)
- Vite dev server (`npm run dev`)

### Manual Mode

Buka 3 terminal terpisah:

```bash
# Terminal 1 - Laravel server
php artisan serve

# Terminal 2 - Queue listener
php artisan queue:listen

# Terminal 3 - Vite
npm run dev
```

Akses aplikasi di: `http://localhost:8000`

## 📊 Fitur Utama

### 🏠 Public Pages (Landing)

| Fitur           | Deskripsi                                               |
| --------------- | ------------------------------------------------------- |
| Homepage        | Halaman utama dengan hero section, layanan, dan partner |
| Jobs            | Daftar lowongan kerja dengan pencarian full-text        |
| Blogs           | Artikel dan berita perusahaan                           |
| FAQs            | Halaman tanya jawab                                     |
| Contact         | Formulir kontak                                         |
| Partner Request | Formulir permintaan kerjasama                           |

### 🔐 Admin Panel

| Modul            | Fungsi                              |
| ---------------- | ----------------------------------- |
| Dashboard        | Overview statistik dan aktivitas    |
| Job Vacancies    | CRUD lowongan kerja, kelola pelamar |
| Portfolios       | Manajemen project showcase          |
| Blogs            | CMS artikel dengan approval system  |
| FAQs             | Kelola pertanyaan dan jawaban       |
| Partners         | Manajemen mitra bisnis              |
| Partner Requests | Review permintaan kerjasama         |
| CV Bank          | Database CV pelamar                 |
| Employees        | Manajemen data karyawan             |
| Contacts         | View pesan dari contact form        |
| Accounts         | User management                     |

### 📦 Kategori Portfolio

- Web Development
- Software Development
- IT Solution
- Data Center
- Sales & Marketing
- Event Organizer
- IT Operation & Maintenance

## 🧪 Testing

Jalankan test suite dengan Pest:

```bash
# Via composer script
composer test

# Atau langsung
php artisan test
```

## 📝 Scripts Tersedia

| Command         | Deskripsi                        |
| --------------- | -------------------------------- |
| `composer dev`  | Jalankan development environment |
| `composer test` | Jalankan test suite              |
| `npm run dev`   | Start Vite dev server            |
| `npm run build` | Build production assets          |

## 🔒 Role & Permissions

Aplikasi menggunakan sistem role sederhana:

- **Admin** - Akses penuh ke admin panel
- **Writer** - Akses untuk membuat blog (dengan approval)

## 📤 Export Data

Fitur export ke Excel tersedia untuk:

- Data Pelamar (Applicants)
- Data CV
- Data Karyawan (Employees)

## 🔍 Search Engine

Menggunakan **Laravel Scout** dengan **TNTSearch driver** untuk pencarian full-text pada:

- Job Vacancies (posisi, departemen, lokasi, skill)

## 📧 Notifications

Sistem notifikasi untuk:

- Request publish blog (dari writer ke admin)
- Activity logging untuk audit trail

## 🤝 Contributing

1. Fork repository
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Open Pull Request

## 📄 License

Project ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT).

---

**Dikembangkan dengan ❤️ oleh Tim Cipta Muda Solusi**
