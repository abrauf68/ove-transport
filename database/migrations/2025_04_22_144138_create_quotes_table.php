<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('quoteId');
            $table->foreignIdFor(User::class)->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->string('pickup_location');
            $table->string('delivery_location');
            $table->enum('transport_type', ['open', 'enclosed'])->default('open');

            $table->string('vehicle_year')->nullable();
            $table->string('vehicle_make')->nullable();
            $table->string('vehicle_model')->nullable();
            $table->longText('message')->nullable();
            $table->enum('condition', ['running', 'non-running'])->default('running');

            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();

            $table->string('transit_time')->nullable();
            $table->string('distance')->nullable();
            $table->string('price')->nullable();

            $table->enum('status', ['pending', 'in_progress', 'approved', 'rejected', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
