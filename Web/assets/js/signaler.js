
let signaler = function (button) 
{

    // PROPRIETIES //

    this.button = button;

    // METHODS //

    this.run = function () 
    {
        button.addEventListener("click", function(Event){
            if (confirm("Voulez-vous signaler ce commentaire ?") == false) 
        {
            Event.preventDefault();
        }
        });
    }
}

