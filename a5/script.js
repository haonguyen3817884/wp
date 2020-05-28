/* Insert your javascript here */


// Navigation bar current links' color adjustment set-up.
var previous;

// When link is activated 
function activate(idem) {
    var linkchose = document.getElementById(idem);
    linkchose.style.color = "red";
}

//When link is unactivated
function unactivate(idem) {
    if (about_us == 1 && price == 0 && Now_Showing == 0) {
        if (idem == 'option1') {
            var linkchose = document.getElementById(idem);
            linkchose.style.color = "red";
        }
        else {
            var linkchose = document.getElementById(idem);
            linkchose.style.color = "white";
        }

    }
    else if (about_us == 0 && price == 1 && Now_Showing == 0) {
        if (idem == "option3") {
            var linkchose = document.getElementById(idem);
            linkchose.style.color = "red";
        }
        else {
            var linkchose = document.getElementById(idem);
            linkchose.style.color = "white";
        }

    }
    else if (about_us == 0 && price == 0 && Now_Showing == 1) {
        if (idem == "option2") {
            var linkchose = document.getElementById(idem);
            linkchose.style.color = "red";
        }
        else {
            var linkchose = document.getElementById(idem);
            linkchose.style.color = "white";
        }
    }
    else if (about_us == 0 && price == 0 && Now_Showing == 0) {
        var linkchose = document.getElementById(idem);
        linkchose.style.color = "white";
    }

}

//When link is hoverd
function hover(idem) {
    var linkchose = document.getElementById(idem);
    linkchose.style.color = "red";
}


/*This function uses to calculate horizontal areas of each main content parts
 and makes the navigation bar links colors' adjustment
 */
var topheight_of_element1 = document.getElementById("About-Us").offsetTop;
var topheight_of_element2 = document.getElementById("Now-Showing").offsetTop;
var topheight_of_element3 = document.getElementById("Price").offsetTop;
var topheight_of_element4 = document.getElementById("summary").offsetTop;

var height_of_element1 = document.getElementById("About-Us").offsetHeight;
var height_of_element2 = document.getElementById("Now-Showing").offsetHeight;
var height_of_element3 = document.getElementById("Price").offsetHeight;

var parse_topheight_of_element1 = parseFloat(topheight_of_element1, 10) - 100;
var parse_topheight_of_element2 = parseFloat(topheight_of_element2, 10) - 100;
var parse_topheight_of_element3 = parseFloat(topheight_of_element3, 10) - 100;
var distance = window.scrollY;
var parse_distance = parseFloat(distance, 10);

console.log(parse_distance);
console.log(topheight_of_element1);
console.log(topheight_of_element2);
console.log();
function swth() {
    var distance = window.scrollY;
    var parse_distance = parseFloat(distance, 10);


    if (parse_distance > parse_topheight_of_element1 && parse_distance < parse_topheight_of_element2) {

        about_us = 1;
        Now_Showing = 0;
        price = 0;
        activate('option1');
        unactivate('option2');
        unactivate('option3');

    }
    else if (parse_distance >= parse_topheight_of_element2 && parse_distance < parse_topheight_of_element3) {
        Now_Showing = 1;
        price = 0;
        about_us = 0;
        activate('option2');
        unactivate('option1');
        unactivate('option3');

    }
    else if (parse_distance >= parse_topheight_of_element3 && distance < topheight_of_element4) {
        price = 1;
        about_us = 0;
        Now_Showing = 0;
        activate('option3');
        unactivate('option2');
        unactivate('option1');
        count6 = 1;

    }
    else {
        count4 = 0;
        count5 = 0;
        count6 = 0;

        price = 0;
        about_us = 0;
        Now_Showing = 0;
        unactivate('option2');
        unactivate('option3');
        unactivate('option1');

    }

}
function getID(idem){
    console.log(idem);
}

idArray = [
    'synopsisANM',
    'synopsisRMC',
    'synopsisAHF',
    'synopsisACT'];
for (id in idArray){
  console.log(idArray[id]);
}

function getSynopsis(idem){
        idArray = [
        'synopsisANM',
        'synopsisRMC',
        'synopsisAHF',
        'synopsisACT'];
        console.log(idem);
        idem = 'synopsis'+idem.slice(0,3);
        console.log(idem);
        for (id in idArray){
            console.log(idArray[id]);
            if (idArray[id] == idem){
                document.getElementById(idArray[id]).style.display = "block";
            }else{
                document.getElementById(idArray[id]).style.display = "none";
            }
        }
        console.log("click");
}

