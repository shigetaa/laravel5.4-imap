# laravel5.4-imap

## 特徴
laravel フレームワークで、メールサーバー接続「IMAP」「POP3」接続を利用できるようにする。

## インストール
``` bash
# composer require shigetaa/laravel5.4-imap
```

## 設定ファイルのprovidersに追記します。 
``` bash
# vim config/app.php
```
``` php
    'providers' => [
        Shigetaa\Imap\Providers\ImapServiceProvider::class,
    ],
```

