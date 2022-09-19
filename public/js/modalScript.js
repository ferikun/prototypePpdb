
//tahun ajaran
function edit(id, tahun){

    console.log(tahun);
    const modal = document.getElementsByClassName('editmodal')[0];
    const valueEdit = document.getElementById('editValue').value = tahun;
    modal.setAttribute('action','/dashboard/tahun-ajaran/'+ id);
}

function hapus($id){
    const modal = document.getElementsByClassName('hapusmodal')[0];
    modal.setAttribute('action','/dashboard/tahun-ajaran/'+$id);
}


//jurusan
function editJurusan(id, nama_jurusan){

    const modalJurusan = document.getElementsByClassName('modalEditJurusan')[0];
    modalJurusan.setAttribute('action','/dashboard/jurusan/'+id);
    const valueEditJurusan = document.getElementById('jurusanValue').value = nama_jurusan;

}

function hapusJurusan(id){
    const modalHapus = document.getElementsByClassName('modalHapusJurusan')[0];
    modalHapus.setAttribute('action','/dashboard/jurusan/'+id);
}