// This function uses to lock the booking form if users do not click on the booking button on synopsis area. 
function lock_input(idem) {
    if (is_movie_selected == "no") {
        document.getElementById(idem).selectedIndex = 0;
        total_price = 0;
        storing_the_number_seats = {};
    }
}

//
var count = 0;
var count1 = 0;
var count3 = 0;
var count4 = 0;
var count5 = 0;
var count2 = 0;
var counttotal = 0;

var checkrepeat;
var checkrepeat2;

var about_us = 0;
var Now_Showing = 0;
var price = 0;

// This function uses to input movie title, day and time to the booking form.
function select_movie(idem) {
    var memorize_id_button = idem;
    var array_button_id = memorize_id_button.split('-');
    var movie_title_convert = array_button_id[0] + "-title"
    console.log(movie_title_convert);
    var remember_movie_title = document.getElementById(movie_title_convert).textContent
    document.getElementById('movie-title').innerHTML = remember_movie_title;
    document.getElementById('movie-title1').value = array_button_id[0];
    var array_string_memorize = document.getElementById(idem).textContent.split(" ");
    var day_up = document.getElementById('day');
    var time = document.getElementById('time');
    var day_up1 = document.getElementById('day1');
    var time1 = document.getElementById('time1');
    time.innerHTML = array_string_memorize[1];
    day_up.innerHTML = array_string_memorize[0];
    time1.value = array_string_memorize[1];
    day_up1.value = array_string_memorize[0];

    document.getElementById('seats-STA').selectedIndex = 0;
    document.getElementById('seats-STC').selectedIndex = 0;
    document.getElementById('seats-STP').selectedIndex = 0;
    document.getElementById('seats-FCA').selectedIndex = 0;
    document.getElementById('seats-FCC').selectedIndex = 0;
    document.getElementById('seats-FCP').selectedIndex = 0;

    total_price = 0;
    storing_the_number_seats = {};

}

// This function uses to check if user choose at least 1 ticket or not.
function total_check() {
    var select_of_value_index1 = document.getElementById('seats-FCA').selectedIndex;
    var select_of_value_index2 = document.getElementById('seats-FCP').selectedIndex;
    var select_of_value_index3 = document.getElementById('seats-FCC').selectedIndex;
    var select_of_value_index4 = document.getElementById('seats-STA').selectedIndex;
    var select_of_value_index5 = document.getElementById('seats-STP').selectedIndex;
    var select_of_value_index6 = document.getElementById('seats-STC').selectedIndex;

    if (select_of_value_index1 == "0" && select_of_value_index2 == "0" && select_of_value_index3 == "0" && select_of_value_index4 == "0" && select_of_value_index5 == "0" && select_of_value_index6 == "0") {
        document.getElementById('seats-FCA').style.borderColor = "red";
        document.getElementById('seats-FCP').style.borderColor = "red";
        document.getElementById('seats-FCC').style.borderColor = "red";
        document.getElementById('seats-STA').style.borderColor = "red";
        document.getElementById('seats-STP').style.borderColor = "red";
        document.getElementById('seats-STC').style.borderColor = "red";


        count3 = 0;
    }
    else {
        document.getElementById('seats-FCA').style.borderColor = "green";
        document.getElementById('seats-FCP').style.borderColor = "green";
        document.getElementById('seats-FCC').style.borderColor = "green";
        document.getElementById('seats-STA').style.borderColor = "green";
        document.getElementById('seats-STP').style.borderColor = "green";
        document.getElementById('seats-STC').style.borderColor = "green";
        count3 = 1;
    }
}

var array_seat_codes = ['FCA', 'STA', 'STC', 'STP', 'FCP', 'FCC'];

// This functions use to calculate total price.
var while_conditional_number = 0;
var count_array = [];
var storing_the_number_seats = {};
var total_price = 0;
var happy_days = ['MON', "WED"];
var the_other_weekdays = ["TUE", "THU", "FRI"];
var weekend = ["SAT", "SUN"];

function calc(idem) {
    var is_any_seat_selected = document.getElementById(idem).selectedIndex;
    var value_of_the_seat = document.getElementById(idem).value;
    var value_of_the_seat_number_conversion = parseInt(value_of_the_seat);
    var string_memorizee = idem;
    var list = string_memorizee.split("-");

    if (is_movie_selected == 'yes') {
        if (is_any_seat_selected == "0") {
            storing_the_number_seats[list[1]] = 0;
        }
        else {
            storing_the_number_seats[list[1]] = value_of_the_seat_number_conversion;

        }



        for (var key in storing_the_number_seats) {

            if (happy_days.includes(document.getElementById('day').textContent)) {
                var get_price = document.getElementById(key + "-discount").textContent;
            }
            else if (weekend.includes(document.getElementById('day').textContent)) {
                var get_price = document.getElementById(key + "-fullprice").textContent;
            }
            else {
                if (document.getElementById('time').textContent == "T12") {
                    var get_price = document.getElementById(key + "-discount").textContent;
                }
                else if (document.getElementById('time').textContent != "T12") {
                    var get_price = document.getElementById(key + "-fullprice").textContent;

                }
            }
            var get_price_converting_to_number = parseFloat(get_price);
            total_price = total_price + storing_the_number_seats[key] * get_price_converting_to_number;
        }

        document.getElementById('ticket_price').innerHTML = "$" + total_price.toFixed(2);
        total_price = 0;

    }
    else {
        total_price = 0;
    }


}

