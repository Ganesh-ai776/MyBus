//step - 1

// get references to the main container
const container = document.querySelector(".container");
// get references of available seat
const seats = document.querySelectorAll(".row .seat:not(.sold)");
// get references of the count and total elements
const count = document.getElementById('count');
const total = document.getElementById('total');

// get references of bus-type
const busType = document.getElementById('ac');

//get references of form
// const type = document.getElementById('type');
const seat_count = document.getElementById('seat_count');
const t_price = document.getElementById('t_price');

//ticket price
let ticketPrice =+ busType.value;
console.log(ticketPrice);






//step - 2

// event listner for bus-type change
busType.addEventListener('change',(t)=>{
    ticketPrice = t.target.value;

    // update displayed count and total
    
    updateCountTotal(t.target.selectedIndex);

});


// event listner for click choose seat 

container.addEventListener('click',(e)=>{
    if (e.target.classList.contains('seat') && !e.target.classList.contains('sold')) {

        //target seat selection
        e.target.classList.toggle('selected');

        // update displayed count and total
        updateCountTotal();


        

    }
});






//step - 3 define function update select  count and total

function updateCountTotal(busIndex){
    //get all selected seat
    const selectedSeats = document.querySelectorAll('.row .seat.selected');

    // get array to selected seat's index number
    const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));
    // console.log(seatsIndex);

    //collect selected seats and count
    const selectedSeatsCounts = selectedSeats.length;

    //update UI selected seats count and total price
    count.innerText = selectedSeatsCounts;
    total.innerText = selectedSeatsCounts * ticketPrice;

    // type.value = busIndex + 1;
    seat_count.value = selectedSeatsCounts;
    t_price.value = selectedSeatsCounts * ticketPrice;
}


