# Uttar Pradesh Nahendra

Ini adalah project untuk Technical Test dari PT Mega Harapan Mulia (Kelas.com).

## API Reference

#### Endpoint untuk menghitung dan mengembalikan hasil pembagian kepada mentor berdasarkan durasi waktu tonton.

```http
  GET /api/v1/show-mentor-income?month={monthDate}
```

| Parameter   | Type     | Description                                                                                                            |
| :---------- | :------- | :--------------------------------------------------------------------------------------------------------------------- |
| `monthDate` | `string` | **Required**. Untuk test ini tidak required, jika dikosongkan maka nilai monthDate default adalah 2024-07 (Juli 2024). |

![Logo](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/th5xamgrr6se0x5ro4g6.png)

#### Endpoint untuk mencatat waktu tonton pengguna.

```http
  POST /api/v1/update-watch-time
```

| Parameter | Type      | Description                                |
| :-------- | :-------- | :----------------------------------------- |
| `user_id` | `integer` | **Required**. user_id harus berupa angka.  |
| `clas_id` | `integer` | **Required**. class_id harus berupa angka. |
