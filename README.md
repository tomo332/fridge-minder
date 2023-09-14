<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## アプリケーション名

FridgeMinder(フリッジマインダー)


## URL

〜

## アプリケーション概要
FridgeMinderは｢冷蔵庫の中の食品等を管理することができるWebアプリケーション｣です。

食品ごとに消費期限・賞味期限を登録することができ、期限が近い食品から並び替えが行われます。また、写真も追加することができるため、ひと目で追加した食品を判別することができます。

## アプリケーションを制作した背景
私事ですが、本年度から初のひとり暮らしを始めました。節約の為に自炊を行っていますが日々の暮らしに追われる中で、以下の課題を感じました。
- 食材を買ったはいいが消費期限が切れてしまい無駄になる
- 冷蔵庫の中身を把握できなくなり、買い忘れや買い過ぎが起こる

ひとり暮らしを行っている友人からも同じような悩みを聞いていたので、食品の管理が簡単に行えるアプリケーションを作成したいと考えました。

## アプリケーションの要件

## 使用画面

| 1.新規登録ボタンをクリックして始める |
----|
| <img width="800" alt="スクリーンショット 2023-09-14 12 25 41" src="https://github.com/tomo332/fridge-minder/assets/55018402/817dfab6-a0b3-4149-b736-cc4d68e37f28"> | 

| 2.新規登録画面 |3.ログイン画面 |
----|---- 
| <img width="800" alt="スクリーンショット 2023-09-14 12 29 09" src="https://github.com/tomo332/fridge-minder/assets/55018402/a1c160ea-b797-4c12-947f-280aa554f6b3"> | <img width="800" alt="スクリーンショット 2023-09-14 12 29 22" src="https://github.com/tomo332/fridge-minder/assets/55018402/7c71e9b9-48b0-402f-bd2a-96d0ee1d32ac"> |

| 4.食品追加ボタンを押す | 5.追加ページに移動するので必要項目を記入し、追加 |
----|---- 
| <img width="800" alt="スクリーンショット 2023-09-13 18 16 14" src="https://github.com/tomo332/fridge-minder/assets/55018402/25b3217f-4e37-4f93-99a8-8dfb029de2f3"> | <img width="800" alt="スクリーンショット 2023-09-13 18 35 25" src="https://github.com/tomo332/fridge-minder/assets/55018402/34b44078-1b73-482f-958a-8f41613adc1a"> |

| 6.上部メニューから一覧画面に移動。続けて追加も可能 | 7.追加項目は以下のように表示 |
----|---- 
| <img width="800" alt="スクリーンショット 2023-09-14 10 38 08" src="https://github.com/tomo332/fridge-minder/assets/55018402/359be1b2-fed6-421f-94fa-23cb1ac1aab9"> | <img width="800" alt="スクリーンショット 2023-09-14 10 45 17" src="https://github.com/tomo332/fridge-minder/assets/55018402/cf417e45-eceb-465c-ab1c-d1a23768f563">|

| 8.複数追加すると期限が近いものから表示 | 9.削除・編集も可能。編集する場合、編集ページに移動 |
----|---- 
| <img width="800" alt="スクリーンショット 2023-09-14 11 10 09" src="https://github.com/tomo332/fridge-minder/assets/55018402/4172ea14-f38b-47ad-b8fb-2f8fcbc54b8b"> | <img width="800" alt="スクリーンショット 2023-09-14 11 57 24" src="https://github.com/tomo332/fridge-minder/assets/55018402/ac46d99a-9e75-4bf8-a375-33451719ffc0"> |

| 10.追加時同様、項目を記入して編集 | 11.反映されていることが確認できる |
----|---- 
|<img width="800" alt="スクリーンショット 2023-09-14 12 03 22" src="https://github.com/tomo332/fridge-minder/assets/55018402/8bf90e0b-a659-4dce-b3b8-8e9c6b857855"> | <img width="800" alt="スクリーンショット 2023-09-14 12 11 09" src="https://github.com/tomo332/fridge-minder/assets/55018402/29e60de7-b293-4ca8-9fdb-b256ab438cdb"> |

| 12.アカウント情報の変更、ログアウト | 
----|
| <img width="800" alt="スクリーンショット 2023-09-14 14 16 55" src="https://github.com/tomo332/fridge-minder/assets/55018402/969afb82-2b6c-4636-a3f7-cbdd8d100a55">|


## 実装予定の機能
- 食品アイテムをカテゴリ（野菜、肉類、乳製品など）で分類し、表示できる機能。
- 賞味期限・消費期限が切れた食品アイテムを表示する機能。
- 賞味期限・消費期限が近づいた食品アイテムに対して通知を送る機能。
- レスポンシブデザインの実装


## 使用技術

- HTML/CSS
- tailwindcss
- PHP/Laravel/Laravel Sail/Laravel Breeze/Laravel Socialite
- GitHub
- phpmyadmin
