import $ from 'jquery';
import 'datatables.net-dt';
import {submitUploadExcel} from "./modul.upload.excel.js";
import {submitFormText} from "./modul.form.text.js";
import {submitFormPut} from "./modul.form.put.js";
import {buttonDelete} from "./modul.delete.js";
import {submitUploadFile} from "./modul.upload.file.js";


// load halaman dan mengaktifkan datatable
// menu
$(document).on('click', '.menu-link', function () {
    $('.class-progres-view').show();
    let link = $(this).attr('link');
    $('.content-load').load(link, function () {
        $('.my-table').DataTable();
        $('.class-progres-view').hide();
        buttonDelete('btn-del-jnsgambar');
        buttonDelete('btn-del-jnsbantuan');
        buttonDelete('btn-del-penyalur');
    });
});

// load form
// click new data
$(document).on('click', '.button-form', function () { // memanggil form
    $('.class-progres-view').show();
    let link = $(this).attr('link');
    $('.content-load').load(link, function () {
        $('.class-progres-view').hide();
    });

    // submit form store
    let typeForm = $(this).attr('data');
    if (typeForm == "form-excel") {
        submitUploadExcel('data-kpm', 'data-kpm');
        submitUploadExcel('sppd', 'sppd');
    } else if (typeForm == "form-text") {
        submitFormText('jenis-gambar', 'jenis-gambar');
        submitFormText('penyalur-form', 'penyalur');
        submitFormText('jenis-bantuan', 'jenis-bantuan');
        submitFormText('jenis-pelaporan', 'jenis-pelaporan');
        submitFormText('status-pelaporan', 'status-pelaporan');
    }
});

// click edit button in table
// edit button
$(document).on('click', '.btn-edit-class', function () {
    $('.class-progres-view').show();
    let data = $(this).attr('data');
    $('.content-load').load(data, function () {
        $('.class-progres-view').hide();
        submitFormPut('jenis-gambar-update', 'jenis-gambar');
        submitFormPut('jenis-bantuan-update', 'jenis-bantuan');
        submitFormPut('penyalur-update', 'penyalur');
        submitFormPut('jenis-pelaporan-update', 'jenis-pelaporan');
        submitFormPut('status-pelaporan-update', 'status-pelaporan');
    });
});
// click foto
$(document).on('click', '.btn-foto-class', function () {
    $('.class-progres-view').show();
    let nik = $(this).attr('data');
    $('.content-load').load('gambar/' + nik, function () {
        $('.class-progres-view').hide();
        buttonDelete('btn-del-gambar', function () {
            $('.content-load').load('gambar/' + nik);
            console.log('gambar/' + nik);
        });
    });
});
// click upload foto di gambar
$(document).on('click', '.button-upload-image', function () {
    let nik = $(this).attr('data');
    let jenisGambarId = $(this).attr('data1');
    $('.class-progres-view').show();
    $('.modal-load-content').load('form-upload-image/' + nik + '/' + jenisGambarId, function () {
        $('.class-progres-view').hide();
        submitUploadFile('upload-gambar', 'gambar', function () {
            $('.content-load').load('gambar/' + nik);
        });
    });
})
