# Mỹ Phẩm Huyền Milk

Website bán hàng mỹ phẩm trực tuyến, xây dựng bằng PHP thuần theo mô hình MVC.

## 📋 Tính năng

- Hiển thị danh sách sản phẩm mỹ phẩm
- Quản lý sản phẩm (CRUD)
- Giao diện responsive cho khách hàng
- Template thiết kế chuyên nghiệp (ShopIn theme)

## 🛠️ Công nghệ

- **Backend:** PHP (MVC pattern)
- **Database:** MySQL
- **Frontend:** HTML/CSS/JS (ShopIn template)

## ⚙️ Cài đặt

### 1. Clone repository

```bash
git clone https://github.com/trucuit/myphamhuyenmilk.git
cd myphamhuyenmilk
```

### 2. Tạo database

```sql
CREATE DATABASE huyenmilk;
```

Import structure từ file SQL nếu có.

### 3. Cấu hình Environment

Thiết lập biến môi trường trước khi chạy:

| Biến | Mô tả | Mặc định |
|------|--------|----------|
| `DB_HOST` | MySQL host | `localhost` |
| `DB_USER` | MySQL username | `root` |
| `DB_PASS` | MySQL password | _(empty)_ |
| `DB_NAME` | Tên database | `huyenmilk` |

### 4. Chạy ứng dụng

Deploy lên Apache/Nginx web server với PHP enabled.

## 🔒 Bảo mật

> **⚠️ QUAN TRỌNG:** Không commit credentials vào source code. Sử dụng biến môi trường.

## 📄 License

All rights reserved.
