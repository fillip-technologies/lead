<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        // Hash any passwords that are still stored as plain text.
        // Bcrypt hashes always start with "$2y$"; anything else is plain text.
        DB::table('usersaccount')->get()->each(function ($user) {
            if (!str_starts_with($user->password, '$2y$')) {
                DB::table('usersaccount')
                    ->where('id', $user->id)
                    ->update(['password' => Hash::make($user->password)]);
            }
        });
    }

    public function down(): void
    {
        // Hashing is one-way — cannot reverse.
    }
};
