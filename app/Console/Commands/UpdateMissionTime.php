<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Mission;
use Carbon\Carbon;

class UpdateMissionTime extends Command
{
    protected $signature = 'missions:update-time';
    protected $description = 'Update remaining time for active missions';

    public function handle()
    {
        // Ambil semua misi yang masih aktif
        $missions = Mission::where('end_date', '>', Carbon::now())->get();

        // Perbarui waktu tersisa untuk setiap misi
        foreach ($missions as $mission) {
            $start_date = Carbon::parse($mission->start_date);
            $end_date = Carbon::parse($mission->end_date);
            
            // Hitung selisih waktu antara sekarang dan waktu berakhir
            $difference = $end_date->diffInSeconds();

            // Simpan waktu tersisa ke dalam database atau lakukan apa pun yang Anda butuhkan di sini
            $mission->update(['time_ago' => $difference]);
        }

        $this->info('Remaining time for active missions updated successfully!');
    }
}
