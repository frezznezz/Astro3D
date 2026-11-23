<?php

return [
    'meta' => [
        'title' => 'Astro3D - Partner Produksi 3D Printing Satuan hingga Batch',
        'description' => 'Astro3D membantu mewujudkan ide menjadi produk nyata. Jasa 3D printing satuan hingga produksi batch, dengan rekomendasi material dan penawaran yang jelas.',
        'og_title' => 'Astro3D - Wujudkan Ide Anda, Lapis Demi Lapis.',
        'og_description' => 'Partner produksi 3D printing untuk personal, bisnis, dan brand. Dari file ke produk siap pakai.',
    ],

    'nav' => [
        'label' => 'Navigasi utama',
        'batch' => 'Produksi Batch',
        'gallery' => 'Galeri',
        'order' => 'Mulai Cetak',
        'open_menu' => 'Buka menu',
        'home' => 'Beranda Astro3D',
    ],

    'lang' => [
        'label' => 'Pilih bahasa',
        'id' => 'ID',
        'en' => 'EN',
        'zh' => '中文',
    ],

    'wa' => [
        'consult' => 'Halo Astro3D, saya ingin konsultasi.',
        'file' => 'Halo Astro3D, saya akan mengirim file 3D.',
    ],

    'hero' => [
        'title' => 'Jasa 3D Print',
        'title_em' => 'Satuan hingga Produksi Batch',
        'lead' => 'Dari file ke produk siap pakai. Kami bantu rekomendasi material, estimasi biaya, dan jadwal produksi.',
        'cta_file' => 'Kirim File via WhatsApp',
        'cta_gallery' => 'Lihat Hasil Cetak',
        'scroll' => 'Selengkapnya',
        'scroll_label' => 'Lihat keunggulan Astro3D',
    ],

    'advantages' => [
        'eyebrow' => 'Kenapa Astro3D',
        'title_before' => 'Partner produksi yang ',
        'title_highlight' => 'bisa diandalkan',
        'lead' => 'Astro3D mendampingi Anda mengubah ide menjadi objek nyata-lapis demi lapis. Mulai dari prototipe satuan hingga produksi batch, dengan proses jelas, material yang tepat, dan hasil yang konsisten.',
        'items' => [
            'refund' => [
                'title' => 'Jaminan Uang Kembali',
                'body' => 'Kami bertanggung jawab atas hasil cetak. Jika tidak sesuai pesanan, rusak, atau cacat produksi, dana Anda dikembalikan.',
            ],
            'fast' => [
                'title' => 'Pengerjaan Cepat',
                'body' => 'Alur produksi ringkas dan terukur: validasi file, cetak, quality control, lalu pengiriman. Estimasi umum 1-3 hari kerja.',
            ],
            'material' => [
                'title' => 'Rekomendasi Material',
                'body' => 'Setiap part punya kebutuhan berbeda. Kami bantu memilih PLA, PETG, atau ABS sesuai fungsi, beban, suhu, dan anggaran Anda.',
            ],
            'batch' => [
                'title' => 'Tarif Produksi Batch',
                'body' => 'Siap untuk satuan maupun skala lebih besar. Untuk volume tinggi dengan file yang sama, tersedia tarif khusus produksi batch.',
            ],
        ],
    ],

    'materials' => [
        'eyebrow' => 'Pilihan Material',
        'title_before' => 'Material tepat untuk ',
        'title_highlight' => 'hasil yang tepat',
        'lead' => 'Material menentukan kekuatan, ketahanan panas, dan kualitas permukaan. Astro3D membantu Anda memilih opsi paling masuk akal untuk fungsi part dan anggaran produksi.',
        'cta' => 'Konsultasi Material',
        'pla' => [
            'tag' => 'Paling rapi',
            'alt' => 'Hasil cetak material PLA',
            'desc' => 'Material paling umum untuk cetak 3D. Mudah dibentuk, detail tajam, dan hasil permukaan lebih rapi. Cocok untuk dekorasi, maket, miniatur, dan prototipe tampilan.',
            'pros' => [
                'Detail dan permukaan halus',
                'Warping rendah, hasil stabil',
                'Banyak pilihan warna',
                'Harga relatif lebih hemat',
            ],
            'note_label' => 'Kurang cocok:',
            'note' => 'part yang kena panas tinggi (misalnya dalam mobil terik) atau benturan berat.',
            'use_label' => 'Contoh pakai:',
            'use' => 'pajangan, maket arsitektur, prototype visual, organizer meja.',
        ],
        'petg' => [
            'tag' => 'Paling serbaguna',
            'alt' => 'Hasil cetak material PETG',
            'desc' => 'Lebih tangguh dari PLA dan lebih tahan kelembapan. Cocok untuk part yang dipakai sehari-hari: dudukan, klip, casing, dan komponen fungsional yang butuh daya tahan.',
            'pros' => [
                'Lebih tahan benturan daripada PLA',
                'Tahan air dan kelembapan lebih baik',
                'Lebih tahan panas ringan (~70-80°C)',
                'Cocok untuk part fungsional',
            ],
            'note_label' => 'Catatan:',
            'note' => 'permukaan biasanya kurang tajam dibanding PLA; cocok bila kekuatan lebih penting dari estetika detail.',
            'use_label' => 'Contoh pakai:',
            'use' => 'bracket, klip, housing, dudukan alat, spare part ringan.',
        ],
        'abs' => [
            'tag' => 'Tahan panas',
            'alt' => 'Hasil cetak material ABS',
            'desc' => 'Material teknis yang lebih tahan panas dan lebih kaku. Dipakai untuk part yang bekerja di suhu lebih tinggi atau butuh ketahanan mekanis lebih baik.',
            'pros' => [
                'Tahan panas lebih tinggi (~90-100°C)',
                'Lebih tangguh untuk part teknis',
                'Bisa diproses lanjut (mis. smoothing)',
                'Cocok untuk lingkungan kerja lebih keras',
            ],
            'note_label' => 'Kurang cocok:',
            'note' => 'paparan matahari terus-menerus (UV). Untuk outdoor jangka panjang, konsultasikan alternatif seperti ASA.',
            'use_label' => 'Contoh pakai:',
            'use' => 'housing elektronik, jig/fixture, part otomotif indoor, komponen teknis.',
        ],
        'tips_title' => 'Panduan singkat memilih material',
        'tips' => [
            ['label' => 'Prioritas detail & tampilan?', 'text' => 'Mulai dari PLA.'],
            ['label' => 'Part fungsional yang dipakai sehari-hari?', 'text' => 'Pilih PETG.'],
            ['label' => 'Butuh ketahanan panas lebih tinggi?', 'text' => 'Pertimbangkan ABS.'],
        ],
        'tips_footer' => 'Masih ragu? Kirim file beserta fungsi part-nya. Tim Astro3D akan merekomendasikan material yang paling sesuai untuk kebutuhan dan anggaran Anda.',
    ],

    'gallery' => [
        'eyebrow' => 'Hasil Cetak',
        'title_before' => 'Bukti kualitas dari ',
        'title_highlight' => 'setiap lapisan',
        'lead' => 'Dari dekorasi hingga komponen fungsional dan produksi batch-hasil yang rapi, konsisten, dan siap dipakai.',
        'prev' => 'Sebelumnya',
        'next' => 'Berikutnya',
        'slides' => [
            'Dekorasi',
            'Komponen fungsional',
            'Produksi batch',
        ],
    ],

    'process' => [
        'eyebrow' => 'Alur Produksi',
        'title_before' => 'Dari file ke produk, ',
        'title_highlight' => 'tanpa ribet',
        'lead' => 'Proses transparan dari awal-Anda tahu material, biaya, dan jadwal sebelum produksi dimulai.',
        'steps' => [
            [
                'title' => 'Kirim file 3D',
                'body' => 'Kirim STL, OBJ, STEP, STP, 3MF, atau format lain via WhatsApp. Kami cek kelayakan cetak sejak awal.',
            ],
            [
                'title' => 'Konsultasi & penawaran',
                'body' => 'Tentukan material, warna, dan jumlah. Anda menerima estimasi harga sebelum produksi berjalan.',
            ],
            [
                'title' => 'Cetak & quality control',
                'body' => 'Setiap hasil diperiksa agar sesuai spesifikasi pesanan sebelum masuk tahap pengiriman.',
            ],
            [
                'title' => 'Terima produk',
                'body' => 'Dikemas rapi dan dikirim ke seluruh Indonesia-siap dipakai atau langsung masuk proses bisnis Anda.',
            ],
        ],
    ],

    'reviews' => [
        'eyebrow' => 'Ulasan Klien',
        'title_before' => 'Dipercaya karena hasil yang ',
        'title_highlight' => 'konsisten',
        'lead' => 'Klien kembali karena pengerjaan cepat, packing rapi, dan kualitas yang bisa diandalkan.',
        'shopee' => 'Lihat di Shopee →',
        'rating' => 'Rating 5 dari 5',
    ],

    'faq' => [
        'eyebrow' => 'FAQ',
        'title' => 'Semua yang perlu Anda ketahui sebelum produksi',
        'items' => [
            [
                'q' => 'Berapa biaya jasa 3D printing di Astro3D?',
                'a' => 'Biaya dihitung dari berat hasil cetak, jenis material, dan tingkat kerumitan model. Untuk produksi batch, tarif dapat lebih efisien dan selalu dikonfirmasi sebelum cetak dimulai.',
            ],
            [
                'q' => 'Belum punya file 3D, apakah tetap bisa pesan?',
                'a' => 'Bisa. Kami dapat membantu memodelkan dari sketsa atau referensi menjadi file 3D siap cetak. Sertakan ukuran yang jelas agar hasil sesuai kebutuhan.',
            ],
            [
                'q' => 'Berapa lama proses pengerjaannya?',
                'a' => 'Umumnya 1-3 hari kerja, tergantung ukuran, jumlah, dan antrian produksi. Estimasi pasti kami konfirmasikan saat penawaran.',
            ],
            [
                'q' => 'Apakah bisa cetak satuan? Ada minimum order?',
                'a' => 'Bisa cetak satuan. Minimum pemesanan saat ini 20 gram-cocok untuk prototipe maupun kebutuhan personal.',
            ],
            [
                'q' => 'Bagaimana memilih material yang tepat?',
                'a' => 'PLA untuk detail dan tampilan, PETG untuk part fungsional, ABS untuk ketahanan panas lebih tinggi. Masih ragu? Konsultasi gratis via WhatsApp.',
            ],
            [
                'q' => 'Format file apa saja yang diterima?',
                'a' => 'STL, OBJ, STEP, STP, 3MF, dan format 3D umum lainnya. Kirim file Anda-kami cek kelayakan cetaknya sebelum produksi.',
            ],
        ],
    ],

    'cta' => [
        'title' => 'Wujudkan ide Anda, lapis demi lapis.',
        'body' => 'Kirim file 3D Anda hari ini. Kami bantu rekomendasi material, estimasi biaya, dan jadwal produksi.',
        'button' => 'Kirim File via WhatsApp',
    ],

    'footer' => [
        'tagline' => 'Astro3D - Partner Produksi Anda',
        'about' => 'Wujudkan ide menjadi produk nyata. Surabaya, Jawa Timur - melayani seluruh Indonesia.',
        'material' => 'Material',
        'gallery' => 'Galeri',
        'process' => 'Alur',
        'faq' => 'FAQ',
        'shopee' => 'Shopee Astro3D',
    ],
];
