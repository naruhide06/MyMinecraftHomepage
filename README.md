# 概要
WebAPIを使用してサーバーに接続しているプレイヤーの情報を表示させるプログラムです。サーバーがオンラインの時とオフラインの時でメッセージが変わるようにしています。

1. WebAPI.php
  - 使用するWebAPIのURLを記述しているだけです。
2. online-user.php
  - 現在接続している人のスキンを表示させます。
3. server-status.php
  - サーバーの最大接続人数と現在の接続人数を表示させます。

# 使い方
includeというディレクトリを作成してその中に入れるだけ。

online-user.phpとserver-status.phpの2行目でWebAPI.phpを読み込んでいるので、お好みのディレクトリ名に変更する場合は適宜変更してください。
