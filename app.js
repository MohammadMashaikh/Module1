// Security gaurde
// Check queue of people, if person is older than 18 and younger than 35, admit. Otherwise, appologize.

// write variables to contain the limitations of the age.
const minAge = 18;
const maxAge = 35;

// we will loop through the queue.
let currentPerson = 24;
do {


    if (currentPerson < minAge) {
        console.log("you are too young")
    }

    if (currentPerson > maxAge) {
        console.log("you are too old")
    }

    if (currentPerson >= minAge && currentPerson <= maxAge) {
        console.log("Your User Name")
        prompt("Welcome user name");
    }
    // if current person is younger than 18, will print (you are too young)
    // if older than 35, will print (you are too old)
    // if between 18 and 35, ask for the user name, and welcome the user by his/her name.
} while (confirm("Is there anyone else?"));