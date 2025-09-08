# プロジェクト構成

本プロジェクトでは、**FLOCSS設計**をベースとしたSCSSと、**gulpによる自動化タスク**を活用しています。
開発・本番ビルドを効率化し、CSS/JS/画像の最適化やキャッシュバスティングも含めたワークフローを構築しています。

---

## CSS設計

Scssのコーディング指針として、CSS設計のひとつである **「FLOCSS」** を採用しています。
(https://github.com/hiloki/flocss)

---

## 環境構築

### パッケージインストール

```bash
npm install
```

## 開発フロー

### 開発用サーバーの起動

```bash
npx gulp dev
```

- **browser-sync** により `http://localhost:3000` で開発環境が立ち上がります
- SCSS / JS / HTML / 画像の変更は自動で監視＆リロードされます

### 本番ビルド

#### ビルドコマンド

```bash
npx gulp build
```

#### 主な処理内容

**SCSS**
- Autoprefixerでベンダープレフィックスを付与
- `css-declaration-sorter` によるプロパティ整列
- `gulp-merge-media-queries` によりメディアクエリをまとめる
- minify版（`.min.css`）を自動生成

**JavaScript**
- 公開用フォルダにコピー
- Uglifyによる圧縮＋minify版（`.min.js`）を自動生成

**HTML**
- `gulp-html-beautify` による整形

**画像**
- jpg/pngを1920px以内にリサイズし、`.webp`形式に変換
- SVGはそのままコピー

**その他**
- `crypto` を用いたキャッシュバスティング対応
- `lib` フォルダをそのままコピー

## 利用可能なタスク一覧

| コマンド | 内容 |
|---------|------|
| `npx gulp dev` | 開発サーバー起動（自動リロード） |
| `npx gulp build` | 本番ビルド |
| `npx gulp cache` | キャッシュバスティング |
| `npx gulp html` | HTML整形 |
| `npx gulp minJs` | JS圧縮 |
| `npx gulp minImage` | 画像最適化 |