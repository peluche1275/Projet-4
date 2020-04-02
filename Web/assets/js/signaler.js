let Report = function (button) 
{

    // PROPERTY //

    this.button = button;

    // METHOD //

    this.run = function () 
    {
        button.addEventListener("click", function (Event) 
        {
            if (confirm("Voulez-vous signaler ce commentaire ?") == false) 
            {
                Event.preventDefault();
            }
        });
    }
}

