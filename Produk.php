<?php
include 'FormInput.php';
$form = new FormInput('Proses.php');
$form->open();


$form->inputSelect("jenis_buket", "Jenis Buket",[
    'buket_bunga' => 'Buket Bunga',
    'buket_boneka' => 'Buket Boneka',
    'buket_uang' => 'Buket Uang',
    'buket_snack' => 'Buket Snack']);

$form->inputCheckBox("tema", "Tema",[
    'wedding' => 'Wedding',
    'valentine' => 'Valentine',
    'birthday' => 'Birthday',
    'graduation' => 'Graduation']);

$form->inputRadio("ukuran", "Ukuran",[
    'mini' => 'Mini',
    'normal' => 'Normal',
    'giant' => 'Giant']);

$form->inputText("harga", "Harga");

$form->inputTextarea("Deskripsi", "Deskripsi");

// Tambahkan tombol submit
$form->submitButton("Simpan");

// Tampilkan form
echo $form->close();
?>