# php-study

## 설치(Mac)

```bash
brew install shivammathur/php/php@7.3
brew install phpmyadmi
```

## PHP 웹서버 실행

### 실행

```bash
php -S 127.0.0.1:8000
```

### 설정

```bash
# php 설정 적용
brew services restart shivammathur/php/php@7.3

cat /opt/homebrew/etc/php/7.3/php.ini
```

## 아파치 실행

### 실행

```bash
sudo apachectl restart
```

### 설정

```bash
# mac brew
cat /private/etc/apache2/httpd.conf

cat /private/var/log/apache2/access_log

cat /private/var/log/apache2/error_log
```
