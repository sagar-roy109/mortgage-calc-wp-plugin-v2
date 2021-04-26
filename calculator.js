
/** Property Value Range **/



let propertyValue = 0;
let incomeRentalValue = 0;
let depositValue = 0;
let interestRate = 0;
var propertyValueSlider = new rSlider({
    target: "#propertyValue",
    values: {
        min: 0,
        max: 1499990,
    },
    step: 3000,
    range: false,
    tooltip: true,
    scale: false,
    labels: false,
    width: "470px",
    set: [300000],
    onChange: function (values) {


        document.getElementById("propertyValueOutput").value = values;
        propertyValue = +values;
        calculateInstallment()

    },


});






/** Rental Income **/

var rentalIncomeSlider = new rSlider({
    target: "#rentalIncome",
    values: {
        min: 0,
        max: 4990,
    },
    step: 10,
    range: false,
    tooltip: true,
    scale: false,
    labels: false,
    width: "468px",
    set: [1500],
    onChange: function (values) {

        document.getElementById("rentalIncomeValueOutput").value = values;
        incomeRentalValue = +values;
        calculateInstallment()

    },

});



/** deposit **/

var depositSlider = new rSlider({
    target: "#deposit",
    values: {
        min: 0,
        max: 1499990,
    },
    step: 5000,
    range: false,
    tooltip: true,
    scale: false,
    labels: false,
    width: "467px",
    set: [100000],
    onChange: function (values) {


        document.getElementById("depositOutput").value = values;
        depositValue = +values;
        calculateInstallment()

    },

});



var interestRateSlider = new rSlider({
    target: "#intslider",
    values: {
        min: 0,
        max: 10,
    },
    step: 0.5,
    range: false,
    tooltip: true,
    scale: false,
    labels: false,
    width: "467px",
    set: [2.5],
    onChange: function (values) {


        document.getElementById("interestRateOutput").value = values;
        interestRate = +values;
        calculateInstallment()

    },

});




// Calculate Installment

function calculateInstallment() {

    const stampDuty = (propertyValue * 3) / 100;
    document.getElementById('stampDuty').innerText = stampDuty;

    const borrow = incomeRentalValue * 192;
    document.getElementById('borrowAmount').innerText = borrow;


    if (interestRate == 0) {
        document.getElementById('ltv').innerText = 50;
    } else {
        let BalanceOutstanding = (borrow + stampDuty) - depositValue;

        if (BalanceOutstanding > 0) {
            let ltvAmount = parseInt(document.getElementById('ltv').innerText);
            ltvAmount = ((BalanceOutstanding / propertyValue) * 100).toFixed(2);
            document.getElementById('ltv').innerText = ltvAmount

            if (ltvAmount > 99) {
                ltvAmount = 99;
                document.getElementById('ltv').innerText = ltvAmount;
            }

            let TotalInterestAmount = (BalanceOutstanding * interestRate) / 100;

            let MonthlyInterestAmount = (TotalInterestAmount / 12).toFixed(2);
            

            document.getElementById('intAmount').innerText = MonthlyInterestAmount;


        } else {
            document.getElementById('interestAmount').innerText = 0;
            document.getElementById('ltv').innerText = 0;
        }



    }
}







