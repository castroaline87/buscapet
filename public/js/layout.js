document.addEventListener("DOMContentLoaded", () => {

    let urlParams = new URLSearchParams(location.search);

    for(let entry of urlParams.entries()) {
        let input = document.querySelector("*[name='"+ entry[0] +"']");
        if(! input) continue;
        input.value = entry[1];
    }

});