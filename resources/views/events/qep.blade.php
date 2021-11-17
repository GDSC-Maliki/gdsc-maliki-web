@extends('division.layout.master')
@section('content-division')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <section id="about" class="about">
        <br>
        <br>
        <br>
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-md-center team mb-5">
                <div class="col">
                    <h1 class="text-center"><span class="">GDSC</span> x <span class="">Quantum
                            Edukasindo Paradigma</span> </h1>
                    <h3 class="text-center text-primary">Build Your Passion and Confidence for The Future</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('event.qep.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email <span
                                    class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                            @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" id="exampleInputPassword1" required>
                            @error('nama') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Instansi <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="instansi" id="exampleInputPassword1" required>
                            @error('instansi') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Apakah kamu sudah pernah mengetahui
                                atau mendapatkan mengenai materi yang akan diberikan pada webinar? <span
                                    class="text-danger">*</span></label>
                            <select class="form-control" name="pernahbelum" id="" required>
                                <option value="">-Pilih-</option>
                                <option value="ya">Ya</option>
                                <option value="belum">Belum</option>
                                <option value="mungkin">Mungkin</option>
                            </select>
                            @error('pernahbelum') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Apakah kamu bersedia menghadiri
                                seluruh rangkaian webinar? <span class="text-danger">*</span></label>
                            <select class="form-control" name="bersedia" id="" required>
                                <option value="">-Pilih-</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                                <option value="mungkin">Mungkin</option>
                            </select>
                            @error('bersedia') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tuliskan kendala kamu mengenai hal-hal
                                yang berhubungan dengan Manajemen Mindset, Goal Setting dan Manajemen Waktu ? <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" name="kendala" id="" cols="30" rows="5" required></textarea>
                            @error('kendala') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Apa harapan kamu setelah mengikuti
                                webinar ini? <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="harapan" id="" cols="30" rows="5" required></textarea>
                            @error('harapan') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor WhatsApp <span
                                    class="text-danger">*</span></label>
                            <input type="number" name="nowa" class="form-control" id="exampleInputPassword1" required>
                            @error('nowa') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-info text-white">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('event/171121qep.png') }}" style="width:100%;max-width:1000px" alt="">
                </div>

            </div>
        </div>
    </section>
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
@endsection