/* This function use to give the user feedback when they book ticket.
If they haven't book yet the feedback message will pop-up and border turns red.
Else the border turns green.
*/
var string_conversion_from_numbericvalue = "";

function check_and_givefeedback(idem) {
    while_conditional_number = 1;
    if (count3 == 0) {
        while (while_conditional_number <= 6) {
            string_conversion_from_numbericvalue = new String(while_conditional_number);
            var trim_space_of_string = string_conversion_from_numbericvalue.trim();
            document.getElementById(trim_space_of_string).innerHTML = "Please select one at least"
            document.getElementById(trim_space_of_string).style.color = "red"
            while_conditional_number += 1;
        }
    }
    else {
        while (while_conditional_number <= 6) {
            string_conversion_from_numbericvalue = new String(while_conditional_number);
            var trim_space_of_string = string_conversion_from_numbericvalue.trim();
            document.getElementById(trim_space_of_string).innerHTML = ""
            document.getElementById(trim_space_of_string).style.color = "green"
            while_conditional_number += 1;
        }
    }
}


// This function uses to validate Australia mobile number.
function check_regex_mobile(idem) {
    var the_needed_tested_test = document.getElementById(idem).value;

    var regex = new RegExp("^(([+](04)|[(][+](04)[)]|[(][+](614)[)]|[+](614)) ?)([0-9] ?){8}$");
    if (regex.test(the_needed_tested_test)) {
        var get_element = document.getElementById(idem);
        get_element.style.borderColor = "green";
        document.getElementById('feedback-messages_3').innerHTML = "correct"
        document.getElementById('feedback-messages_3').style.color = "green"
    }
    else if (!regex.test(the_needed_tested_test)) {
        var get_element = document.getElementById(idem);
        get_element.style.borderColor = "red";
        document.getElementById('feedback-messages_3').innerHTML = "invalid"
        document.getElementById('feedback-messages_3').style.color = 'red'
    }
}

// This function uses to validate customer's email.
function check_regex_email(idem) {
    var the_needed_tested_test = document.getElementById(idem).value;
    var check = new RegExp("^[A-Za-z/'-_]*[/@][A-Za-z0-9][a-z0-9]+(([/.][a-z]{3})|([/.][a-z]{3}[/.][a-z]*))$");
    if (check.test(the_needed_tested_test)) {
        var get_element = document.getElementById(idem);
        get_element.style.borderColor = "green";
        document.getElementById('feedback-messages_2').innerHTML = "correct"
        document.getElementById('feedback-messages_2').style.color = "green"

    }
    else if (!check.test(the_needed_tested_test)) {
        var get_element = document.getElementById(idem);
        get_element.style.borderColor = "red";
        document.getElementById('feedback-messages_2').innerHTML = "invalid"
        document.getElementById('feedback-messages_2').style.color = "red"
    }
}

// This function uses to validate customer's creadit card.
function check_regex_tel(idem) {
    var the_needed_tested_test = document.getElementById(idem).value;
    var check = new RegExp("^([0-9] ?){14,19}$");
    if (check.test(the_needed_tested_test)) {
        var get_element = document.getElementById(idem);
        get_element.style.borderColor = "green";
        document.getElementById('feedback-messages_4').innerHTML = "correct"
        document.getElementById('feedback-messages_4').style.color = "green"

    }
    else if (!check.test(the_needed_tested_test)) {
        var get_element = document.getElementById(idem);
        get_element.style.borderColor = "red";
        document.getElementById('feedback-messages_4').innerHTML = "invalid"
        document.getElementById('feedback-messages_4').style.color = "red"
    }


}

