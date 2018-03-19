 //Mouse down change value to placeholder
    function active(){
        var searchBar = document.getElementById('searchBar');
        if(searchBar.value === 'What job are you looking for?'){
            searchBar.value = '';
            searchBar.placeholder = 'What job are you looking for?';
        }
    };
    function active2(){
        var searchBar2 = document.getElementById('searchBar2');
        if(searchBar2.value === 'Where do you want to live?'){
            searchBar2.value = '';
            searchBar2.placeholder = 'Where do you want to live?';
        }
    };
    function active3(){
        var searchBar3 = document.getElementById('searchBar3');
        if(searchBar3.value === 'What course are you looking for?'){
            searchBar3.value = '';
            searchBar3.placeholder = 'What course are you looking for?';
        }
    };
    //Mouse leave change placeholder to value
    function inactive(){
        var searchBar = document.getElementById('searchBar');
        if(searchBar.value === ''){
            searchBar.value = 'What job are you looking for?';
            searchBar.placeholder = '';
        }
    };
    function inactive2(){
        var searchBar2 = document.getElementById('searchBar2');
        if(searchBar2.value === ''){
            searchBar2.value = 'Where do you want to live?';
            searchBar2.placeholder = '';
        }
    };
    function inactive3(){
        var searchBar3 = document.getElementById('searchBar3');
        if(searchBar3.value === ''){
            searchBar3.value = 'What course are you looking for?';
            searchBar3.placeholder = '';
        }
    };

