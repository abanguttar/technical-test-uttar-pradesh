# Uttar Pradesh Nahendra

Ini adalah project untuk Technical Test dari PT Mega Harapan Mulia (Kelas.com).

## Installation

Clone Git Project

```bash
  git clone https://github.com/abanguttar/technical-test-uttar-pradesh.git
  cd technical-test-uttar-pradesh
```

Install Composer

```bash
composer Install
```

Copy .env and run migration

```bash
cp .env.example .env
php artisan key:generate
php artisan migrate
```

Copy data from Seeder

```bash
php artisan db:seed DatabaseSeeder
```

Run

```bash
php artisan serve
```

## API Reference

#### Endpoint untuk menghitung dan mengembalikan hasil pembagian kepada mentor berdasarkan durasi waktu tonton.

```http
  GET /api/v1/show-mentor-income?month={monthDate}
```

| Parameter   | Type     | Description                                                                                                            |
| :---------- | :------- | :--------------------------------------------------------------------------------------------------------------------- |
| `monthDate` | `string` | **Required**. Untuk test ini tidak required, jika dikosongkan maka nilai monthDate default adalah 2024-07 (Juli 2024). |

<h6>Success Response 200 OK</h6>

![Logo](/public/assets/api-response/response-success.png)

<h6>Not Found Response 400</h6>

![Logo](/public/assets/api-response/response-not-found.png)

#### Endpoint untuk mencatat waktu tonton pengguna.

```http
  POST /api/v1/update-watch-time
```

| Parameter | Type      | Description                                |
| :-------- | :-------- | :----------------------------------------- |
| `user_id` | `integer` | **Required**. user_id harus berupa angka.  |
| `clas_id` | `integer` | **Required**. class_id harus berupa angka. |

<h6>Insert Response 201 OK</h6>

![Logo](/public/assets/api-response/response-insert.png)

<h6>Update Response 200 OK</h6>

![Logo](/public/assets/api-response/response-update.png)
