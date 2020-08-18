document.addEventListener("DOMContentLoaded", function(event) {
    function goToElement(){
        let item = window.location.hash;
        item = item.replace('/', '_')
        item = item.replace('#', '')

        if(item != "" && $(`#collapse_${item}`).length != 0){
            $(`#collapse_${item}`).collapse('show')

            console.log($(`#collapse_${item}`))

            $([document.documentElement, document.body]).animate({
                scrollTop: $(`#heading_${item}`).offset().top
            }, 2000);
        }
    }

    goToElement()

    $(".infoboxes .card").click(function() {
        setTimeout(() => {
            goToElement()
        }, 100)
    });
});
