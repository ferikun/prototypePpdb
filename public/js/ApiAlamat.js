//cari provinsi
$.ajax({
    url: 'http://dev.farizdotid.com/api/daerahindonesia/provinsi',
    type: 'get',
    dataType: 'json',



    success: function(hasil){
        console.log(hasil);
        const prov = hasil.provinsi;
        $.each(prov, function(i, data){
            $('#provinsi-select').append(`
            <option id="selectprov" value="`+ data.id +`" >`+ data.nama +`</option>
            `);

        })

    }
});

//cari kabupaten
const btn = document.getElementById('provinsi-select')
btn.addEventListener("click",function(e){
    console.log($(this).val())
    $('#kabupaten-select').find('option:not(:first)').remove()
        



    $.ajax({
        url: 'http://dev.farizdotid.com/api/daerahindonesia/kota',
        type: 'get',
        dataType: 'json',
        data: {
            'id_provinsi' : $(this).val()
        },

        success: function(hasil){
            console.log(hasil);
            const kab = hasil.kota_kabupaten
            $.each(kab, function(i, data){
                $('#kabupaten-select').append(`
                <option id="kabupaten" class="selectkab" value="`+ data.id +`">`+ data.nama +`</option>
                `)
            })
        }
    })
})
//mencari kecamatan
const btnkec = document.getElementById('kabupaten-select')
btnkec.addEventListener("click", function(e){
        console.log('test')
        $('#kecamatan-select').find('option:not(:first)').remove()

        $.ajax({
            url: 'http://dev.farizdotid.com/api/daerahindonesia/kecamatan',
            type: 'get',
            dataType: 'json',
            data: {
                'id_kota' : $(this).val()
            },

            success: function(hasil){
                const kec = hasil.kecamatan

                $.each(kec, function(i, data){
                    $('#kecamatan-select').append(`
                    <option id="kecamatan" class="selectkec" value="`+ data.id +`">`+ data.nama +`</option>
                    `)
                })
            }
        })
})