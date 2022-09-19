//edit keuangan

function editKeuangan(id, nama, nominal)
{
    document.getElementById('modalEditKeuangan').setAttribute('action', '/dashboard/setting/keuangan/'+id);
    document.getElementById('test').setAttribute('value',id);
    document.getElementById('editNamaTagihan').setAttribute('value', nama);
    document.getElementById('editNominal').setAttribute('value', nominal);
}

//hapus keuangan
function hapusKeuangan(id)
{
    document.getElementById('modalHapusKeuangan').setAttribute('action','/dashboard/setting/keuangan/'+id);
}