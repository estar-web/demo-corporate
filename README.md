# コーポレートデモサイト

## 使用環境

- node@18.12.1
- Gulp@4.0.2
- Gulp Dart Sass
- WordPress@6.4.2

## プラグイン・ライブラリ

- jQuery@3.7.1
- Contact Form 7

## サイトマップ

```
top（front-page.php）：お知らせは最新の３件を表示
  └ 当社について（page-about.php）：ハードコーディング
  └ 研修紹介（page-service.php）：よくある質問はカスタムフィールドでQAを作成（入力がないときは非表示）
  └ お知らせ（home.php）：最新２記事に「NEW」を付与
    └ お知らせ詳細（single.php）：（urlはroot/page-name）
  └ 研修事例（page-case.php）：カスタム投稿タイプ「case」の投稿を表示。
    タクソノミー
    * ビジネス英語研修
    * 異文化コミュニケーション
    * ビジネス留学プラン
    カスタムフィールド
    * 事業名（text）
    * 会社名（text）
    * 企業ロゴ(image)
    * 研修コース(textarea)
    * 選んだ理由(textarea)
    * 導入成果/効果(textarea)
  └ 資料ダウンロード（page-download.php）：Contact Form 7を使用
    └ 資料ダウンロード（page-download-thanks.php）：送信メールとページにお礼メッセージ、ダウンロードリンク表示
  └ お問い合わせ（page-contact.php）：Contact Form 7を使用
    └ 資料ダウンロード（page-contact-thanks.php）：送信メールとページにお礼メッセージ表示
```

## ディレクトリ構成

- \_src・・・作業用ディレクトリ
- dist・・・納品用テーマディレクトリ

## 使用方法

1. ターミナルでルートフォルダに移動後、`npm install`で npm インストール
2. gulp の起動は`npx gulp`
3. 作業時には`git switch -c ブランチ名`でブランチを切って作業

## 作業ディレクトリについて

- PHP・・・テーマ用の PHP ファイルを作成します。『parts』ディレクトリに必要に応じてパーツを切り分けて格納します。
- scss・・・基本 FLOCSS ベースに分割されています。クラス命名規則は BEM を基本として、ブロックごとに sass ファイルを作成して管理します。詳細は`**CSS設計について**`に記載します。
- js・・・必要に応じて JS ファイルを作成して記述していきます。app.js で全ての JS を webpack を介してバンドルします。
- images・・・画像ファイルを用途ごとにディレクトリ分けして格納します。『common』にはサイト内で共通利用される画像を、そのほかはページごとにディレクトリ分割していきます。

## CSS 設計について

### ファイル構成について

- 『global』に変数や mixin、function 等が格納されています。変数等を使用する場合は、global を@use で読み込む必要があります。こちらで設定している mixin や function は都合に合わせてご利用ください。
- 『foundation』にリセット CSS やベースの CSS が記述されています。base.scss にベースとなる CSS を必要に応じて記入してください。
- 『layout』にレイアウトの役割の記述がされています。（接頭詞 l-）
- 『utility』に装飾や display: none;のユーティリティの役割をするクラスなどが格納されています。（接頭詞 u-）JS で制御するクラスでスタイルが必要なものもここに格納してください。（接頭詞 js-）
- 『component』にボタンなど使い回しのスタイルのクラスが格納されています。（接頭詞 c-）
- 『project』にコンポーネント単位以上の大きさの使い回しの効くパーツが格納されています。基本的にページを跨いで使用されるパーツを格納します。（接頭詞 p-）
- 『pages』に各ページでのみ使用されるブロックを格納します。各ページ固有の接頭詞を与えてブロックを作成します。（フロントページは fr- 等）

### BEM の命名について

- Block\_\_Element--Modifire の命名を基本とします。
- 単語の繋がりは接頭詞と区別するため、キャメルケースを基本とします。（例：p-navList）
- クラス名のバッティングや作業のコンフリクトの可能性を避けるため、ブロック名ごとに Sass ファイルを作成することを基本とします。

## 備考

- CSS は役割に応じてクラス名を当てて、スタイルを管理するように心がけてください。そのため、1 つの要素に複数クラスが付与されることは問題ないです。（例：`<h1 class="p-news__title c-title js-fadeIn">`）
- 画像ファイル名の命名規則は任意としますが、統一の取れたものであると望ましいです。
- 画像は webp 形式に変換されるタスクが含まれています。拡張子に注意してください。
