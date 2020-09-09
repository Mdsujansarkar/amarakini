(function(){
    const classname = document.querySelectorAll('.pro-qty')
    Array.from(classname).forEach(function(element) {
        element.addEventListener('change', function() {
            // const id = element.getAttribute('data-id')
            // const productQuantity = element.getAttribute('data-productQuantity')
            // axios.patch(/cart/5, {
            //     quantity:3,
               
            // })
            // .then(function (response) {
            //     console.log(response);
                
            // })
            // .catch(function (error) {
            //     console.log(error);
            
            // });
            alert("hi")
        })
    })
})();