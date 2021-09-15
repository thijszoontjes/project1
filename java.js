$(document).ready(function(){

    function getInputArray(){
        const name = $("#fName").val();
        const cardHolder = $("#fCardHolder").val();
        const email = $("#fEmail").val();
        const cardNumber = $("#fCardNumber").val();
        const address = $("#fAddress").val();
        const expiration = $("#fExpiration").val();
        const city = $("#fCity").val();
        const cvv = $("#fCVV").val();

        return {
            "name": name,
            "cardHolder": cardHolder,
            "email": email,
            "cardNumber": cardNumber,
            "address": address,
            "expiration": expiration,
            "city": city,
            "cvv": cvv
        }
    }

//aiit
    //Roept database.php op en geeft aan op welke manier er wordt betaald
    function payingMethod(usingPayPal){
        const inputArray = getInputArray();

        $.ajax({
            url: "database.php",
            method: "POST",
            type: "POST",
            dataType: "text",
            data: {
                usingPayPal: usingPayPal,
                inputArray: inputArray
            },

            success: function(status){
                console.log(status);
                if(status === "RECORD INSERTED"){
                    $("#bestelStatus").empty().append("<span class='greenText'>De bestelling is toegevoegd.</span>");
                }
                else if(status === "MISSING DATA"){
                    $("#bestelStatus").empty().append("<span class='redText'>Niet alle velden zijn ingevuld.</span>");
                }
            },

            error: function(response){
                console.log("payingMethod error:", response, usingPayPal);
            }
        })
    }


    //Paypal-knop
    $("#paypalImg").on("click", function(eventData){
        //eventData.preventDefault();

        payingMethod(true);
    });

    //Normale bestel-knop
    $("#bestel").on("click", function(eventData){
        eventData.preventDefault();

        payingMethod(false);
    });
});
