<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRowsToAnikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('configures', function (Blueprint $table) {
            $table->string('currency_layer_access_key')->nullable();
            $table->tinyInteger('currency_layer_auto_update')->default(0);
            $table->string('currency_layer_auto_update_at')->nullable();
            $table->string('coin_market_cap_app_key')->nullable();
            $table->tinyInteger('coin_market_cap_auto_update')->default(0);
            $table->string('coin_market_cap_auto_update_at')->nullable();
            $table->boolean('top_investor')->default(1);
            $table->boolean('deposit_withdrawals')->default(1);
        });

        Schema::table('payout_logs', function (Blueprint $table) {
            $table->string('response_id')->nullable();
            $table->text('meta_field')->nullable();
            $table->string('currency_code')->nullable();
            $table->text('last_error')->nullable();
        });

        Schema::table('payout_methods', function (Blueprint $table) {
            $table->string('code')->nullable();
            $table->text('description')->nullable();
            $table->text('bank_name')->nullable();
            $table->text('banks')->nullable();
            $table->text('parameters')->nullable();
            $table->text('extra_parameters')->nullable();
            $table->text('currency_lists')->nullable();
            $table->text('supported_currency')->nullable();
            $table->text('convert_rate')->nullable();
            $table->tinyInteger('is_automatic')->default(0);
            $table->tinyInteger('is_sandbox')->default(0);
            $table->tinyInteger('environment')->default(1)->comment("0=>test, 1=>live");
        });

        Schema::create('razorpay_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_id')->nullable();
            $table->string('entity')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });


        Schema::table('admins', function (Blueprint $table) {
            $table->boolean('fcm_token')->text()->nullable();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->boolean('fcm_token')->text()->nullable();
        });

        Schema::create('fire_base_notifies', function (Blueprint $table) {
            $table->id();
            $table->string('server_key')->nullable();
            $table->string('vapid_key')->nullable();
            $table->string('api_key')->nullable();
            $table->string('auth_domain')->nullable();
            $table->string('project_id')->nullable();
            $table->string('storage_bucket')->nullable();
            $table->string('messaging_sender_id')->nullable();
            $table->string('app_id')->nullable();
            $table->string('measurement_id')->nullable();
            $table->boolean('user_foreground')->default(1)->comment("0 => off, 1 = > on");
            $table->boolean('user_background')->default(1)->comment("0 => off, 1 = > on");
            $table->boolean('admin_foreground')->default(1)->comment("0 => off, 1 = > on");
            $table->boolean('admin_background')->default(1)->comment("0 => off, 1 = > on");
            $table->timestamps();
        });



        Schema::table('notify_templates', function (Blueprint $table) {
            $table->boolean('firebase_notify_status')->default(1)->comment('0=>inactive, 1=active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('configures', function (Blueprint $table) {
            $table->dropColumn('currency_layer_access_key');
            $table->dropColumn('currency_layer_auto_update');
            $table->dropColumn('currency_layer_auto_update_at');
            $table->dropColumn('currency_layer_auto_update_at');
            $table->dropColumn('coin_market_cap_app_key');
            $table->dropColumn('coin_market_cap_auto_update_at');
            $table->dropColumn('top_investor');
            $table->dropColumn('deposit_withdrawals');
        });

        Schema::table('payout_logs', function (Blueprint $table) {
            $table->dropColumn('response_id');
            $table->dropColumn('meta_field');
            $table->dropColumn('currency_code');
            $table->dropColumn('last_error');
        });

        Schema::table('payout_methods', function (Blueprint $table) {
            $table->dropColumn('code');
            $table->dropColumn('description');
            $table->dropColumn('bank_name');
            $table->dropColumn('banks');
            $table->dropColumn('parameters');
            $table->dropColumn('extra_parameters');
            $table->dropColumn('currency_lists');
            $table->dropColumn('supported_currency');
            $table->dropColumn('convert_rate');
            $table->dropColumn('is_automatic');
            $table->dropColumn('is_sandbox');
            $table->dropColumn('environment');
        });

        Schema::dropIfExists('razorpay_contacts');

        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('fcm_token');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fcm_token');
        });

        Schema::dropIfExists('fire_base_notifies');

        Schema::table('notify_templates', function (Blueprint $table) {
            $table->dropColumn('firebase_notify_status');
        });
    }
}
