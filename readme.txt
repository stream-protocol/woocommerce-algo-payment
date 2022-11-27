=== StreamPay ===
Contributors: streampay
Donate link: https://streampay.io/p/e337d65e3c5e4b47ba19054db1c0c13b
Tags: algorand payments, algopay, algorand blockchain, algorand, yldy, srm, usdt, usdc, streampay, payment service, blockchain
Requires at least: 5.0
Tested up to: 7.0
Stable tag: 1.0.3
Requires PHP: 7.1
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Start accepting Algo based payments within your WooCommerce store easily. Consumers can pay with Algo, YLDY, STR, USDt, USDc, EURe, Planets, Smile Coin.

== Description ==

## Available currencies:

- Algo
- USDt (stablecoin)
- USDc (stablecoin)
- EURe (stablecoin)
- Stream Token (STR)
- YLDY
- Planets
- Smile Coin

> Note: Algo Payments for WooCommerce doesn't support FIAT based shops yet. Take this into account that you should only build your shop for a specific Algo/ASA currency.

## Features:
- Quick and easy payment flow using the fast and secure checkout system from [streampay.io](https://streampay.io/about/)
- Directly receive the Algo/ASA within your wallet. No delays, funds are immediately transferred between sender & receiver.
- Edit the title and description of the payment method.
- Available currencies can be chosen within the WooCommerce currency options.
- Event logging for debugging purposes.

## What is StreamPay - Algo Payments?
StreamPay is the first pure payment service provider that makes payments fast and simple, fully leveraging the Algorand blockchain. We've chosen the Algorand blockchain as our payment infrastructure, as it has unique qualities such as:

- Low blockchain transaction fee (only 0.001 Algo)
- 1000 transactions per second (soon up to 46k per second)
- Block finalization in less than 4.5 seconds (soon to be 2.5 seconds)

StreamPay fully focuses on building the payment service provider for the Algorand blockchain. Therefore integrating many day-to-day apps with the blockchain through StreamPay.

== Frequently Asked Questions ==

= Will Algo Payments work together with regular USD or EUR payments? =

No, currently the plugin can only be used in a 100% Algo (or other ASA) based setup. This means that you have to configure your store currency to ALGO, YLDY, USDt or one of the others.

= Does Algo Payments work with every ASA? =

We currently do support the most popular ones: Algo, YLDY, USDt, USDc, EURe, Planets, Smile Coin. More ASA's will be supported in the near future.

= Is there more documentationa available? =

Yes, please check out [streampay.io/docs/](https://streampay.io/docs/1.0/integrations/woocommerce) for more information and support installing Algo Payments for WooCommerce.

== Changelog ==

= 1.0.3 =
* [Fix] Fix on displaying thousands (numeric) value correctly.

= 1.0.2 =
* [Fix] Fixed issues on PHP 7.1

= 1.0.1 =
* [Fix] Corrected link to 'StreamPay account settings' in admin panel.
* [Fix] Added extra error messaging if the store is not configured with one of the supported currencies.
* [Update] Extended readme with Q&A, Changelog and additional content.

= 1.0.0 =
* Initial release of Algo Payments for WooCommerce
