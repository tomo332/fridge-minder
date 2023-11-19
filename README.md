
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
| <img width="800" alt="スクリーンショット 2023-09-13 18 16 14" src="https://github.com/tomo332/fridge-minder/assets/55018402/25b3217f-4e37-4f93-99a8-8dfb029de2f3"> | <img width="800" alt="スクリーンショット 2023-11-17 22 46 01" src="https://github.com/tomo332/fridge-minder/assets/55018402/8cafd71d-28b3-4e8b-9c04-9bd0f6b8ee11">|

| 6.上部メニューから一覧画面に移動。続けて追加も可能 | 7.追加項目は以下のように表示 |
----|---- 
| <img width="800" alt="スクリーンショット 2023-11-17 22 45 23" src="https://github.com/tomo332/fridge-minder/assets/55018402/056aea7d-bc8b-4ad3-ac77-ca41ae2c2167">| <img width="800" alt="スクリーンショット 2023-11-17 22 46 19" src="https://github.com/tomo332/fridge-minder/assets/55018402/51bd0e0d-e684-44f2-8c4d-66e7d5817a72">|

| 8.複数追加すると期限が近いものから表示 | 9.削除・編集も可能。編集する場合、編集ページに移動 |
----|---- 
|<img width="800" alt="スクリーンショット 2023-11-17 22 58 31" src="https://github.com/tomo332/fridge-minder/assets/55018402/f84f6e86-20a9-4d8d-8522-e70639e50ee4"> | <img width="800" alt="スクリーンショット 2023-11-17 23 03 02" src="https://github.com/tomo332/fridge-minder/assets/55018402/4ae7d9af-c0d0-4071-8e66-9a6228aff7e7"> |

| 10.追加時同様、項目を記入して編集 | 11.反映されていることが確認できる |
----|---- 
|<img width="800" alt="スクリーンショット 2023-11-17 23 05 20" src="https://github.com/tomo332/fridge-minder/assets/55018402/ee8221f2-cd27-49ff-90e8-35829364c9f3"> | <img width="800" alt="スクリーンショット 2023-11-17 23 09 19" src="https://github.com/tomo332/fridge-minder/assets/55018402/2b729103-8083-48c1-baf8-b9c86f20a94a"> |

| 12.カテゴリを選択し、決定をクリックすると... | 13.選択したカテゴリの食品のみ表示される |
----|---- 
|<img width="800" alt="スクリーンショット 2023-11-17 23 11 56" src="https://github.com/tomo332/fridge-minder/assets/55018402/ab393874-6513-4b70-a6f7-1d5a129b811d">| <img width="800" alt="スクリーンショット 2023-11-17 23 12 47" src="https://github.com/tomo332/fridge-minder/assets/55018402/709a260c-b737-46fa-8c95-e2a6e4ed8a5c"> |

| 14.｢＊絞り込み解除＊｣を選択し、決定をクリックすると...| 15.絞り込みが解除される |
----|---- 
|<img width="800" alt="スクリーンショット 2023-11-17 23 16 53" src="https://github.com/tomo332/fridge-minder/assets/55018402/98db8c75-9b1e-4503-920a-e54c931881f1">|<img width="800" alt="スクリーンショット 2023-11-17 23 17 22" src="https://github.com/tomo332/fridge-minder/assets/55018402/4e707d9e-c2a4-4464-999c-e762175f80f5">|

| 12.アカウント情報の変更、ログアウト | 
----|
| <img width="800" alt="スクリーンショット 2023-11-17 23 21 18" src="https://github.com/tomo332/fridge-minder/assets/55018402/11ebbee4-c40e-49e4-8849-402dca0ad403">|


## 実装予定の機能
- 賞味期限・消費期限が切れた食品アイテムを表示する機能。
- 賞味期限・消費期限が近づいた食品アイテムに対して通知を送る機能。
- レスポンシブデザインの実装


## 使用技術

- HTML/CSS
- tailwindcss
- PHP/Laravel/Laravel Sail/Laravel Breeze/Laravel Socialite
- GitHub
- phpmyadmin
