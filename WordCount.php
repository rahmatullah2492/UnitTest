<?php
class WordCount {
    
    // Metode untuk menghitung jumlah kata dalam sebuah kalimat
    public function countWords($sentence) {
        // Memecah kalimat menjadi kata-kata menggunakan spasi sebagai pemisah
        $wordArray = explode(" ", $sentence);

        // Menghitung jumlah kata dengan menghitung elemen-elemen dalam array
        $wordCount = count($wordArray);

        // Mengembalikan hasil jumlah kata
        return $wordCount;
    }
}
