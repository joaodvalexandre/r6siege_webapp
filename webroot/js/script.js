document.addEventListener("DOMContentLoaded", function(e) {
    toggleHome(0)
});

function toggleHome(index){
    if(index == 0){
        document.getElementById('operators-div').style.display = 'flex';
        document.getElementById('weapons-div').style.display = 'none';
    } else {
        document.getElementById('operators-div').style.display = 'none';
        document.getElementById('weapons-div').style.display = 'flex';
    }
}