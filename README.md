# Sinatra FastCGIテンプレート

SinatraをFastCGIで動作させるためのテンプレートです．

## ディレクトリ構成

```
/
├── .htaccess
├── config.ru
├── README.md
├── app
│   ├── app.rb
│   └── views
│       ├── index.erb
│       └── layout.erb
├── log
└── public
    ├── .htaccess
    └── dispatch.fcgi
```

* appディレクトリ
  * この下にSinatraのコードを配置します
* publicディレクトリ
  * このディレクトリ以下が公開ディレクトリとなります

## 動作方法

### ローカル環境で動作させる

ローカルで動作させるときは`rackup -p 4567`コマンドを実行します

### サーバ環境で動作させる

これらのファイルを公開ディレクトリにアップロードします．
以下のファイル，フォルダのパーミッションに注意してください．

また，設置位置に応じて.htaccessのRewriteBaseを書き換えてください．

* log
  * 777
* public/dispatch.fcgi
  * 755

