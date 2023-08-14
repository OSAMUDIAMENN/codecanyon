<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SqlUpdateV6 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'version6:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $checkFiles = file_exists('assets/hyip-v6.txt');
        if (!$checkFiles) {

            DB::statement("INSERT INTO `fire_base_notifies` (`id`, `server_key`, `vapid_key`, `api_key`, `auth_domain`, `project_id`, `storage_bucket`, `messaging_sender_id`, `app_id`, `measurement_id`, `user_foreground`, `user_background`, `admin_foreground`, `admin_background`, `created_at`, `updated_at`) VALUES (1, '', '', '', '', '', '', '', '', 'G-FLLWEYC3DL', 1, 1, 1, 1, '2023-08-07 23:52:09', '2023-08-07 23:52:09');");

            DB::statement("INSERT INTO `gateways` (`id`, `name`, `code`, `currency`, `symbol`, `parameters`, `extra_parameters`, `convention_rate`, `currencies`, `min_amount`, `max_amount`, `percentage_charge`, `fixed_charge`, `status`, `note`, `image`, `sort_by`, `created_at`, `updated_at`) VALUES
(33, 'Binance', 'binance', 'USDT', 'USDT', '{\"mercent_api_key\":\"\",\"mercent_secret\":\"\"}', NULL, '1.00000000', '{\"1\":{\"ADA\":\"ADA\",\"ATOM\":\"ATOM\",\"AVA\":\"AVA\",\"BCH\":\"BCH\",\"BNB\":\"BNB\",\"BTC\":\"BTC\",\"BUSD\":\"BUSD\",\"CTSI\":\"CTSI\",\"DASH\":\"DASH\",\"DOGE\":\"DOGE\",\"DOT\":\"DOT\",\"EGLD\":\"EGLD\",\"EOS\":\"EOS\",\"ETC\":\"ETC\",\"ETH\":\"ETH\",\"FIL\":\"FIL\",\"FRONT\":\"FRONT\",\"FTM\":\"FTM\",\"GRS\":\"GRS\",\"HBAR\":\"HBAR\",\"IOTX\":\"IOTX\",\"LINK\":\"LINK\",\"LTC\":\"LTC\",\"MANA\":\"MANA\",\"MATIC\":\"MATIC\",\"NEO\":\"NEO\",\"OM\":\"OM\",\"ONE\":\"ONE\",\"PAX\":\"PAX\",\"QTUM\":\"QTUM\",\"STRAX\":\"STRAX\",\"SXP\":\"SXP\",\"TRX\":\"TRX\",\"TUSD\":\"TUSD\",\"UNI\":\"UNI\",\"USDC\":\"USDC\",\"USDT\":\"USDT\",\"WRX\":\"WRX\",\"XLM\":\"XLM\",\"XMR\":\"XMR\",\"XRP\":\"XRP\",\"XTZ\":\"XTZ\",\"XVS\":\"XVS\",\"ZEC\":\"ZEC\",\"ZIL\":\"ZIL\"}}', '1.00000000', '1000.00000000', '0.0000', '0.00000000', 1, '', '64a9057f0bec51688798591.png', 5, '2023-04-03 01:36:14', '2023-07-08 00:43:11');");

            DB::statement("INSERT INTO `payout_methods` (`id`, `name`, `code`, `description`, `bank_name`, `banks`, `parameters`, `extra_parameters`, `image`, `minimum_amount`, `maximum_amount`, `fixed_charge`, `percent_charge`, `status`, `input_form`, `currency_lists`, `supported_currency`, `convert_rate`, `is_automatic`, `is_sandbox`, `environment`, `duration`, `created_at`, `updated_at`) VALUES
(1000, 'Flutterwave', 'flutterwave', 'Payment will receive within 1 days', '{\"0\":{\"NGN BANK\":\"NGN BANK\",\"NGN DOM\":\"NGN DOM\",\"GHS BANK\":\"GHS BANK\",\"KES BANK\":\"KES BANK\",\"ZAR BANK\":\"ZAR BANK\",\"INTL EUR & GBP\":\"INTL EUR & GBP\",\"INTL USD\":\"INTL USD\",\"INTL OTHERS\":\"INTL OTHERS\",\"FRANCOPGONE\":\"FRANCOPGONE\",\"XAF/XOF MOMO\":\"XAF/XOF MOMO\",\"mPesa\":\"mPesa\",\"Rwanda Momo\":\"Rwanda Momo\",\"Uganda Momo\":\"Uganda Momo\",\"Zambia Momo\":\"Zambia Momo\",\"Barter\":\"Barter\",\"FLW\":\"FLW\"}}', '[\"NGN BANK\",\"NGN DOM\",\"GHS BANK\",\"INTL USD\"]', '{\"Public_Key\":\"FLWPUBK_TEST-5003321b93b251536fd2e7e05232004f-X\",\"Secret_Key\":\"FLWSECK_TEST-d604361e2d4962f4bb2a400c5afefab1-X\",\"Encryption_Key\":\"FLWSECK_TEST817a365e142b\"}', NULL, '64a911fa47d4f1688801786.jpg', '10.00', '200000.00', '10.00', '1.00', 1, '[]', '{\"USD\":\"USD\",\"KES\":\"KES\",\"GHS\":\"GHS\",\"NGN\":\"NGN\",\"GBP\":\"GBP\",\"EUR\":\"EUR\",\"UGX\":\"UGX\",\"TZS\":\"TZS\"}', '{\"USD\":\"USD\",\"KES\":\"KES\",\"GHS\":\"GHS\",\"NGN\":\"NGN\",\"GBP\":\"GBP\",\"EUR\":\"EUR\",\"TZS\":\"TZS\"}', '{\"USD\":\"1\",\"KES\":\"124.1\",\"GHS\":\"12.3\",\"NGN\":\"455.06\",\"GBP\":\"0.81\",\"EUR\":\"0.92\",\"TZS\":\"2335\"}', 1, 0, 1, '1-2 hours maximum', '2021-12-17 10:02:14', '2023-07-08 01:36:26'),
(1001, 'Razorpay', 'razorpay', 'Payment will receive within 1 days', '', NULL, '{\"account_number\":\"\",\"Key_Id\":\"rzp_test_kiOtejPbRZU90E\",\"Key_Secret\":\"osRDebzEqbsE1kbyQJ4y0re7\"}', '{\"webhook\":\"payout\"}', '64a912261ac0f1688801830.jpg', '10.00', '200000.00', '10.00', '1.00', 1, '{\"name\":{\"name\":\"name\",\"label\":\"Name\",\"type\":\"text\",\"validation\":\"required\"},\"email\":{\"name\":\"email\",\"label\":\"Email\",\"type\":\"text\",\"validation\":\"required\"},\"ifsc\":{\"name\":\"ifsc\",\"label\":\"IFSC\",\"type\":\"text\",\"validation\":\"required\"},\"account_number\":{\"name\":\"account_number\",\"label\":\"Account number\",\"type\":\"text\",\"validation\":\"required\"}}', '{\"INR\":\"INR\"}', '{\"INR\":\"INR\"}', '{\"INR\":\"70.98\"}', 1, 0, 1, '1-2 hours maximum', '2021-12-17 10:02:14', '2023-07-08 01:37:10'),
(1002, 'Paystack', 'paystack', 'Payment will receive within 1 days', '', NULL, '{\"Public_key\":\"\",\"Secret_key\":\"sk_test_afe163363398a752b856d01e2b7be2554d9a2330\"}', '{\"webhook\":\"payout\"}', '64a9120f09adb1688801807.jpg', '10.00', '200000.00', '10.00', '1.00', 1, '{\"name\":{\"name\":\"name\",\"label\":\"Name\",\"type\":\"text\",\"validation\":\"required\"},\"account_number\":{\"name\":\"account_number\",\"label\":\"Account  Number\",\"type\":\"text\",\"validation\":\"required\"}}', '{\"NGN\":\"NGN\",\"GHS\":\"GHS\",\"ZAR\":\"ZAR\"}', '{\"NGN\":\"NGN\",\"GHS\":\"GHS\",\"ZAR\":\"ZAR\"}', '{\"NGN\":\"455\",\"GHS\":\"2.3\",\"ZAR\":\"17.2\"}', 1, 0, 1, '1-2 hours maximum', '2021-12-17 10:02:14', '2023-07-08 01:36:47'),
(1003, 'Coinbase', 'coinbase', 'Payment will receive within 1 days', '', NULL, '{\"API_Key\":\"\",\"API_Secret\":\"ACWAncjv2fbMdvPfeJq9U\\/blqEx1FiItqbUGn+kEPCLbKGP4\\/iJlPIQDzMmJHHz\\/Inv1jYANsWDnh3RhHi6HLw==\",\"Api_Passphrase\":\"23xe3opufifi\"}', '{\"webhook\":\"payout\"}', '64a911e2ae88b1688801762.png', '10.00', '200000.00', '1.20', '1.00', 1, '{\"crypto_address\":{\"name\":\"crypto_address\",\"label\":\"Crypto Address\",\"type\":\"text\",\"validation\":\"required\"}}', '{\"BNB\":\"BNB\",\"BTC\":\"BTC\",\"XRP\":\"XRP\",\"ETH\":\"ETH\",\"ETH2\":\"ETH2\",\"USDT\":\"USDT\",\"BCH\":\"BCH\",\"LTC\":\"LTC\",\"XMR\":\"XMR\",\"TON\":\"TON\"}', '{\"BNB\":\"BNB\",\"BTC\":\"BTC\",\"XRP\":\"XRP\",\"ETH\":\"ETH\",\"ETH2\":\"ETH2\",\"USDT\":\"USDT\",\"BCH\":\"BCH\",\"LTC\":\"LTC\",\"XMR\":\"XMR\",\"TON\":\"TON\"}', '{\"BNB\":\"0.0032866584364651\",\"BTC\":\"4.3438047580189E-5\",\"XRP\":\"2.4317656276014\",\"ETH\":\"0.00060498363899103\",\"ETH2\":\"1\",\"USDT\":\"0.99970684227142\",\"BCH\":\"0.0077663435649339\",\"LTC\":\"0.011189496085365\",\"XMR\":\"0.0056633319909619\",\"TON\":\"0.43646828144729\"}', 1, 0, 1, '1-2 hours maximum', '2021-12-17 10:02:14', '2023-07-08 01:36:05'),
(1004, 'Perfect Money', 'perfectmoney', 'Payment will receive within 1 days', '', NULL, '{\"Passphrase\":\"\",\"Account_ID\":\"90016052\",\"Payer_Account\":\"U41722458\"}', '', '64a9121aab5bd1688801818.jpg', '10.00', '200000.00', '10.00', '1.00', 1, '{\"account_number\":{\"name\":\"account_number\",\"label\":\"Account  Number\",\"type\":\"text\",\"validation\":\"required\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\"}', '{\"USD\":\"USD\",\"EUR\":\"EUR\"}', '{\"USD\":\"1\",\"EUR\":\"0.93\"}', 1, 0, 1, '1-2 hours maximum', '2021-12-17 10:02:14', '2023-07-08 01:36:58'),
(1005, 'Paypal', 'paypal', 'Payment will receive within 1 days', '', NULL, '{\"cleint_id\":\"\",\"secret\":\"\"}', '{\"webhook\":\"payout\"}', '64a91204424f91688801796.png', '10.00', '200000.00', '10.00', '1.00', 1, '{\"receiver\":{\"name\":\"receiver\",\"label\":\"Receiver\",\"type\":\"text\",\"validation\":\"required\"}}', '{\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"GBP\":\"GBP\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"USD\":\"USD\"}', '{\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"GBP\":\"GBP\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"USD\":\"USD\"}', '{\"AUD\":\"1.44\",\"BRL\":\"5.21\",\"CAD\":\"1.34\",\"CZK\":\"21.99\",\"DKK\":\"6.85\",\"EUR\":\"0.92\",\"HKD\":\"7.83\",\"HUF\":\"361.73\",\"INR\":\"80.98\",\"ILS\":\"3.4\",\"JPY\":\"129.56\",\"MYR\":\"4.29\",\"MXN\":\"18.87\",\"TWD\":\"30.33\",\"NZD\":\"1.55\",\"NOK\":\"9.79\",\"PHP\":\"54.46\",\"PLN\":\"4.14\",\"GBP\":\"0.81\",\"RUB\":\"68.25\",\"SGD\":\"1.32\",\"SEK\":\"10.3\",\"CHF\":\"0.92\",\"THB\":\"32.64\",\"USD\":\"1\"}', 1, 1, 1, '1-2 hours maximum', '2021-12-17 10:02:14', '2023-07-08 01:36:36'),
(1006, 'Binance', 'binance', 'Payment will receive within 1 days', '', NULL, '{\"API_Key\":\"\",\"KEY_Secret\":\"\"}', '', '64a9119db33511688801693.png', '10.00', '200000.00', '3.00', '2.00', 1, '{\"network\":{\"name\":\"network\",\"label\":\"Network\",\"type\":\"text\",\"validation\":\"required\"},\"address\":{\"name\":\"address\",\"label\":\"Address\",\"type\":\"text\",\"validation\":\"required\"}}', '{\"BNB\":\"BNB\",\"BTC\":\"BTC\",\"XRP\":\"XRP\",\"ETH\":\"ETH\",\"ETH2\":\"ETH2\",\"USDT\":\"USDT\",\"BCH\":\"BCH\",\"LTC\":\"LTC\",\"XMR\":\"XMR\",\"TON\":\"TON\"}', '{\"BNB\":\"BNB\",\"BTC\":\"BTC\",\"XRP\":\"XRP\",\"ETH\":\"ETH\",\"ETH2\":\"ETH2\",\"USDT\":\"USDT\",\"BCH\":\"BCH\",\"LTC\":\"LTC\",\"XMR\":\"XMR\",\"TON\":\"TON\"}', '{\"BNB\":\"0.0032866584364651\",\"BTC\":\"4.3438047580189E-5\",\"XRP\":\"2.4317656276014\",\"ETH\":\"0.00060498363899103\",\"ETH2\":\"1\",\"USDT\":\"0.99970684227142\",\"BCH\":\"0.0077663435649339\",\"LTC\":\"0.011189496085365\",\"XMR\":\"0.0056633319909619\",\"TON\":\"0.43646828144729\"}', 1, 1, 1, '1-2 hours maximum', '2021-12-17 10:02:14', '2023-07-08 01:36:15');");

            file_put_contents("assets/hyip-v6.txt", time());
        }
    }
}
