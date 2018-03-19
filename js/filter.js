var textarea = document.getElementById("inputFilter");
textarea.oninput = function() {
  textarea.style.height = "";
  textarea.style.height = Math.min(textarea.scrollHeight, 300) + "px";
};

var searchList = [];
function setValue(obj){
    var inputFilter = document.getElementById('inputFilter');
    var filterItems = $(obj).text();
    searchList.push(filterItems);
    var newSearch = searchList.toString().replace(/,/g, ' + ');
    inputFilter.value = newSearch;
    console.log(inputFilter.value);
}

function clearContent(){
    document.getElementById("inputFilter").value='';
    searchList = [];
}
