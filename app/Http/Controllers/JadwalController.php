<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class JadwalController extends Controller
{
    private $days = [
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'
    ];

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->get('user_id');
        $hari = $request->get('hari');
        $aktif = $request->get('aktif') ?: [];
        $pagi_mulai = $request->get('pagi_mulai');
        $pagi_selesai = $request->get('pagi_selesai');
        $sore_mulai = $request->get('sore_mulai');
        $sore_selesai = $request->get('sore_selesai');

        $errors = [];

        for($i = 0; $i < 7;$i++){
            if($pagi_mulai[$i] > $pagi_selesai[$i]){
                $errors [] = "Waktu Pada Hari ".$this->days[$i]." Pagi Tidak Sesuai";
            }
            if($sore_mulai[$i] > $sore_selesai[$i]){
                $errors [] = "Waktu Pada Hari ".$this->days[$i]." Sore Tidak Sesuai";
            }
            Jadwal::updateOrCreate(
                [
                    'hari' => $i, 
                    'user_id' => $user_id 
                ],
                [
                    'aktif' => in_array($i, $aktif),
                    'pagi_mulai' => $pagi_mulai[$i],
                    'pagi_selesai' => $pagi_selesai[$i],
                    'sore_mulai' => $sore_mulai[$i],
                    'sore_selesai' => $sore_selesai[$i] ,
                ]
            );
        }

        if(count($errors) > 0){
            return back()->with(compact('errors'));
        }
        $sukses = "Berhasil Disimpan";
        return back()->with(compact('sukses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = Dokter::find($id);
        $jadwal = Jadwal::where('user_id', $dokter->user_id)->get(); 
        if(count($jadwal) > 0){
            $jadwal->map(function($jadwal_kerja){
                $jadwal_kerja->pagi_mulai = (new Carbon($jadwal_kerja->pagi_mulai))->format('g:i');
                $jadwal_kerja->pagi_selesai = (new Carbon($jadwal_kerja->pagi_selesai))->format('g:i');
                $jadwal_kerja->sore_mulai = (new Carbon($jadwal_kerja->sore_mulai))->format('H:i');
                $jadwal_kerja->sore_selesai = (new Carbon($jadwal_kerja->sore_selesai))->format('H:i');
                return $jadwal_kerja; 
            }); 
        }else{
            $jadwal = collect();
            for($i=0; $i<7; $i++){
                $jadwal->push(new Jadwal());
            }
        }
        $days = $this->days;
        return view('dokter.jadwal', compact('jadwal','dokter','days'));
    }

    private function getIntervals($start, $end){
        $start= new Carbon($start);
        $end = new Carbon($end);  

        $intervals =[];
        while($start < $end){
            $interval = [];

            $interval['start'] = $start->format('H:i');
            $start->addMinutes(30);
            $interval['end'] = $start->format('H:i');
            $intervals [] = $interval;
        }
        return $intervals;
    }

    public function jam(Request $request)
    {
        $date = $request->get('date');
        $dateCarbon = new Carbon($date); 
        $i = $dateCarbon->dayOfWeek;
        $day = ($i==0 ? 6 : $i-1);

        $dokter_id = $request->get('dokter_id');

        $kerja = Jadwal::where('aktif', true)->where('hari', $day)
        ->where('user_id', $dokter_id)->first([
            'pagi_mulai','pagi_selesai','sore_mulai','sore_selesai'
        ]);
        if(!$kerja){
            return [];
        }
         $pagiInterval = $this->getIntervals(
             $kerja->pagi_mulai, $kerja->pagi_selesai
         );

         $soreInterval = $this->getIntervals(
             $kerja->sore_mulai, $kerja->sore_selesai
         );
         $data = [];
         $data['pagi'] = $pagiInterval;
         $data['sore'] = $soreInterval;
         return $data;
    }
}
