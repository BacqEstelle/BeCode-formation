/* becode/javascript
 *
 * /07-classes/02-methods/script.js - 7.2: méthodes
 *
 * coded by leny@BeCode
 * started at 08/05/2019
 */

// NOTE: don't focus on the existing code structure for now.
// You will have time to focus on it later.

(() => {
    class Person {
        constructor(firstname, lastname) {
            this.firstname = firstname;
            this.lastname = lastname;
        }
    }   

    document.getElementById("run").addEventListener("click", () => {
        var message =" Say Hello ! ";
        var skitty = new Person(" Skitty ", " jesuisunchat ");

            console.log( message + skitty.firstname + skitty.lastname);
        


    
    }); 
})();
