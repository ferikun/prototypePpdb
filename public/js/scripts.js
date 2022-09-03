window.addEventListener('DOMContentLoaded', event => {

    const sidebarToggle = document.body.querySelector('#menu');
    if (sidebarToggle) {

        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

// upload file
function getImage(imagename) {
    var newimg = imagename.replace(/^.*\\/, "");
    $('#display-image').html(newimg);
}

function getImage2(imagename) {
    var newimg = imagename.replace(/^.*\\/, "");
    $('#display-image2').html(newimg);
}

// admin
//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

// sidebar
function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("konten").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("konten").style.marginLeft = "0";
}

// $('.btn1').click(function() {
//     $('.sidebar ul .show-satu').toggleClass("show ");
//     $('.sidebar ul .satu').toggleClass("rotate ");
// })
// $('.btn2').click(function() {
//     $('.sidebar ul .show-dua').toggleClass("show ");
//     $('.sidebar ul .dua').toggleClass("rotate ");
// })
// $('.btn3').click(function() {
//     $('.sidebar ul .show-tiga').toggleClass("show ");
//     $('.sidebar ul .tiga').toggleClass("rotate ");
// })

// edit calon siswa
// let tabel = document.getElementById("tabel_dataSiswa");
// for (let i = 1; i < tabel.rows.length; i++) {
//     tabel.rows[i].onclick = function() {
//         const idbio = document.getElementById("siswaedit");
//         // value = this.cells[0].innerHTML;
//         document.getElementById("nama").value = this.cells[3].innerHTML;
//         document.getElementById("jurusan").value = this.cells[4].innerHTML;
//         document.getElementById("asal_sekolah").value = this.cells[5].innerHTML;
//         document.getElementById("nilai").value = this.cells[6].innerHTML;

//         idbio.setAttribute('action','/daftar-siswa/'+this.cells[0].innerHTML);
//     };
// };

// input nilai
// let input = document.getElementById("tabelInputNilai");
// for (let i = 1; i < input.rows.length; i++) {
//     input.rows[i].onclick = function() {
//         document.getElementById("NP").value = this.cells[1].innerHTML;
//         document.getElementById("name").value = this.cells[2].innerHTML;
//         document.getElementById("sekolah_asal").value = this.cells[3].innerHTML;
//     };
// };