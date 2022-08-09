$(document).ready(function() {

var table = document.getElementById("manage-table"),rIndex;

for(var i = 1; i < table.rows.length; i++){
    table.rows[i].onclick = function(){
        rIndex = this.rowIndex;
        console.log(rIndex);

        document.getElementById("newdate").value = this.cells[2].innerHTML;
        document.getElementById("newin").value = this.cells[3].innerHTML;
        document.getElementById("newout").value = this.cells[4].innerHTML;
    };
}

});


// edit the row
function editRow(){
    table.rows[rIndex].cells[2].innerHTML = document.getElementById("newdate").value;
    table.rows[rIndex].cells[3].innerHTML = document.getElementById("newin").value;
    table.rows[rIndex].cells[4].innerHTML = document.getElementById("newout").value;
}

// Data Update Table Here
function editTableDisplay(){
    document.querySelector('.editTable').setAttribute('style', 'display: block;')
}