// This function uses to validate customer's name.
function check_regex_name(idem) {
    var the_needed_tested_test = document.getElementById(idem).value;

    var check = new RegExp("^([A-Za-z/'.-]+  ?)*[A-Za-z/'.-]+([' ']+|)$");
    if (check.test(the_needed_tested_test)) {
        document.getElementById(idem).style.borderColor = "green";
        document.getElementById("feedback-messages_1").innerHTML = "correct"
        document.getElementById("feedback-messages_1").style.color = "green"
    }
    else if (!check.test(the_needed_tested_test)) {
        document.getElementById(idem).style.borderColor = "red";
        document.getElementById('feedback-messages_1').innerHTML = "invalid"
        document.getElementById('feedback-messages_1').style.color = "red"
    }
}

function convert_to_2_decimal(idem) {
    var str_need_converted = idem.toString();
    for (letter in str_need_converted) {

    }
}

var array_seat_codes = ['FCA', 'STA', 'STC', 'STP', 'FCP', 'FCC'];
function initial_state() {
    document.getElementById('seats-STA').selectedIndex = 0;
    document.getElementById('seats-STC').selectedIndex = 0;
    document.getElementById('seats-STP').selectedIndex = 0;
    document.getElementById('seats-FCA').selectedIndex = 0;
    document.getElementById('seats-FCC').selectedIndex = 0;
    document.getElementById('seats-FCP').selectedIndex = 0;


    total_price = 0;
    storing_the_number_seats = {};

}

// This function uses to update movie ID into booking form.
function update_movieID(idem) {
    document.getElementById('movie-title').innerHTML = ""
    document.getElementById('day').innerHTML = "";
    document.getElementById('time').innerHTML = "";
    document.getElementById('seats-STA').selectedIndex = 0;
    document.getElementById('seats-STC').selectedIndex = 0;
    document.getElementById('seats-STP').selectedIndex = 0;
    document.getElementById('seats-FCA').selectedIndex = 0;
    document.getElementById('seats-FCC').selectedIndex = 0;
    document.getElementById('seats-FCP').selectedIndex = 0;

    total_price = 0;
    storing_the_number_seats = {};

}

// This fuction use to limit the expiry day of customer credit card to future.
function limitDate() {
    var today = new Date();
    var currentYear = today.getFullYear();
    var currentMonth = today.getMonth() + 2;
    console.log(currentYear);
    console.log(currentMonth);
    var min;
    if (parseInt(currentMonth) <= 9) {
        min = currentYear + "-0" + currentMonth
        console.log(min);
    } else {
        min = currentYear + currentMonth
    }
    document.getElementById("Date-time").min = min;
}

//This function use to check the user information require in booking form
function check_required() {
    var get_trimmed_name_input_value = document.getElementById('name').value.trim();
    var get_trimmed_Email_input_value = document.getElementById("email").value.trim();
    var get_trimmed_Mobile_input_value = document.getElementById('mobile').value.trim();
    var get_trimmed_credit_card_input_value = document.getElementById('credit-card').value.trim();
    if (get_trimmed_Email_input_value == "") {
        document.getElementById('feedback-messages_2').innerHTML = "Please fill in this"
        document.getElementById('feedback-messages_2').style.color = "red"
        document.getElementById('email').style.borderColor = "red"
    }

    if (get_trimmed_name_input_value == "") {
        document.getElementById('feedback-messages_1').innerHTML = "Please fill in this"
        document.getElementById('feedback-messages_1').style.color = "red"
        document.getElementById('name').style.borderColor = "red"
    }

    if (get_trimmed_Mobile_input_value == "") {
        document.getElementById('feedback-messages_3').innerHTML = "Please fill in this"
        document.getElementById('feedback-messages_3').style.color = "red"
        document.getElementById('mobile').style.borderColor = "red"
    }

    if (get_trimmed_credit_card_input_value == "") {
        document.getElementById('feedback-messages_4').innerHTML = "Please fill in this"
        document.getElementById('feedback-messages_4').style.color = "red"
        document.getElementById('credit-card').style.borderColor = "red"
    }

}

// This function uses to check if the booking the synopsis area has clicked or not.
var is_movie_selected = '';

function is_button_clicked() {
    if (document.getElementById("time").textContent != "") {
        document.getElementById("reminder_of_pressed_button").innerHTML = ""
        is_movie_selected = 'yes';
    }
    else if (document.getElementById("movie-title").textContent == "") {
        document.getElementById("reminder_of_pressed_button").innerHTML = "Please make a booking before selecting seats"
        document.getElementById("reminder_of_pressed_button").style.color = "red"
        is_movie_selected = 'no';
    }

    else if (document.getElementById("movie-title").textContent != "") {
        document.getElementById("reminder_of_pressed_button").innerHTML = "Please make a booking before selecting seats"
        document.getElementById("reminder_of_pressed_button").style.color = "red"
        is_movie_selected = 'no';
    }

}