<?php

// Mengimpor kelas TestCase dari framework PHPUnit
use PHPUnit\Framework\TestCase;

// Mengimpor kelas WordCount yang akan diuji
require_once "Wordcount.php";

// Membuat kelas pengujian, yaitu SimpleTest, yang merupakan turunan dari TestCase
class SimpleTest extends TestCase {
    
    // Metode pengujian unit untuk menguji countWords dalam kelas WordCount
    public function testCountWords() {
        // Membuat objek dari kelas WordCount
        $Wc = new WordCount();

        // Kalimat contoh yang akan dihitung jumlah katanya
        $TestSentence = "My name is Joko";

        // Memanggil metode countWords untuk menghitung jumlah kata dalam kalimat
        $WordCount = $Wc->countWords($TestSentence);

        // Membandingkan hasil perhitungan dengan nilai yang diharapkan (4)
        $this->assertEquals(4, $WordCount);
    }
}
