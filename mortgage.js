


let incomeAmout = null;
let depositAmount = null;
let mortgageTypeNew = null;
let mortgageTypeRe = null;
const maxLoan = document.getElementById('output');
const homeLoan = document.getElementById('totalAmount');
const income = document.getElementById('income');
const deposit = document.getElementById('homedeposit');


// Show output after loading template


maxLoan.innerText = +income.value * 4.5;
homeLoan.innerText = (+income.value * 4.5) + (+deposit.value);



// Get income Amount


income.addEventListener('input', function () {

    incomeAmout = +income.value;

    mortgageCalc();

})


//Get Deposit Amount 

deposit.addEventListener('input', function () {

    depositAmount = +deposit.value;

    mortgageCalc();
})


// Get Mortgage Term
const term = document.getElementById('term');

term.addEventListener('input', function () {
    let termAmount = +term.value;


})




//mortgage type
const newMortgage = document.getElementById('newMortgage');
newMortgage.addEventListener('click', function () {
    mortgageTypeNew = newMortgage.value;

    mortgageCalc();


})


const reMortgage = document.getElementById('reMortgage');
reMortgage.addEventListener('click', function () {
    mortgageTypeRe = reMortgage.value;

    mortgageCalc();

})


// Get Rate Type

const fixed = document.getElementById('fixed');
fixed.addEventListener('click', function () {
    let fixedRate = fixed.value;


})


const variable = document.getElementById('variable');
variable.addEventListener('click', function () {
    let variableRate = variable.value;


})



// Get Period

const two = document.getElementById('periodTwo');
two.addEventListener('click', function () {
    let twoYear = +two.value;


})


const three = document.getElementById('periodThree');
three.addEventListener('click', function () {
    let threeYear = +three.value;


})


const four = document.getElementById('periodFour');
four.addEventListener('click', function () {
    let fourYear = +four.value;


})


const five = document.getElementById('periodFive');
five.addEventListener('click', function () {
    let fiveYear = +five.value;


})



// Calculation

function mortgageCalc() {

    depositAmount = +deposit.value;
    incomeAmout = +income.value

    if (mortgageTypeNew == "newMortgage") {
        let maxLoanAmount = incomeAmout * 4.5;
        let HomeAmount = maxLoanAmount + depositAmount;
        maxLoan.innerText = maxLoanAmount;
        homeLoan.innerText = HomeAmount;
        mortgageTypeNew = "";
        mortgageTypeRe  = "";
    }

    else if (mortgageTypeRe == "reMortgage") {
        let maxLoanAmount = incomeAmout * 4.6;
        let HomeAmount = maxLoanAmount + depositAmount;
        maxLoan.innerText = maxLoanAmount;
        homeLoan.innerText = HomeAmount;
        mortgageTypeRe = "reMortgage";
    }
    else {
        let maxLoanAmount = incomeAmout * 4.5;
        let HomeAmount = maxLoanAmount + depositAmount;
        maxLoan.innerText = maxLoanAmount;
        homeLoan.innerText = HomeAmount;

    }



}





