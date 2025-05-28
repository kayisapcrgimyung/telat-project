<?php

namespace App\Observers;

use App\Models\Telat;

class TelatObserver
{
    /**
     * Handle the Telat "created" event.
     */
    public function created(Telat $telat)
{
    \App\Models\guruMenu::create([
        'nama_siswa' => $telat->nama_siswa,
        'alasan' => $telat->alasan,
        'waktu_terlambat' => $telat->waktu_terlambat,
    ]);

    \App\Models\muridMenu::create([
        'nama_siswa' => $telat->nama_siswa,
        'alasan' => $telat->alasan,
        'waktu_terlambat' => $telat->waktu_terlambat,
    ]);
}


    /**
     * Handle the Telat "updated" event.
     */
    public function updated(Telat $telat): void
    {
        //
    }

    /**
     * Handle the Telat "deleted" event.
     */
    public function deleted(Telat $telat): void
    {
        //
    }

    /**
     * Handle the Telat "restored" event.
     */
    public function restored(Telat $telat): void
    {
        //
    }

    /**
     * Handle the Telat "force deleted" event.
     */
    public function forceDeleted(Telat $telat): void
    {
        //
    }
}
