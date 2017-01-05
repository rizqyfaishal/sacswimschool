<div class="section">
   <div class="container">
       <h1 class="text-center">Mengapa memilih Sailfish Aquatic Club (SAC) ?</h1>
       <span class="stripped-center blue"></span>
       <div class="row">
           <div class="columns three">
               <img src="{{ URL::asset('img/icon/like.png') }}" alt="Thumb" class="img-block">
               <h2 class="text-center">No. 1 Smart Private Swimming</h2>
               <p class="text-center">Kursus privat pertama di Indonesia yang menggunakan kurikulum dan laporan
                   perkembangan bulanan (Monthly Report).
               </p>
           </div>
           <div class="columns two">
               <img src="{{ URL::asset('img/icon/checklist.png') }}" alt="Thumb" class="img-block">
               <h2 class="text-center">Flexible Schedule</h2>
               <p class="text-center">Kamu dapat memilih sendiri jadwal yang kamu inginkan sehingga dapat menyesuaikan
                   dengan aktivitas kamu sehari-hari.
               </p>
           </div>
           <div class="columns two">
               <img src="{{ URL::asset('img/icon/swimming-trainer.png') }}" alt="Thumb" class="img-block">
               <h2 class="text-center">Professional Trainer</h2>
               <p class="text-center">Instruktur (Trainer) merupakan atlet renang yang berprestasi di tingkat provinsi hingga
                   nasional serta tenaga profesional yang berpengalaman melatih lebih dari 3 tahun
               </p>
           </div>
           <div class="columns two">
               <img src="{{ URL::asset('img/icon/diploma.png') }}" alt="Thumb" class="img-block">
               <h2 class="text-center">Qualitative Certification</h2>
               <p class="text-center">Kamu akan mendapatkan sertifikat dengan penilaian kualitatif setiap berhasil melewati
                   Tes Kenaikan Tingkat.
               </p>
           </div>
           <div class="columns three">
               <img src="{{ URL::asset('img/icon/swimming-pool.png') }}" alt="Thumb" class="img-block">
               <h2 class="text-center">Preffered Swimming Poo</h2>
               <p class="text-center">Instruktur (Trainer) akan datang ke tempat yang sesuai keinginan kamu sehingga dapat
                   menghemat tenaga dan biaya.
               </p>
           </div>
       </div>
   </div>
</div>
<div class="section blue subscribe">
    <div class="container">
        <div class="row">
            <div class="columns twelve">
                <h3>The fastest way to grow your business with the leader in Technology.</h3>
                <p>Check out our options and features included.</p>
                </form>
                {!! Form::open(['class' => 'subscribe-form', 'method' => 'POST', 'action' => 'SubscriberController@store']) !!}
                    {!! Form::text('email',null,['placeholder' => 'Your email for subscribe', 'style' => 'width: 370px;']) !!}
                        <button type="submit" class="text-center">Send</button>
                    @if ($errors->has('email'))
                        <span class="error-block" class="text-center">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
